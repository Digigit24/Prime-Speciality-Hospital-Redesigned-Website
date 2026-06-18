# Website Image Strategy

This document defines where imagery adds trust or understanding, where a background image is appropriate, and where imagery should be avoided.

## 1. Image hierarchy

Use imagery in this order of importance:

1. Credible people
2. Real facilities
3. Clinically accurate treatment context
4. Patient experience
5. Abstract brand atmosphere
6. Decorative symbols

The site should not feel like an illustration library. Human and facility photography carry trust; abstract assets carry continuity.

## 2. Homepage image map

| Section | Image required? | Recommended image | Background image? |
|---|---|---|---|
| Header | No | Logo only | No |
| Hero | Yes, essential | Specialist portrait within a restrained translucent clinical environment | No separate background; hero art provides atmosphere |
| Expertise | No | Icon system only | No |
| Trust strip | No | Icons only | No |
| Why choose us | Yes | Real hospital exterior or entrance with people-scale context | Optional atmospheric edge treatment |
| Patient journey | No photography | Icons and a thin path | Yes, subtle atmospheric background allowed |
| Services | No photography | Icons | No |
| Facilities | Yes | Real operation theatre, ICU, diagnostic suite, recovery room | No |
| Patient stories | Optional | Authentic patient portraits only if consent and quality are strong | Yes, subtle atmospheric background allowed |
| Appointment | Optional | Small calm care-coordinator or abstract protective object | Soft tinted background allowed |
| Footer | No | Logo and social icons | No |

## 3. Stronger homepage hero direction

Approved visual reference:

![Homepage hero reference](assets/image-direction/homepage-hero-reference.png)

### Why this direction is stronger

- The clinician remains the unmistakable focal point.
- Copy space is intentionally protected.
- The face, hands, and clothing read clearly at both desktop and mobile crops.
- Three supporting symbols provide specialty context without turning the hero into a dashboard.
- The clinical ring creates a distinctive visual world while remaining lighter than the subject.

### Production requirements

- Replace generated identity with a real, consented clinician photograph whenever possible.
- Photograph at high resolution with extra space around shoulders and head.
- Capture a separate transparent cutout and environmental portrait.
- Retouch naturally; preserve skin texture.
- Produce desktop 16:10, tablet 4:5, and mobile 3:4 art-directed crops.
- Keep all symbols outside the face and credential-panel safe areas.
- Do not bake text, credentials, or ratings into the image.

## 4. Approved background direction

Approved visual reference:

![Atmospheric section background](assets/image-direction/atmospheric-section-background.png)

### Suitable sections

- Why choose us, when the facility image is independently framed
- Patient journey
- Patient stories
- Appointment CTA
- Service-detail final CTA

### Unsuitable sections

- Service grids
- Facility grids
- Forms
- Comparison tables
- FAQ
- Long clinical explanations
- Specialist credential panels

### Background usage rules

- Keep meaningful text over the white/quiet region.
- Place the strongest arc and green bloom away from primary copy.
- Use one atmospheric background across at most two adjacent sections.
- Maintain a solid or near-solid surface behind forms and long text.
- Background should never reduce text contrast below WCAG requirements.
- Mobile uses a dedicated crop, not a squeezed desktop asset.

## 5. Section-specific art direction

### Hospital/facility image

- Exterior: morning or soft afternoon daylight, corrected verticals, visible entrance.
- Interior: clean but active; show believable equipment and accessible circulation.
- Avoid empty architectural renders that feel unoccupied.
- Ratio: 4:3 primary, 1:1 mobile option.

### Facility cards

- Capture all spaces in the same lighting and color grade.
- Keep equipment within a consistent visual scale.
- Avoid ultra-wide distortion.
- Ratio: 4:3.

### Treatment/service hero

- Show specialist and relevant equipment in context.
- The procedure must remain non-graphic.
- Use a clinically reviewed anatomical illustration only when it improves comprehension.
- Ratio: 16:10 desktop, 4:5 mobile.

### Treatment explanation

- Prefer reviewed medical illustration over generative photoreal anatomy.
- Use a neutral background and one highlighted treatment area.
- Include no labels inside the raw image; labels belong in accessible page content.

### Specialist portrait

- Eye-level camera, natural expression, shoulders open.
- Navy clinical clothing against bright neutral space.
- Ratio: 1:1 and 4:5.
- Avoid folded arms for every clinician; vary poses across the site.

### Patient stories

- Use documentary-style environmental portraits.
- Avoid implying outcomes through exaggerated happiness.
- Ratio: 4:5 portrait or 1:1 avatar.
- Never use a generated face for a quote presented as a real testimonial.

### Appointment CTA

- Preferred: no photograph, using color and clear hierarchy.
- Alternative: small care coordinator portrait or abstract protective form.
- Avoid repeating the hero clinician.

## 6. Image quantity limits

- Homepage: 1 hero image, 1 hospital image, 4 facility images, and up to 3 testimonial portraits.
- Service detail: 1 service hero, 1 reviewed explanatory illustration, 1 specialist portrait, and up to 3 testimonial portraits.
- Do not add imagery merely to fill white space.
- Repeated atmospheric assets count as one visual motif and should be used sparingly.

## 7. Cropping and responsive safe zones

- Keep faces inside the center 60% of the source.
- Protect at least 25% negative space on the text side for desktop hero art.
- Do not place critical symbols in the outer 12% of the source.
- Mobile crops must keep the full head, hands when relevant, and one contextual symbol.
- Facility crops must preserve key equipment rather than empty walls.
- Every important image needs separate focal-point metadata or documented crop guidance.

## 8. Image production checklist

- Real or generated status is documented.
- Consent and usage rights are recorded.
- Clinical equipment and anatomy are reviewed.
- No patient data is visible.
- Alternative text intent is defined.
- Desktop, tablet, and mobile crops are approved.
- Compression does not damage skin or equipment detail.
- Image dimensions are large enough for high-density displays.
- Color grading matches the cobalt/green system.
- Background removal is clean at hair, hands, and instruments.
- No text is baked into photography.
- No image makes an unsupported outcome claim.

## 9. Background asset library

Production masters are organized in `assets/backgrounds/`:

- Patient journey: horizontal desktop path and native vertical mobile path.
- Testimonials: quiet desktop and vertical mobile atmospheric surfaces.
- Appointment CTA: desktop horizontal and mobile vertical light-to-blue transitions.

See `assets/README.md` for exact filenames and placement guidance.

### Mobile ratio rule

- Default mobile background ratio: 9:16.
- Use 4:5 only for shorter feature or CTA panels.
- Use 9:16 for narrative sections that may span approximately one to two mobile viewports.
- Never derive the mobile asset by center-cropping the 16:9 desktop background.
- Decorative density belongs at the top, bottom, or outer edge; the central reading path remains quiet.
