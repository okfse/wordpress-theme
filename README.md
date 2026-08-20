# OK Network Chapter

WordPress **7.0+** block theme for Open Knowledge Network chapters. It ports the [okfn.org](https://okfn.org/) visual identity (palette, HK Grotesk, pill buttons, colour orbs) into core Site Editor and block patterns. No Astra, Spectra, Elementor, or other page-builder plugin is required.

Version **3.0.0** replaces the deprecated classic `OKFN-WP` 2.0 theme (Bootstrap 4, jQuery, mmenu, Grunt). The classic tree is tagged `classic-2.0.0`.

First intended deployment: [okfn.se](https://okfn.se/). Other chapters can reuse the theme by swapping the Site Logo and, optionally, the **Chapter green** style variation.

## Requirements

- WordPress 7.0 or later
- PHP 8.2 or later
- No required plugins. Optional: Contact Form 7 for contact pages; Create Block Theme only while developing.

## Local development

From this directory:

```sh
npx @wp-env/cli start   # or: npm i -D @wordpress/env && npx wp-env start
```

`.wp-env.json` boots WordPress 7.0.4 with this folder as the active theme.

PHP syntax:

```sh
find -L . -name '*.php' -print0 | xargs -0 -n 1 php -l
```

## Editing (for volunteers)

1. **Appearance → Editor** (Site Editor).
2. Set **Site Logo** to the chapter landscape logo (colour on white).
3. Open the **Header** template part and edit Navigation links.
4. Open the **Footer** template part (or the Footer pattern) for social URLs and legal links.
5. Build pages from **Patterns → OK Network**: Hero punch, Feature cards, Person card, Quote, Latest posts, Newsletter, Page closing, etc.
6. Button styles: default (black fill), **White fill**, **Pill** (outline). Heading style **Highlight (mono)** uses Necto Mono.
7. Group styles **Blue / Green / Purple / Yellow orb** add the brand colour-circle background.

Do not install a page builder. Layout lives in patterns; you change text, images, and URLs.

## Fonts

Both faces are **SIL OFL 1.1** and **self-hosted in the theme**. `styles/fonts.css` registers them with local `@font-face` URLs. Nothing is loaded from Google Fonts or any other remote host.

- **HK Grotesk** — WOFF2 in `assets/fonts/hk-grotesk/` (`OFL.txt`)
- **Necto Mono** — OTF in `assets/fonts/necto-mono/` (`OFL.txt`); used for highlight headings and citations

## What this theme does not do

- It does not convert classic PHP templates or `[latestposts]` shortcodes automatically. See `docs/migration.md`.
- It does not add Polylang. okfn.se English pages stay as a separate `/en/` tree unless you add a multilingual plugin later.
- It does not inject Google Analytics. Use a plugin or host snippet.

## Licence

Theme code: GPL-2.0-or-later.  
Content you publish: typically CC BY 4.0, matching Network practice.
