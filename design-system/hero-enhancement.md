# Homepage Hero Enhancement

This is a focused visual upgrade. It does not change the page structure, copy hierarchy, doctor crop, navigation, or section order.

## Approved composition

1. Keep the doctor photograph inside the existing clean circular crop.
2. Place the circular crop inside an asymmetric biomorphic aura.
3. Use two incomplete orbital lines and no more than three accent nodes.
4. Keep one credential card anchored near the lower-left edge of the portrait.
5. Keep review proof outside the artwork, below the CTA group.
6. Remove competing shield, heartbeat, instrument, and treatment cards from the immediate face area.

## Assets

- Desktop raster backdrop: `assets/hero/desktop/hero-blob-aura-bg.png`
- Mobile portrait backdrop: `assets/hero/mobile/hero-blob-aura-bg-vertical.png`
- Scalable blob frame: `assets/hero/svg/hero-blob-frame.svg`
- Scalable geometric overlay: `assets/hero/svg/hero-geometric-overlay.svg`
- Reusable doctor composite: `assets/hero/svg/hero-doctor-composite.svg`
- Existing portrait source: `assets/drpankajbhalerao.jpeg`

The raster backdrop is the preferred high-fidelity direction. The SVG version is the flexible implementation alternative when stronger responsive control or animation is required.

## Layer order

1. Near-white hero background.
2. Geometric overlay at 25–45% opacity.
3. Blob aura background or SVG frame.
4. Circular doctor crop.
5. One credential panel.
6. Up to two small specialty markers outside the face safe zone.

## Desktop proportions

- Visual region: 48–54% of hero width.
- Doctor crop: 58–66% of visual region.
- Blob aura: 112–126% of doctor crop.
- Outer artwork may bleed 4–8% beyond the right container edge.
- Keep the visual center slightly above the text block’s vertical center.

## Mobile proportions

- Use the native 9:16 background; do not crop the desktop asset.
- Copy occupies the upper 40–44%.
- Artwork occupies the lower 56–60%.
- Doctor crop: approximately 68–76% of viewport width.
- Credential panel anchors below the face and may overlap the portrait edge.
- Keep at least 24px between the CTA group and artwork.

## Component polish

### Primary button

- Strong cobalt fill with subtle blue shadow.
- Use a compact arrow or calendar icon.
- Avoid oversized glow.

### Secondary button

- White surface, blue-gray border, and blue icon.
- Match primary button height.

### Credential card

- White, 16px radius, subtle border, medium elevation.
- Show name, specialty, and one verification indicator.
- Do not include a signature graphic, multiple badges, or dense qualification copy.

### Trust proof

- Show 3–4 real patient avatars maximum.
- One strong count, one rating row, one short review-count label.
- Keep it visually separate from the doctor artwork.

### Service cards below hero

- Reduce card shadow and strengthen icon contrast.
- Use alternating blue/green icon treatments without alternating entire card colors.
- Limit descriptions to two lines.
- Use one consistent arrow affordance.
- Apply `assets/graphics/service-card-corner.svg` only to one featured or hovered card, not every card.

### Trust strip

- Use a flatter white surface with subtle separators.
- Allow `assets/graphics/trust-strip-route.svg` to sit behind icons at low opacity.
- Keep labels short and align icon, title, and description consistently.

### Section transitions

- Use `assets/graphics/section-transition-wave.svg` between only one or two major homepage sections.
- On mobile use `assets/graphics/mobile-edge-pattern.svg` near an outer edge, never behind body text.

## Graphic restraint

- One dominant aura.
- Two orbital paths.
- Three nodes maximum.
- Two floating specialty markers maximum.
- One credential panel.

More elements will make the hero feel like a dashboard rather than a premium healthcare campaign.

## Motion direction

- Aura drift: 10–14 seconds, 6–10px movement.
- Orbit nodes: slow path movement, 14–20 seconds.
- Doctor remains stationary.
- Credential card may enter once with a restrained 16px lift.
- Disable drift and path motion for reduced-motion users.
