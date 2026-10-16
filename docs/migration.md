# Migrating a classic OKFN-WP site

The classic theme (`OKFN-WP` 2.0, folder names such as `wordpress-theme-2022-05-10`) is a Bootstrap 4 PHP theme. This block theme replaces it. Activating it does not rewrite page HTML. Classic code is tag `classic-2.0.0`.

Open Knowledge Sweden follows the cutover in `docs/migration.md` on branch `sweden/theme-improvements`. Another chapter follows [fork-a-chapter.md](fork-a-chapter.md) and [starter-copy.md](starter-copy.md).

## Shared steps

1. The host needs PHP 8.2+ and WordPress 7.0+.
2. Back up the database and `wp-content/uploads`. Do the work on a staging copy.
3. Deploy this branch as `wp-content/themes/okfn-chapter/` and activate **OK Network Chapter**. Leave the classic folder installed until the new theme has been checked.
4. Set the site language to the chapter locale so pattern strings translate. Labels in `parts/header.html` are static HTML and do not go through gettext.
5. `templates/front-page.html` replaces the static front page body with patterns. It does not print that page’s content. Other pages keep their content through `page.html`. Posts keep their permalinks through `single.html`.
6. Search published content for classic shortcodes (`latestposts`, `latest_posts`, `pseudocontent`, `carousel`, `slide`, `banner`, `notitle`, `menupod`) and replace the hits in the editor. The latest-posts pattern replaces `[latestposts]`.
7. Walk the header, the mobile menu, the footer, the home page, a post, search, and the 404.

Contact Form 7 is optional. Analytics stay out of the theme. See [umami.md](umami.md).

Do not install Astra, Spectra / Ultimate Addons for Gutenberg, Elementor, or a similar builder.
