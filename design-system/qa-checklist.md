# Design QA Checklist

## Brand and hierarchy

- [ ] 1. The primary patient action is obvious within five seconds.
- [ ] 2. Each section has one dominant message.
- [ ] 3. Cobalt is the dominant action color.
- [ ] 4. Green is reserved for care, health, or success.
- [ ] 5. Decorative color does not compete with content.
- [ ] 6. Brand tone is precise, calm, and human.
- [ ] 7. Unsupported superlatives are absent.
- [ ] 8. Clinical claims have an owner and review date.
- [ ] 9. Credentials are accurate and current.
- [ ] 10. Statistics include scope, source, and date.
- [ ] 11. Testimonials have documented consent.
- [ ] 12. Emergency guidance is visible where relevant.
- [ ] 13. Trust proof appears near the claim it supports.
- [ ] 14. Patient language takes priority over internal terminology.
- [ ] 15. The experience does not imitate a competitor’s proprietary identity.

## Alignment and layout

- [ ] 16. Content aligns to the defined column grid.
- [ ] 17. Outer margins match breakpoint specifications.
- [ ] 18. Text blocks do not exceed seven desktop columns without reason.
- [ ] 19. Split layouts remain balanced at laptop widths.
- [ ] 20. Mobile DOM order matches reading priority.
- [ ] 21. No decorative element causes horizontal overflow.
- [ ] 22. Section transitions have intentional rhythm.
- [ ] 23. Major content does not sit inside nested cards.
- [ ] 24. Card groups align by baseline or top edge.
- [ ] 25. Media uses a documented aspect ratio.
- [ ] 26. Image focal points survive responsive crops.
- [ ] 27. Sticky elements do not cover page content.
- [ ] 28. Anchor links account for sticky header height.
- [ ] 29. Empty states preserve page structure.
- [ ] 30. Long localized content does not break the grid.

## Spacing

- [ ] 31. Spacing uses defined tokens.
- [ ] 32. Related items are closer than unrelated items.
- [ ] 33. Card padding is 24–32px.
- [ ] 34. Form field gaps are consistent.
- [ ] 35. Label-to-control spacing is 8px.
- [ ] 36. Help text sits directly below its control.
- [ ] 37. Section padding is consistent by breakpoint.
- [ ] 38. Heading-to-body spacing follows the scale.
- [ ] 39. CTA groups have adequate separation from copy.
- [ ] 40. Optical corrections are no larger than 4px.
- [ ] 41. Touch targets do not overlap.
- [ ] 42. Dense data areas have surrounding breathing room.
- [ ] 43. Mobile cards do not touch viewport edges.
- [ ] 44. Modal content has safe-area padding.
- [ ] 45. Footer groups remain distinguishable when stacked.

## Typography

- [ ] 46. Display type uses Manrope or the approved alternative.
- [ ] 47. Body type uses Inter or the approved alternative.
- [ ] 48. Body text is at least 16px.
- [ ] 49. Hero headlines stay within three lines.
- [ ] 50. Paragraph measure is 45–70 characters.
- [ ] 51. Body line height is at least 1.5.
- [ ] 52. Heading levels follow semantic order.
- [ ] 53. Heading visual size matches semantic importance.
- [ ] 54. Uppercase is limited to short eyebrows.
- [ ] 55. No paragraph is set in all caps.
- [ ] 56. Heading tracking is not applied to body text.
- [ ] 57. Link styling is recognizable without hover.
- [ ] 58. Numerals are legible in metrics and dates.
- [ ] 59. Truncation never hides critical clinical content.
- [ ] 60. Text remains readable at 200% zoom.

## Color and elevation

- [ ] 61. Normal text meets 4.5:1 contrast.
- [ ] 62. Large text meets 3:1 contrast.
- [ ] 63. Control boundaries meet 3:1 contrast.
- [ ] 64. Focus indicators meet 3:1 adjacent contrast.
- [ ] 65. Status is not communicated by color alone.
- [ ] 66. Decorative gradients do not impair reading.
- [ ] 67. Shadows use approved elevation tokens.
- [ ] 68. Borders remain visible on raised white surfaces.
- [ ] 69. Blue and green do not compete in one action group.
- [ ] 70. Disabled controls remain identifiable.
- [ ] 71. Dark text is used on pale status fills.
- [ ] 72. Error red is not used for decoration.
- [ ] 73. Pure black is avoided for large text fields.
- [ ] 74. High-contrast mode preserves boundaries.
- [ ] 75. Print styles remain legible without backgrounds.

## Components and forms

- [ ] 76. Each decision region has only one primary button.
- [ ] 77. Button labels describe the result of the action.
- [ ] 78. Buttons are at least 44px high.
- [ ] 79. Icon-only buttons have accessible names.
- [ ] 80. Destructive actions require clear confirmation.
- [ ] 81. Inputs retain visible labels.
- [ ] 82. Placeholder text is not the only instruction.
- [ ] 83. Required fields are announced programmatically.
- [ ] 84. Validation identifies the field and remedy.
- [ ] 85. Invalid submissions preserve entered values.
- [ ] 86. Error summaries link to invalid fields.
- [ ] 87. Date input accepts keyboard entry.
- [ ] 88. Phone input allows international formats.
- [ ] 89. Autocomplete attributes are correctly assigned.
- [ ] 90. Form submission has loading and success states.
- [ ] 91. Repeated submission is safely prevented.
- [ ] 92. Cards do not contain multiple competing actions.
- [ ] 93. Accordions use native buttons and state attributes.
- [ ] 94. Menus close with Escape and restore focus.
- [ ] 95. Modals trap focus and return it on close.

## Responsive behavior

- [ ] 96. Core flows work at 320px width.
- [ ] 97. Layout works at 768px, 1024px, 1280px, and 1536px.
- [ ] 98. Navigation converts cleanly to a mobile menu.
- [ ] 99. Primary CTAs remain easy to reach on mobile.
- [ ] 100. Tables provide an accessible small-screen pattern.
- [ ] 101. Charts expose equivalent text or tabular data.
- [ ] 102. Carousels do not require swipe.
- [ ] 103. Portrait and landscape device rotations work.
- [ ] 104. Content is not clipped by browser text enlargement.
- [ ] 105. Safe areas are respected on notched devices.

## Accessibility and interaction

- [ ] 106. All functions are keyboard operable.
- [ ] 107. Focus order follows visual and reading order.
- [ ] 108. Focus is always visible.
- [ ] 109. Landmarks and page title are present.
- [ ] 110. Images have useful alt text or empty alt attributes.
- [ ] 111. Live updates use appropriate live regions.
- [ ] 112. Reduced-motion preferences are honored.
- [ ] 113. Autoplay media is absent or pausable.
- [ ] 114. Time limits can be extended.
- [ ] 115. Language attributes are correct.

## Performance and implementation

- [ ] 116. Hero media has explicit dimensions and appropriate priority.
- [ ] 117. Below-fold images are lazy-loaded.
- [ ] 118. SVG icons are optimized and do not contain hidden metadata.
- [ ] 119. Font loading avoids invisible text.
- [ ] 120. The page passes automated and manual accessibility review before release.

## Page-pattern review

- [ ] Homepage imagery prioritizes clinician, facility, and patient trust in that order.
- [ ] The homepage hero has one dominant clinician and no more than three supporting symbols.
- [ ] Mobile content is intentionally reordered rather than uniformly scaled down.
- [ ] Two-column mobile cards remain at least 148px wide.
- [ ] The service page separates symptoms, suitability, and diagnosis.
- [ ] Treatment comparisons use neutral, reviewed language.
- [ ] Outcome statistics include source, cohort, and review date.
- [ ] Medical illustrations have been clinically reviewed.
- [ ] Background imagery appears only behind low-density narrative content.
- [ ] Forms, tables, FAQ, and long clinical copy use quiet solid surfaces.
- [ ] Mobile hero crops preserve the face, hands, and credential safe zone.
- [ ] Patient-story photography is real, consented, and not represented by generated identities.
