# OK Network Chapter — roadmap

Version on this branch: **3.2.0**. The Sweden install zip is tag `v3.2.0`. The shared chapter theme is tag `v3.2.0-network`. Release 3.1.3 counted three fixes after 3.1.0: logo shape, mobile menu, and front-page type. Items under “Shipped” are in the code. They are not an accessibility audit, a performance score, or a finished Sweden launch.

The shared line is `v3/theme-improvements`. Open Knowledge Sweden tracks it from `sweden-customizations` in this same repository. Do not fork a second theme repo. See [docs/fork-a-chapter.md](docs/fork-a-chapter.md).

## Shipped in 3.1.0

- Self-hosted HK Grotesk and Necto Mono. The Site Editor Google Fonts collection is unregistered.
- Block patterns for a chapter front page, projects, events, FAQ (`details`/`summary`), donate, people, quotes, and topic cards.
- Style variations: chapter green, chapter purple, chapter yellow, and dark mode. The palette stays the okfn.org set.
- Link colour `#006cb8` on white, underlines on links in body copy, visible focus rings, and 44px minimum hit areas in the theme CSS.
- Open Graph, Twitter Card, and JSON-LD (`NonprofitOrganization`, `WebSite`, `BlogPosting`) when Yoast, Rank Math, SEOPress, and AIOSEO are all inactive. Jetpack SEO is not detected.
- Font preload for HK Grotesk Regular and Bold.
- `es_ES` catalogs on this branch. `sv_SE` catalogs ship here too. Pattern strings follow the site language. Header labels in `parts/header.html` are static HTML.
- Language switcher: the Polylang block when Polylang is active. Otherwise a labelled example. `hreflang` is printed only from Polylang or the `okfn_chapter_language_alternates` filter.
- Chapter filters: `okfn_chapter_contact_email`, `okfn_chapter_social_links`, `okfn_chapter_donate_url`, `okfn_chapter_newsletter_url`.
- GitHub Actions: PHP syntax, PHPCS (WordPress-Extra and WordPress-Docs), PO compile, JSON parse of `theme.json` and `styles/*.json`, and a release zip via `git archive`.

The Sweden layer (OKSE logos, Swedish header, Sweden URLs, `docs/starter-copy-sv.md`) is the branch `sweden-customizations`, not a separate product version.

## Shipped in 3.2.0

- Happening now: cover photos on the front page, under the hero. Each card is one link to a project or event. Editors replace the image, the caption, the alt text, and the link.

## Now, before the okfn.se cutover

These are the remaining gates. Details for the staging host are in `docs/migration.md` on `sweden-customizations`.

1. `v3/theme-improvements` is merged for 3.2.0. Merge that line into `sweden-customizations` again before the next Sweden release.
2. On staging, set the site language to Svenska so `sv_SE` pattern strings load. okfn.se is `lang="en"` today. An English site language renders the new front page in English under the Swedish header.
3. Confirm PHP 8.2 or newer on the host. The theme is tested up to WordPress 7.1. okfn.se already runs 7.1.3.
4. A native speaker on the board approves the legal sentences in `docs/starter-copy-sv.md` before they replace `/om/`.
5. Confirm the Sweden social URLs (Mastodon `mastodon.nu/@okfse`, GitHub `okfse`, LinkedIn `open-knowledge-sweden`, X `okfse`).
6. Walk staging logged out: header, mobile overlay, footer, front page, one post, search, 404, `/donera/`, `/en/`.
7. If Jetpack’s SEO module is enabled, it already prints sharing tags and this theme will print a second set. Turn one of them off.
8. On staging, confirm the language switcher marks EN on `/en/` and SV on the Swedish pages.

## Later, after Sweden is live

- Keyboard, screen reader, and contrast check on the yellow and green bands. An axe or Pa11y job comes after that pass, once a wp-env smoke test of the front page, search, and 404 is stable. Do not call the theme WCAG 2.1 AA or WCAG 3.0 conformant until there is a recorded audit.
- A PageSpeed trace on staging. Change the theme only where that trace shows a cost. The 95+ target is not a result this theme has measured.
- Breadcrumbs, when a template renders a breadcrumb list. They are not implemented.
- Polylang, or a real `okfn_chapter_language_alternates` map, for the `/en/` page tree. Until then those pages stay ordinary pages and share the Swedish chrome.
- Point `okfn_chapter_newsletter_url` at a chapter list when one exists. Until then it goes to the contact page. Do not use the Foundation Mailchimp form.
- A child theme, after the parent is tagged and published as a zip.
- The Sweden page on okfn.org still lists older social URLs. Updating it is outside this repository.
- Umami stays a site plugin. See [docs/umami.md](docs/umami.md). The website ID stays out of git.

## What earlier notes got wrong

Milestone notes on `v3/okfn-chapter` marked the following as done. They are not:

- A finished WCAG audit, APCA, or “WCAG 3.0 readiness”.
- Measured Core Web Vitals, zero layout shift, or a 95+ PageSpeed score.
- Breadcrumbs.
- Browser `Accept-Language` redirects, an `okfn_lang` cookie, and bot detection. Those redirects fight caches, Polylang, and crawlers. They are not in the theme.
- Hardcoded `es`/`en` `hreflang` tags. Removed. Tags are printed only for real alternates.
- Validation of `theme.json` against `schemas.wp.org`. CI checks that the files parse as JSON.
- A recorded test with Yoast, Rank Math, or SEOPress.
