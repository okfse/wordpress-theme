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
npm install
npm start
```

That runs [wp-env](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) (WordPress 7.0.4) **and activates this theme**. A plain `npx wp-env start` leaves Twenty Twenty-Five active — WordPress always installs a default theme; ours is mapped in as `wordpress-theme` and must be switched on.

| URL | What |
|---|---|
| http://localhost:8888/ | Front end (hero, cards, latest posts, footer) |
| http://localhost:8888/wp-admin/ | Admin. User `admin`, password `password` |

If the site is already running and still shows Twenty Twenty-Five:

```sh
npx wp-env run cli wp theme activate wordpress-theme
```

Then reload http://localhost:8888/. You do **not** need to set a Site Logo or rebuild pages to preview: `templates/front-page.html` already inserts the OK Network patterns.

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

## Analytics (Umami)

Not part of the theme. Use Umami Cloud Hobby and the **Integrate Umami** plugin on the live site. See [docs/umami.md](docs/umami.md). Do not enable it in wp-env.

## What this theme does not do

- It does not convert classic PHP templates or `[latestposts]` shortcodes automatically. See `docs/migration.md`.
- It does not add Polylang. okfn.se English pages stay as a separate `/en/` tree unless you add a multilingual plugin later.
- It does not inject analytics IDs. See [docs/umami.md](docs/umami.md).

## Licence

Theme code: GPL-2.0-or-later.  
Content you publish: typically CC BY 4.0, matching Network practice.

To move this fork to the okfse GitHub org, see [docs/move-to-okfse.md](docs/move-to-okfse.md).
