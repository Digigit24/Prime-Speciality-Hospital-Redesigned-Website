# Design-System Asset Library

## Backgrounds

Desktop and mobile backgrounds are separate art-directed compositions. Do not crop the desktop files to create mobile versions.

| Section | Desktop | Mobile portrait | Ratio |
|---|---|---|---|
| Patient journey | `backgrounds/desktop/patient-journey-bg.png` | `backgrounds/mobile/patient-journey-bg-vertical.png` | 16:9 / 9:16 |
| Testimonials | `backgrounds/desktop/testimonials-bg.png` | `backgrounds/mobile/testimonials-bg-vertical.png` | 16:9 / 9:16 |
| Appointment CTA | `backgrounds/desktop/appointment-cta-bg.png` | `backgrounds/mobile/appointment-cta-bg-vertical.png` | 16:9 / 9:16 |

### Patient journey

- Desktop path runs horizontally through four alternating milestones.
- Mobile path is vertical and leaves the right-center clear for text.
- Use behind journey/process content only.

### Testimonials

- The quietest background in the library.
- Designed to sit behind solid testimonial cards.
- Keep the image subtle; it should not compete with quoted content.

### Appointment CTA

- Desktop transitions from a light information area to a blue form area.
- Mobile transitions vertically from a light heading area to a blue form area.
- Always place form fields on an opaque white or solid controlled surface.

## Image-direction references

- `image-direction/homepage-hero-reference.png` — approved clinician-led homepage hero direction.
- `image-direction/atmospheric-section-background.png` — general low-density narrative background.

## Usage rules

- Use `cover` only when the intended quiet content zone remains preserved.
- Prefer `center`, `right center`, or documented focal-point positioning over arbitrary cropping.
- Do not apply these backgrounds to service grids, facility grids, comparison tables, FAQ, or long clinical text.
- Do not layer two generated backgrounds in one section.
- Add a white surface behind content if contrast becomes uncertain.
- Mobile assets are intended for tall sections and may extend beyond one viewport.
- Do not place essential text directly over saturated blue or green regions.
- Optimize final production delivery to AVIF/WebP while retaining these PNG masters.

