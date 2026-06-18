# VitaCore Clinical Design System

An original healthcare design system reverse-engineered from the visual principles of the supplied reference. It preserves the reference’s level of clarity, trust, softness, and conversion focus without copying its brand, layout, or assets.

## Contents

- `index.html` — interactive visual specimen and component library
- `tokens.css` — production CSS custom properties
- `tokens.json` — platform-neutral design tokens
- `components.css` — reusable component and layout primitives
- `brand-system.md` — brand DNA, responsive rules, imagery, motion, accessibility, and implementation guidance
- `page-patterns.md` — homepage, service-detail, and mobile composition rules
- `image-strategy.md` — section-by-section image decisions and art direction
- `prompt-library.md` — 70 consistent image-generation prompts
- `qa-checklist.md` — 120-point design and implementation checklist
- `assets/image-direction/` — approved visual references for the homepage hero and atmospheric backgrounds
- `assets/backgrounds/desktop/` — landscape section backgrounds
- `assets/backgrounds/mobile/` — native vertical mobile backgrounds
- `assets/README.md` — asset selection and usage guide

## Preview

Open `index.html` directly, or serve this directory:

```powershell
python -m http.server 4173 --directory design-system
```

Then visit `http://localhost:4173`.

## Font strategy

The system uses `Manrope` for display/UI and `Inter` for body copy, with robust system fallbacks. For privacy-sensitive or offline deployments, self-host the font files and remove the Google Fonts import.

## Usage

```html
<link rel="stylesheet" href="/design-system/tokens.css">
<link rel="stylesheet" href="/design-system/components.css">
```

Use semantic tokens such as `--color-action`, `--color-text`, and `--space-section`; avoid hard-coded raw palette values in product code.
