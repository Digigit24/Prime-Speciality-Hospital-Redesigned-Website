# Final Polishing Prompt — Prime Speciality Hospital Frontend

> Paste everything below the line into your coding agent (Claude Code / Codex / Cursor) **from the repo root**, with the `impeccable` skill available in `aiskills/impeccable`. It drives a complete, identity-preserving polish pass over the Laravel/Blade frontend: UI, spacing, responsiveness, interactivity, and smooth motion. The audit backlog is pre-filled so the agent starts with concrete work, not discovery.

---

## ROLE & OBJECTIVE

You are a senior product designer-engineer. Do a **final polishing pass** on the existing frontend of the Prime Speciality Hospital website (Laravel 12 + Blade + Tailwind v4 + a custom `vc-` design system). The site already works and already has a real token system — **do not redesign it and do not break it.** Your job is craft: spacing rhythm, visual hierarchy, typography, color/contrast, responsive behaviour across every breakpoint, refined interactions, and smooth, intentional motion. Ship production-grade Blade/CSS, not prototypes.

**Use the `impeccable` skill** (`aiskills/impeccable/SKILL.md`). Run it in this order, scoping each to real files:

1. `$impeccable audit resources/views resources/css` — technical pass (a11y, perf, responsive). Read `reference/audit.md` first.
2. `$impeccable polish resources/views resources/css` — final quality pass. Read `reference/polish.md` first.
3. Then targeted commands where the backlog calls for them: `layout`, `typeset`, `animate`, `adapt`, `harden`, `quieter`.

Follow the skill's setup steps, its General Rules, and especially its **Absolute Bans** and **Codex-specific defects** — several currently appear in this codebase (listed below). This project's register is **brand** (a marketing/clinical site where design *is* the product), so read `reference/brand.md`.

## NON-NEGOTIABLE GUARDRAILS

- **Preserve identity.** Keep the existing brand colors, fonts (Manrope display / Inter body), and the `vc-` token system in `resources/css/tokens.css`. Committed brand colors win — do not invent a new palette.
- **Do not break Laravel.** Leave all Blade directives, `@vite`, `@csrf`, `route()`/`url()` helpers, form `name=` attributes, `action=` targets, and the controllers/routes untouched in behaviour. This is presentation-only.
- **No new heavy dependencies.** Stay on Tailwind v4 + the `vc-` CSS. Motion should be CSS-first; only add a tiny JS helper (e.g. an IntersectionObserver) if a reveal genuinely needs it.
- **Accessibility is part of "done."** Keyboard, focus-visible, contrast, reduced-motion, and semantic markup must all improve, never regress. The footer literally claims "WCAG 2.2 AA compliant" — make that true.
- **Every change verified in a browser at 360 / 768 / 1024 / 1440 px** before you call it done.

---

## AUDIT BACKLOG (pre-found — fix these, then sweep for more)

### P0 — Impeccable absolute-ban violations (must rewrite)

1. **Eyebrow on every section.** The small uppercase tracked kicker (`.vc-eyebrow` — "CLINICAL EXPERTISE", "HOW IT WORKS", "MEDICAL FAQ", "BOOKING DESK", "MEDICAL CENTRE MOSHI") sits above nearly every section. That repetition is an AI tell. Keep it on **at most one** section as deliberate voice; remove the rest and let the headings carry their own hierarchy.
2. **Ghost-card pattern.** Cards/buttons pair `border: 1px solid` with a wide soft shadow (`--shadow-md: 0 10px 28px`, `--shadow-lg: 0 20px 50px`). Pick **one** per element — either a defined border *or* a contained shadow (≤ ~8–12px blur), not both as decoration. Re-tune the shadow tokens accordingly.
3. **Emoji as iconography → generate a custom branded icon set.** Treatment cards, hero floating badges, journey steps and contact rows use emoji (🔬 🛡️ ⚡ 💎 💥 👁️ 🎀 🦋 🌀 📞 💬). For a surgical hospital this reads cheap and renders inconsistently across OSes. Do **not** just swap in a generic open-source icon font — **generate custom, on-brand assets**. Use your multimodal/image-generation capability to produce a cohesive icon family (one per procedure + the supporting UI icons), in the brand's blue/green palette and a single consistent line/fill style that matches `.vc-icon svg`. Deliver them as clean **SVG/vector where possible, PNG fallback otherwise**, saved to a new **`public/assets/icons/`** folder with descriptive filenames (e.g. `icon-laparoscopy.svg`, `icon-hernia.svg`), and wire each into the relevant card/badge/step. Keep them crisp at small sizes, accessible (`aria-hidden` on decorative ones, real labels where they convey meaning), and lazy-load where below the fold.
   - **Bonus:** consider a few subtle **custom "floating" brand icons/motifs** placed tastefully *between sections* (e.g. a faint procedure glyph or the `+` medical mark drifting in negative space) to add personality and rhythm — keep them low-opacity, decorative, `aria-hidden`, and respectful of `prefers-reduced-motion`.

### P1 — Interaction, responsiveness & a11y

5. **Mega-menu is hover-only and keyboard-inaccessible.** `.vc-dropdown:hover` reveals a `position: absolute` panel inside a sticky, backdrop-blurred header — it can clip and is unreachable by keyboard/touch. Rebuild with the popover API or `position: fixed`/portal, add focus management, `aria-expanded`, Escape-to-close, and a fixed width that adapts below ~1100px (currently a hard `52rem`).
6. **Mega-menu uses external Unsplash stock images.** Generic, off-brand, and a third-party performance/privacy dependency. Replace with real procedure assets from `public/assets` (or remove thumbnails for a clean text+icon menu).
7. **Inline styles everywhere.** `home.blade.php`, `header`, `footer`, and `layouts/app.blade.php` are saturated with inline `style="..."`. Migrate repeated patterns into `vc-` component classes / utility classes so spacing and color stay token-driven and consistent. This is the single biggest source of drift.
8. **Arbitrary z-index.** Values like `z-index: 999`, `100`, `15`, `10` are sprinkled inline. Define a semantic scale token set (dropdown → sticky-header → mega-menu → mobile-bar → toast) and use it everywhere.
9. **Responsive logic via attribute-selector overrides.** `home.blade.php` reaches into markup with `div[style*="grid-template-columns: repeat(3"]` media queries. Brittle. Replace with real responsive grid classes (`repeat(auto-fit, minmax(280px,1fr))` where appropriate) and named breakpoints.
10. **Inconsistent contact details.** Phone shows as `tel:07447441426`, `+91 7447441426`, and `074474 41426`; WhatsApp is `wa.me/919422668921`. Normalise to one canonical, correctly-formatted number set across header, hero, booking section, footer, and mobile bar.
11. **Contrast check.** Verify `--color-text-subtle: #7a889e` and `--color-text-muted: #53627a` hit ≥4.5:1 on every surface they sit on (white, `--color-surface #f8fbff`, the blue/green tinted booking gradient, the dark `#0b1736` strip). Bump toward the ink end wherever it's close. Placeholders too.

### P2 — Motion, rhythm & polish

12. **Scroll reveals can ship content blank.** The `@supports (animation-timeline: view())` blocks start elements at `opacity: 0` / translated and rely on scroll-range to reveal. Anything already past the range on load — or rendered in a headless/social-preview context — can stay invisible. Guarantee a visible default and treat the reveal as enhancement (and confirm the `prefers-reduced-motion` path shows everything instantly).
13. **One uniform entrance reflex.** Reveal classes (`vc-reveal-left/right/up`, `fade-in-scale`) are applied fairly mechanically section-to-section. Make motion fit what it reveals: stagger card grids, draw the timeline line in sequence, let the hero settle differently from a stats strip. Keep durations in the existing token range and ease-out (no bounce/elastic).
14. **Spacing rhythm.** Vary section padding intentionally instead of repeating `--space-16/20`. Tighten the hero's floating-badge composition (the bottom doctor label currently overlaps at `bottom: -5%`), and audit gaps inside cards and the booking form for a consistent vertical rhythm.
15. **Display letter-spacing floor.** The hero title uses `-0.045em` (and tokens lean tight). Impeccable's floor is `-0.04em`; relax anything tighter so glyphs don't touch. Add `text-wrap: balance` to h1–h3 and `text-wrap: pretty` to long prose.
16. **Identical 9-card treatment grid.** Nine same-shape icon+title+text cards is a flagged pattern. Introduce hierarchy — feature the 2–3 primary procedures (larger tile / image), let the rest be a tighter secondary list — so the grid reads designed, not generated.
17. **Markdown literally rendered.** The about paragraph in `home.blade.php` contains `**Dr. Pankaj Bhalerao**` printed as raw asterisks (Blade doesn't parse Markdown). Replace with real `<strong>`.

### Sweep these surfaces (don't stop at the home page)
`resources/views/pages/`: `home`, `about`, `appointment`, `contact`, `doctor-profile`, `gallery`, `service-detail`, `show`, `thank-you`. Plus `components/header`, `components/footer`, `layouts/app`. Apply the same standards everywhere; the home page is the reference, not the whole job.

---

## POLISH DIRECTIVES BY AREA

- **Spacing & layout:** token-driven spacing only; consistent gutters and section rhythm; flex for 1D, grid for 2D; no nested cards; no brittle attribute-selector media queries.
- **Typography:** Manrope display / Inter body kept; enforce letter-spacing floor; `text-wrap: balance`/`pretty`; body line length ≤ 75ch; consistent heading scale via tokens.
- **Color & contrast:** keep brand blues/greens; every text/background pair ≥ AA; retune shadow tokens so cards don't read as ghost-cards; placeholders meet contrast.
- **Responsiveness:** verify hero, mega-menu, 9-card grid, 4-step journey, booking form (2-col → 1-col), footer (4 → 2 → 1), and the mobile bottom bar at 360/768/1024/1440. No horizontal scroll, no overflow of long headings.
- **Interactivity:** accessible mega-menu and mobile drawer (focus, `aria-*`, Escape); visible `:focus-visible` on every actionable; tasteful hover/active states already partly present — make them consistent and snappy.
- **Motion:** intentional, ease-out, token-timed; staggered where it's a list; guaranteed-visible defaults; full `prefers-reduced-motion` coverage.
- **Performance:** drop external Unsplash calls; lazy-load below-the-fold images; ensure fonts preconnect (already present) and no layout shift.

## ACCEPTANCE CRITERIA — the pass is done when:

- [ ] No per-section eyebrow stack, no ghost-card border+shadow combos, and no emoji icons remain — emoji replaced by a custom, on-brand generated icon set in `public/assets/icons/`.
- [ ] Mega-menu and mobile nav are fully keyboard- and touch-accessible (`aria-expanded`, focus trap/return, Escape).
- [ ] No external/stock images; all imagery served from `public/assets`.
- [ ] Inline styles substantially reduced; spacing/color/z-index come from tokens.
- [ ] Every text/background pair passes WCAG AA; reduced-motion shows all content instantly.
- [ ] No horizontal scroll or heading overflow at 360 / 768 / 1024 / 1440 px on every page.
- [ ] Contact numbers consistent everywhere; raw `**markdown**` gone.
- [ ] All routes, forms, and Blade logic behave exactly as before.

## VERIFICATION (required final step)

Run `npm run build` (Vite) to confirm assets compile. Then open each page and **screenshot at 360 / 768 / 1024 / 1440 px**, comparing against the baseline. Re-run `$impeccable audit` on the changed files and confirm zero P0/P1 findings remain. Report a short before/after summary of what changed per page and paste the final audit result.
