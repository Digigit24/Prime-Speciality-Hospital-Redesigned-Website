# Page and Responsive Patterns

This guide extends the core system using the homepage, service-detail page, and mobile layout references. It documents design decisions only; it is not an implementation specification.

## 1. What the additional references change

The homepage establishes the emotional and brand layer. The service-detail page establishes the evidence and decision layer. The mobile reference proves that responsive behavior must be editorially recomposed rather than mechanically reduced.

The system therefore supports three density modes:

| Mode | Purpose | Density | Typical content |
|---|---|---:|---|
| Brand | Create trust and recognition | 3/10 | Hero, about, facility, testimonial |
| Evidence | Explain a treatment or service | 6/10 | Outcomes, indications, process, comparison |
| Action | Convert a confident visitor | 4/10 | Appointment, contact, FAQ, next step |

Do not use evidence-page density throughout the homepage. Do not make service-detail pages as sparse as a campaign hero.

## 2. Homepage composition

### Recommended order

1. Header
2. Hero with clinician-led image
3. Core expertise
4. Trust/value strip
5. Why choose the hospital
6. Patient journey
7. Services and facilities
8. Patient stories
9. Appointment conversion block
10. Footer

### Hero

- Use one clinician as the main human focal point.
- Keep the text side visually quiet and the image side expressive.
- Allow a maximum of three small clinical symbols around the subject.
- Put credentials in one compact profile panel, not multiple floating cards.
- Keep review proof below the CTA rather than inside the image.
- The image must retain a clean crop at 16:10 desktop, 4:5 tablet, and 3:4 mobile.
- On mobile, the clinician follows the headline, CTA, and compact trust proof.

Approved direction: `assets/image-direction/homepage-hero-reference.png`.

### Expertise

- Desktop: 4–6 cards in one row or controlled grid.
- Mobile: two-column grid; cards contain icon, title, and one short supporting line.
- Do not use photography as card backgrounds.
- The final tile may carry a meaningful metric, but should not imitate a service card.

### Why choose us

- Use a real hospital/facility photograph as the visual anchor.
- Pair the photograph with four evidence metrics.
- Mobile order: heading → summary → facility image → 2×2 metric grid.
- Avoid putting long benefit lists beside the metric grid on small screens.

### Patient journey

- Desktop: horizontal four-step path.
- Mobile: vertical timeline with alternating blue and green milestones.
- Each step contains a number, short title, and one concise explanatory sentence.
- The path is a functional sequencing device, not a decorative illustration.

### Services and facilities

- Services use icon-led cards.
- Facilities use real photography because environment and equipment are the proof.
- Mobile uses a two-column grid for both.
- Keep “View all” as a separate full-width action after each grid.

### Patient stories

- Desktop may show three cards.
- Mobile shows one complete story at a time with pagination.
- Do not show clipped partial cards.
- Use the atmospheric background only at very low opacity and with a solid card behind text.

### Appointment block

- Desktop: reassurance/contact at left, form at right.
- Mobile: form first when the user enters through a high-intent route; reassurance first on the general homepage.
- Use a saturated blue panel only for the form/action region.
- Green may be used for the final submit action to communicate completion, provided the page still has a clear blue primary hierarchy.

## 3. Service-detail page composition

### Recommended order

1. Breadcrumbs
2. Service hero
3. Definition and key facts
4. Suitable-patient criteria
5. How the treatment works
6. Benefits and comparison
7. Specialist profile
8. Relevant patient stories
9. FAQ
10. Final CTA
11. Footer

### Service hero

- Show the actual treatment context, specialist, or equipment—not a generic doctor portrait.
- Keep the procedure image clinically plausible and non-graphic.
- Display 3–4 benefits below the summary using small icon-led facts.
- Use one primary appointment action and one expert-contact secondary action.
- Breadcrumbs remain visually quiet.

### Key facts

Use four compact evidence cards:

- Procedure duration
- Hospital stay
- Return to work
- Success/outcome metric

Every outcome metric requires a source, cohort, and review date in production. Do not imply universal results.

### Suitable-patient criteria

- Present criteria as a calm checklist.
- Separate symptoms from diagnosis and eligibility.
- Include a statement that only a qualified clinician can determine suitability.
- Avoid making the list look like a self-diagnosis tool.

### Treatment process

- Desktop: horizontal four-step sequence.
- Mobile: vertical numbered sequence.
- Pair each step with a clinically reviewed icon.
- Avoid graphic procedural photography in this section.

### Comparison table

- Compare concrete attributes: pain management, bleeding, hospital stay, recovery, return to work, and known risks.
- Use neutral language for alternatives.
- Do not use green to make every value in the promoted treatment look superior.
- Include a medical-review date and a note that outcomes vary.
- On mobile, use stacked comparison rows rather than horizontal scrolling when possible.

### Specialist profile

- Include current portrait, verified qualification, specialty, and registration/credential details where appropriate.
- Keep metrics secondary to the clinician’s expertise statement.
- Provide appointment and contact actions without duplicating the entire page hero.

### FAQ and final CTA

- FAQ answers must be medically reviewed and written in patient language.
- Keep the final CTA visually separated from FAQ.
- A treatment-specific illustration may support the CTA; it must not repeat the hero image.

## 4. Mobile editorial model

The supplied mobile reference is a three-column presentation of three separate viewport sequences, not a literal three-column mobile interface.

### Mobile principle

Mobile is a reordered narrative:

1. Orient the patient.
2. Establish trust.
3. Explain the relevant choice.
4. Present evidence.
5. Offer the next action.

### Grid rules

- Screen grid: four columns.
- Content cards: two columns when each card remains at least 148px wide.
- Switch to one column below the usable width threshold.
- Metric grids: 2×2.
- Facility cards: 2×2 with 4:3 images.
- Contact actions: one per row.
- Forms: one column; paired name/phone fields become separate rows.

### Mobile card rules

- Card padding: 16–20px.
- Gap: 12–16px.
- Radius: 14–18px.
- Title: maximum three lines.
- Supporting text: maximum four lines in grids.
- No hover-dependent information.
- Card actions must have a visible text label or a clear full-width row action.

### Mobile header

- Logo at left.
- Compact appointment action and menu at right only when both fit without truncation.
- Below 360px, prioritize the menu and move appointment access into the open menu or a persistent bottom action.
- Header must not cause horizontal scrolling.

### Mobile hero

- Headline first.
- Supporting copy second.
- Primary and secondary actions stack.
- Trust proof follows actions.
- Hero image follows trust proof and may overlap a soft atmospheric field.
- Profile/credential panel anchors to the bottom of the image rather than floating over the face.

### Mobile footer

- A compact blue brand/contact block is acceptable.
- Legal and emergency information must remain readable.
- Do not collapse essential contact information behind accordions.

## 5. Cross-page consistency

- Homepage and service pages share typography, controls, icons, radius, and atmospheric motifs.
- Homepage imagery emphasizes people and place.
- Service-page imagery emphasizes procedure context, evidence, and specialist authority.
- Mobile preserves the same brand but increases content separation and removes nonessential decorative layers.
- All clinical content requires review independently of visual QA.

