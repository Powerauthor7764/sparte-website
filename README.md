# Spartec — completed static website package

77 pages preserve the included service, quality, learning-centre, article and archive content, with four new division pages and two website notices. Open index.html or use the standalone offline HTML. The live Spartec website has not been changed.

## Source-site content audit
Audited 71 live HTML routes and expanded the package to 77 pages. Restored missing homepage sections, two archive pagination routes, the automotive tag archive, five legacy service routes and related-reading links. Full route comparison and scope are documented in CONTENT-AUDIT.md and CONTENT-AUDIT.json.

## This revision
- Defense-first four-image hero with automatic transitions, manual navigation, keyboard arrows, pause and reduced-motion support. The tank image has gentle camera-style motion; it is not driving footage.
- Dedicated Defense, Industrial, Automotive and Commercial pages; navigation and enquiry division selection.
- Homepage credentials supplied by James: CMMC Level 2 / C3PAO compliant, ITAR regulations compliant and Controlled Goods Program registered. The supplied artwork and wording are reproduced; certificate authenticity, scope and expiry were not independently verified.
- Removed the old circular market clip-art across included pages. Clean typography, photographic division cards, sticky navigation, native smooth scrolling, subtle section reveals, scroll progress and back-to-top.
- Search index, FAQs, partner controls, sitemap and footer notice links.

## Image and footer repair
Restored 45 original partner logos after the broad market-icon cleanup had also removed partner marks. The icon rule now names only the eight old market icons. Added a manufacturing photograph to the formerly empty introduction column. Automotive imagery replaced with a 3840-pixel-wide Martin Katler photograph (see IMAGE-CREDITS.md). Footer credit updated to Leonard Nicolass on all 77 pages. Browser spot checks confirmed all partner images loaded and the repaired sections rendered. Earlier layout checks only checked existing images; they did not detect the empty logo rail.

## Validation
All 77 pages checked in browser iframe viewports at 375, 768, 1440 and 3840 pixels: 308 layout/image checks, no detected horizontal page overflow or broken images. Local file and anchor audit: zero missing targets. JavaScript syntax and ZIP integrity checked. Browser spot checks exercised division selection/navigation, enquiry preselection, search and FAQ expansion. These checks are not a guarantee of every external service or physical-device behavior.

## Launch dependencies
This is a static implementation, not a deployed replacement for WordPress. The contact form validates inputs and saves a local enquiry draft; it does not send email. The working live contact-page link remains available. Connect the production form to Spartec's approved handler and verify email delivery and spam protection during deployment. Maps, third-party videos and external links require internet.

Privacy and website-use notices accurately describe this downloadable preview. They are not a verified corporate privacy policy or a replacement for company-approved legal terms. Match the final notices to the actual production hosting, forms, analytics and data practices before launch.

The layout supports 4K widths, but source photography is not native 4K: the tank source is 1397 x 594, automotive replacement 3840 x 4842, industrial replacement 1920 x 435, commercial 800 x 598. Obtain higher-resolution originals for crisp full-screen imagery, for the remaining original photographs. No artificial upscaling is represented as recovered detail. Photography depicts application areas and does not establish that every pictured part was made by Spartec.

The wordpress/spartec-refinements folder is the earlier optional motion-layer plugin, not a theme installer for this full redesign. Do not install it expecting the 77-page site. Integrate this source into the live theme on staging, retain native forms and existing approved policies, and review production compatibility before switching traffic. Existing theme/font/image licensing applies. Preview noindex tags are retained deliberately.
