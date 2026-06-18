# VitaCore Clinical Brand System

## 1. Executive brand summary

VitaCore Clinical is a bright, modern specialty-healthcare system built around three promises: expert care, understandable decisions, and visible outcomes. Its visual character is premium but not luxurious, advanced but not futuristic, and reassuring without becoming soft or childish.

The supplied reference earns trust through clinical white space, authoritative blue, outcome-oriented green, confident headlines, credentialed people, real-world facilities, explicit metrics, and repeated access to appointment actions. This system retains those principles while establishing an original brand.

### Brand personality

- **Primary traits:** precise, reassuring, advanced, transparent, human.
- **Emotional tone:** calm confidence rather than urgency or drama.
- **Sophistication:** high; details feel engineered, but interfaces stay simple.
- **Energy:** medium. CTAs and accent objects are active; reading surfaces remain quiet.
- **Audience perception:** credible specialists with modern infrastructure and patient-friendly communication.

### Visual psychology

- Cobalt blue signals competence, institutional authority, and decisive action.
- Surgical green signals health, progress, and safe completion.
- Bright white reduces perceived complexity and supports hygiene associations.
- Rounded geometry reduces intimidation around technical medical content.
- Human portraits create empathy; visible credentials convert that empathy into trust.
- Metrics reduce uncertainty when they are specific, sourced, and dated.
- Repeated primary actions shorten the path from confidence to appointment.

### Design language

- Open 12-column layouts with generous vertical breathing room.
- One dominant message per viewport or section.
- Dark ink headlines with selective blue/green emphasis.
- Soft atmospheric circles, dotted fields, and line paths used only as background depth.
- Cards are functional grouping devices, not decoration.
- Strong left-to-right reading flow on desktop; strict single-column priority on mobile.
- Visual density target: 3/10. Information-rich areas are separated by open space.

## 2. Color system

Full values are in `tokens.json` and `tokens.css`.

### Roles

- **Primary/cobalt:** appointments, active navigation, focused controls, authoritative numbers.
- **Secondary/green:** successful outcomes, care benefits, confirmation, health-oriented icons.
- **Accent/cyan:** charts, minor data accents, and illustration highlights only.
- **Neutral ink:** all primary reading and clinical detail.
- **Pale blue:** low-emphasis surfaces and atmospheric decoration.

### Usage rules

- Primary CTA: blue 600; hover blue 700; active blue 800.
- Secondary CTA: green 600 only when the action meaning is care, recovery, or finding help.
- Links: blue 600 with an underline on hover; never rely on color alone in body copy.
- Cards: white on white/blue-50 canvas with gray-blue borders.
- Inputs: white fill, neutral border, blue focus ring; state colors accompany text/icons.
- Badges: tinted background with dark foreground. Avoid saturated badge fills.
- Alerts: 50-level background plus 500-level leading border and 700-level text.
- Decorative gradients: pale tints only; never place body text over a saturated gradient.
- Blue and green must not compete at equal intensity in the same control group.

## 3. Typography

### Font pairing

- **Display/UI:** Manrope. Premium alternative: Neue Montreal or Söhne.
- **Body:** Inter. Premium alternative: Graphik or Suisse Int’l.
- **Monospace:** IBM Plex Mono.

Manrope’s broad, geometric forms create confident headlines. Inter handles dense medical and form content with high legibility.

### Scale

Exact desktop and mobile values are in `tokens.json`. Display and heading text uses `clamp()` in CSS to transition fluidly.

### Rules

- Display and H1 use 700–800 weight; headings use 700–800; body uses 400–500.
- Avoid body copy below 16px. Captions may be 12px only for nonessential metadata.
- Headline tracking ranges from −4.5% to −1%; body tracking stays neutral.
- Hero headlines: 1–3 lines and ideally 8–12 words.
- Paragraph measure: 45–70 characters; default maximum 65ch.
- Body line height: 1.55–1.65. Heading line height: 1.02–1.30.
- Use sentence case. Reserve uppercase for short eyebrows under 24 characters.
- Never use color emphasis on more than one phrase per heading.

## 4. Spacing

The base unit is 4px with an 8px product rhythm.

| Token | Value | Use |
|---|---:|---|
| 0.5 | 2px | optical corrections |
| 1 | 4px | icon/text micro-gap |
| 2 | 8px | tightly related content |
| 3 | 12px | compact control gap |
| 4 | 16px | default content gap |
| 6 | 24px | card padding on small screens |
| 8 | 32px | card padding / subsection gap |
| 10 | 40px | component group separation |
| 12 | 48px | major internal section gap |
| 16 | 64px | compact section padding |
| 20 | 80px | standard section padding |
| 24 | 96px | large section padding |
| 30 | 120px | desktop editorial separation |
| 40 | 160px | rare campaign-scale pause |

Do not use arbitrary values unless an optical adjustment cannot be represented by a token.

## 5. Radius

- XS 4px: tiny tags and color chips.
- SM 8px: compact controls.
- MD 12px: buttons and inputs.
- LG 16px: standard cards.
- XL 24px: feature media and grouped forms.
- 2XL 32px: campaign panels and hero media.
- Round 999px: avatars, icon circles, and status badges.

Keep a maximum of three radius sizes visible in one section.

## 6. Shadow and elevation

- XS: hairline lift for swatches and static tiles.
- SM: standard cards and sticky navigation.
- MD: menus, popovers, and selected cards.
- LG: interactive feature cards and modals.
- XL: rare hero media or command surfaces.

Shadows use blue-black rather than neutral black. Borders remain visible because elevation cannot be the only boundary cue.

## 7. Layout and responsiveness

### Breakpoints

- Mobile: 0–767px.
- Tablet: 768–1023px.
- Laptop: 1024–1279px.
- Desktop: 1280–1535px.
- Ultra-wide: 1536px and above.

### Desktop

- Standard container: 1200px.
- Wide media container: 1440px.
- 12 columns, 24px gutters, 32px outer margins minimum.
- Text blocks generally span 5–7 columns.
- Section padding: 96–128px.

### Tablet

- 8 columns, 20px gutters, 24px margins.
- Split layouts become 4/4 or stack when either side would fall below 320px.
- Section padding: 72–96px.

### Mobile

- 4 columns, 16px gutters and margins.
- All primary reading follows one column.
- Section padding: 64–80px.
- Cards may scroll horizontally only for optional peer content; core content must stack.
- Full-width primary CTAs are preferred in appointment flows.

### Responsive behavior

- Preserve content priority, not desktop composition.
- Place the trust cue before the form on mobile.
- Hide decorative objects that create horizontal overflow.
- Crop people at mid-torso or wider; do not crop faces at viewport edges.
- Keep primary CTAs visible without requiring precision tapping.

## 8. Component library

### Buttons

- Primary: blue fill, white text, one per decision region.
- Secondary: green fill only for care-related actions.
- Outline: alternate or exploratory actions.
- Ghost: low-priority toolbar actions.
- Text: inline progression.
- Heights: 40px small, 48px default, 56px large.
- Minimum horizontal padding: 16/20/24px.
- State changes combine color, position, and focus ring; never color alone.

### Inputs

- 48px minimum height; 56px for high-conversion forms.
- Labels remain visible above inputs; placeholders are examples, not labels.
- Help and error text sits directly below its field.
- Date pickers support keyboard entry and a native/accessible picker.
- Search uses a leading icon and explicit submit behavior when results are remote.

### Cards

- Standard: 24–32px padding, 16px radius.
- Feature: icon, 1-line title, 2–3 lines of copy, optional single link.
- Pricing: prominent price, plain-language inclusions, one CTA.
- Testimonial: quote first, source/role second, rating only when verifiable.
- Blog: fixed 16:10 media frame, category, title, date/read time.
- Avoid nested cards and equal-height forcing when content meaningfully differs.

### Navigation

- Desktop header height: 80px.
- Sticky state gains a translucent white fill, border, and small shadow.
- Current page is indicated by text/color plus `aria-current`.
- Mega menus group by patient intent, not internal organization.
- Mobile menu is a full-height sheet with 48px targets and a persistent appointment CTA.

### Section templates

- **Hero:** eyebrow, short headline, concise reassurance, primary + optional secondary CTA, one clinical visual.
- **Features:** 3–5 patient-centered capabilities; avoid icon-wall overload.
- **Benefits:** outcomes written as patient value, supported by proof.
- **Statistics:** 3–4 sourced metrics with date and scope.
- **Testimonials:** two or three readable stories; never autoplay.
- **Pricing:** only for services with honest, stable pricing; explain exclusions.
- **FAQ:** patient language, native disclosure behavior, emergency disclaimer where relevant.
- **CTA:** one decision, one reassurance, one primary action.
- **Footer:** contact, patient resources, services, legal, accessibility, emergency guidance.

## 9. Image system

### Photography

- Bright daylight or large soft-source lighting.
- Neutral-to-cool grade with natural skin tones.
- Moderate contrast and clean highlights; avoid sterile overexposure.
- Doctors photographed at eye level with open posture.
- Facilities use believable wide-angle perspective with corrected verticals.
- Patients appear active in decisions, not passive or distressed.
- Keep space around subjects for responsive text placement.

### Do

- Use real environments, credible equipment, and accurate protective clothing.
- Represent age, ability, skin tone, and family structures broadly.
- Show eye contact, active listening, and collaborative care.
- Use transparent cutouts only when edges, hair, and shadows are production quality.

### Don’t

- Use uncanny AI anatomy, fake instruments, visible patient data, or implausible procedures.
- Use cold cyan skin, extreme HDR, stock-photo laughter, or heroic low-angle doctors.
- Place decorative objects around faces.
- Use medical crosses or shields as a substitute for meaningful brand assets everywhere.

### Media frames

- Hero portrait: 4:5 or 1:1.
- Hospital/facility: 4:3 or 16:10.
- Blog: 16:10.
- Testimonial avatar: 1:1.
- Feature still: 3:2.

## 10. Illustration and icon system

- 24px base icon box, 1.75–2px rounded stroke.
- Round line caps and joins.
- Mostly outline; use one small solid accent for state or emphasis.
- Blue for action, green for care/outcomes, neutral for inactive.
- Illustrations use 2–4 colors, soft isometric or front-facing perspective, and restrained translucent depth.
- Avoid detailed anatomical illustration unless medically reviewed.

### Icon prompt template

> Minimal clinical UI icon of [subject], 24px grid, 1.8px rounded monoline stroke, cobalt blue with one surgical-green accent, no background, no text, optically balanced, SVG-ready, medically accurate.

### Illustration prompt template

> Premium healthcare editorial illustration of [scene], bright white and icy-blue environment, cobalt and surgical-green accents, rounded geometric forms, restrained translucent depth, calm clinical confidence, medically plausible details, generous negative space, no text, no logos.

## 11. Motion

- Hover: 160ms, standard easing; maximum 2–4px lift.
- Control state: 100–160ms.
- Accordion/menu: 240ms.
- Modal: 240ms enter, 160ms exit.
- Section reveal: 400–600ms with 16–24px travel maximum.
- Scroll effects are progressive enhancement; content is visible without JavaScript.
- Decorative orbits may drift 8–16px over 8–14 seconds.
- Never animate emergency instructions, validation errors, or essential clinical data.
- Honor `prefers-reduced-motion` by removing transforms and autoplay.

## 12. Accessibility

- Target WCAG 2.2 AA; AAA for long-form body text when practical.
- Normal text contrast: at least 4.5:1; large text: 3:1; controls/boundaries: 3:1.
- Minimum body size: 16px. Minimum target: 44×44px; preferred 48×48px.
- Visible keyboard focus on every interactive element.
- Logical headings, landmarks, labels, error summaries, and live-region feedback.
- No color-only meaning. Icons require text or accessible names.
- Forms preserve entered data after validation.
- Carousels provide pause, direct navigation, and non-swipe controls.
- Medical and emergency content uses plain language and is not hidden in accordions.

## 13. Frontend implementation

1. Import `tokens.css`, then `components.css`.
2. Consume semantic variables; raw palette variables are for token construction only.
3. Use native elements before custom ARIA widgets.
4. Keep DOM order aligned with mobile reading order.
5. Load hero media eagerly with explicit dimensions; lazy-load below-fold media.
6. Self-host fonts or use system fallbacks for regulated/privacy-sensitive properties.
7. Prefer SVG for icons and atmospheric patterns; AVIF/WebP for photography.
8. Restrict line length and reserve image aspect ratios to prevent layout shift.
9. Validate token changes through the specimen page and automated contrast checks.
10. Treat clinical claims, credentials, metrics, and testimonials as governed content with owners and review dates.

## 14. Brand consistency rules

- Every screen must make its primary patient action obvious.
- Cobalt owns action; green owns health and success.
- White space is structural and must not be filled with decorative UI.
- One dominant headline and one dominant visual per section.
- Use proof close to the claim it supports.
- Use precise language; avoid “world-class,” “revolutionary,” and unsupported superlatives.
- Do not imitate the supplied logo, exact hero arrangement, copy, or proprietary imagery.
- Clinical accuracy takes precedence over visual drama.
- Trust is built with clarity, sources, credentials, and transparent next steps.

## 15. Additional page-system decisions

The homepage, service-detail, and mobile references introduce page-specific density and responsive composition rules. These are defined in:

- `page-patterns.md` for homepage, inner-page, and mobile layouts.
- `image-strategy.md` for section-level image and background-image decisions.

The key rule is that responsive design is editorial reordering, not proportional shrinking. The homepage leads with trust and recognition; service-detail pages lead with relevance, evidence, and suitability.
