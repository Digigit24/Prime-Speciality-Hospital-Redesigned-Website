#!/usr/bin/env python3
"""Extract WordPress pages from SQL dump and convert to Markdown."""

import csv
import io
import os
import re
import html
from pathlib import Path
from markdownify import markdownify as md

SQL_PATH = Path("C:/ritik/websites/prime/wordpressdump.sql")
OUTPUT_DIR = Path("content")

POST_COLUMNS = [
    "ID", "post_author", "post_date", "post_date_gmt", "post_content",
    "post_title", "post_excerpt", "post_status", "comment_status",
    "ping_status", "post_password", "post_name", "to_ping", "pinged",
    "post_modified", "post_modified_gmt", "post_content_filtered",
    "post_parent", "guid", "menu_order", "post_type", "post_mime_type",
    "comment_count",
]


def unescape_mysql(value: str) -> str:
    """Unescape a MySQL string value (double-quoted)."""
    if not value.startswith('"') or not value.endswith('"'):
        return value
    inner = value[1:-1]
    # MySQL escapes inside double quotes: \", \\, \n, \r, \t, \0, etc.
    inner = inner.replace('\\"', '"')
    inner = inner.replace('\\\\', '\\')
    inner = inner.replace('\\n', '\n')
    inner = inner.replace('\\r', '\r')
    inner = inner.replace('\\t', '\t')
    inner = inner.replace('\\0', '\0')
    inner = inner.replace('\\Z', '\x1a')
    inner = inner.replace("\\'", "'")
    return inner


def parse_values(line: str, table_name: str) -> list[dict]:
    """Parse an INSERT INTO `table` VALUES(...); line into list of dicts."""
    prefix = f"INSERT INTO `{table_name}` VALUES"
    if not line.startswith(prefix):
        return []
    body = line[len(prefix):].strip()
    if body.endswith(";"):
        body = body[:-1].strip()

    rows = []
    # Split by tuples: each tuple is ( ... )
    # Use a simple parser that respects quoted strings
    tuples = split_tuples(body)
    for tup in tuples:
        tup = tup.strip()
        if tup.startswith("(") and tup.endswith(")"):
            tup = tup[1:-1]
        reader = csv.reader(io.StringIO(tup), quotechar='"', escapechar='\\', doublequote=False, skipinitialspace=True)
        try:
            values = next(reader)
        except Exception as e:
            print(f"Warning: failed to parse tuple: {e}")
            continue
        if len(values) != len(POST_COLUMNS):
            # options table has different columns; caller handles by table_name
            pass
        row = {}
        for col, val in zip(POST_COLUMNS if table_name == "wp_posts" else range(len(values)), values):
            if isinstance(col, int):
                row[col] = unescape_mysql(val) if val.startswith('"') else val
            else:
                row[col] = unescape_mysql(val) if val.startswith('"') else val
        rows.append(row)
    return rows


def split_tuples(body: str) -> list[str]:
    """Split a VALUES body into individual (...) tuples respecting quotes."""
    tuples = []
    depth = 0
    in_quote = False
    escape = False
    current = []
    for ch in body:
        if escape:
            current.append(ch)
            escape = False
            continue
        if ch == '\\':
            current.append(ch)
            escape = True
            continue
        if ch == '"':
            in_quote = not in_quote
            current.append(ch)
            continue
        if not in_quote:
            if ch == '(':
                if depth == 0:
                    current = ['(']
                else:
                    current.append(ch)
                depth += 1
                continue
            elif ch == ')':
                depth -= 1
                current.append(ch)
                if depth == 0:
                    tuples.append("".join(current))
                    current = []
                continue
            elif ch == ',' and depth == 0:
                # comma between tuples
                continue
        current.append(ch)
    return tuples


def sanitize_filename(name: str) -> str:
    """Create a safe filename from slug or title."""
    name = name.strip().lower()
    name = re.sub(r"[^a-z0-9_-]+", "-", name)
    name = re.sub(r"-+", "-", name).strip("-")
    return name or "untitled"


def html_to_markdown(html_content: str) -> str:
    """Convert WordPress HTML content to Markdown."""
    if not html_content or not html_content.strip():
        return ""
    # WordPress often stores encoded entities; decode first pass
    text = html.unescape(html_content)
    # Convert to markdown
    markdown = md(text, heading_style="ATX", strip=["script", "style"])
    # Clean up excessive blank lines
    markdown = re.sub(r"\n{3,}", "\n\n", markdown)
    return markdown.strip()


def main():
    OUTPUT_DIR.mkdir(exist_ok=True)

    pages = []
    homepage_id = None
    show_on_front = None

    with SQL_PATH.open("r", encoding="utf-8", errors="replace") as f:
        for line in f:
            line = line.strip()
            if not line:
                continue
            if line.startswith("INSERT INTO `wp_posts`"):
                for row in parse_values(line, "wp_posts"):
                    if row.get("post_type") == "page":
                        pages.append(row)
            elif line.startswith("INSERT INTO `wp_options`"):
                # options table columns: option_id, option_name, option_value, autoload
                # parse generically
                body = line[len("INSERT INTO `wp_options` VALUES"):].strip()
                if body.endswith(";"):
                    body = body[:-1]
                tuples = split_tuples(body)
                for tup in tuples:
                    tup = tup.strip()
                    if tup.startswith("(") and tup.endswith(")"):
                        tup = tup[1:-1]
                    reader = csv.reader(io.StringIO(tup), quotechar='"', escapechar='\\', doublequote=False, skipinitialspace=True)
                    try:
                        vals = next(reader)
                    except Exception:
                        continue
                    if len(vals) >= 3:
                        opt_name = unescape_mysql(vals[1]) if vals[1].startswith('"') else vals[1]
                        opt_value = unescape_mysql(vals[2]) if vals[2].startswith('"') else vals[2]
                        if opt_name == "show_on_front":
                            show_on_front = opt_value
                        elif opt_name == "page_on_front":
                            try:
                                homepage_id = int(opt_value.strip('"'))
                            except ValueError:
                                homepage_id = opt_value.strip('"')

    print(f"Found {len(pages)} page rows")
    print(f"show_on_front={show_on_front}, page_on_front={homepage_id}")

    # Filter published pages (and private if needed)
    published_pages = [p for p in pages if p.get("post_status") == "publish"]
    print(f"Published pages: {len(published_pages)}")

    # If no explicit homepage, try slug home/homepage, or first published page
    if homepage_id is None:
        for p in published_pages:
            slug = p.get("post_name", "").lower()
            if slug in ("home", "homepage"):
                homepage_id = p.get("ID")
                break

    slug_to_id = {p.get("post_name"): p.get("ID") for p in published_pages}

    written = 0
    for page in published_pages:
        pid = page.get("ID")
        slug = page.get("post_name", "").strip()
        title = page.get("post_title", "").strip()
        content = page.get("post_content", "")

        is_home = (str(pid) == str(homepage_id)) if homepage_id is not None else False
        if is_home:
            filename = "index.md"
        else:
            filename = f"{sanitize_filename(slug or title)}.md"

        markdown_content = html_to_markdown(content)
        if not markdown_content:
            print(f"Skipping empty page: {title} (ID {pid})")
            continue

        # Optionally include title as H1? User said "only content".
        # We'll include just the converted content.
        out_path = OUTPUT_DIR / filename
        # Avoid overwriting duplicate slugs
        counter = 1
        original_out_path = out_path
        while out_path.exists():
            stem = original_out_path.stem
            out_path = OUTPUT_DIR / f"{stem}-{counter}.md"
            counter += 1

        out_path.write_text(markdown_content, encoding="utf-8")
        print(f"Wrote {out_path} ({title or slug})")
        written += 1

    print(f"Done. Wrote {written} markdown files to {OUTPUT_DIR}")


if __name__ == "__main__":
    main()
