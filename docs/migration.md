# Migrating okfn.se (and other classic OKFN-WP sites)

The classic theme (`OKFN-WP` 2.0, folder names such as `wordpress-theme-2022-05-10`) is a Bootstrap 4 PHP theme. This block theme is a replacement, not an in-place upgrade.

Classic code is preserved in Git as tag `classic-2.0.0`.

## Before cutover

1. Confirm the host runs **PHP 8.2+** and can run **WordPress 7.0+** (okf.fi is on 7.0.4).
2. Take a full backup of the database and `wp-content/uploads`.
3. Copy production to a staging URL.
4. Upgrade WordPress core to 7.0+ on staging first, while the classic theme is still active. Fix plugin incompatibilities there.
5. Scan the database for leftover shortcodes:

   ```sql
   SELECT ID, post_title FROM wp_posts
   WHERE post_content LIKE '%[latestposts%'
      OR post_content LIKE '%[carousel%'
      OR post_content LIKE '%[pseudocontent%';
   ```

   Replace those blocks of content after the new theme is active (Query Loop pattern replaces `[latestposts]`).

## Install the new theme

1. Deploy this repository as `wp-content/themes/okfn-chapter/` (do not reuse the dated classic folder name).
2. Appearance → Themes → activate **OK Network Chapter**.
3. Appearance → Editor → upload the chapter Site Logo (landscape, colour).
4. Edit the Header Navigation: About, What we do, Get involved, Blog, Contact (Swedish slugs on okfn.se: `/om/`, `/oppnadata/`, `/engagera-dig/`, `/blog/`, `/kontakt/`).
5. Edit Footer social URLs and legal links.

## Content

| Surface | Action |
|---|---|
| Blog posts | Keep permalinks and dates. Open a post and convert classic blocks to blocks if needed. The single template supplies title, date, author. |
| Home | Assign the front page template (or use **Page without title** and insert Hero / Feature cards / Latest posts / Page closing patterns). |
| Key pages (Om, Engagera dig, Kontakt, Donera, English equivalents) | Rebuild with patterns. Do not try to restyle 2022 Bootstrap markup. |
| Long-tail project pages | Convert to blocks; apply heading/button styles only. |
| Menus | Recreate in the Site Editor. Block themes do not use `register_nav_menus()` locations. |
| Theme Options (GA, Twitter, CTA) | Not ported. Analytics: [Umami Hobby + Integrate Umami](umami.md). CTA is the **Page closing** pattern. |

## After cutover

- Walk header (desktop + mobile overlay), footer, home, a post, search, and 404.
- Check contrast: yellow/green/purple are backgrounds, never small body text.
- Confirm custom logo, favicon, and social links.
- Keep the classic theme folder on the server for one release cycle, then remove it.

## Optional plugins (GPL)

- Contact Form 7 — contact page (okf.fi uses this).
- A caching plugin the host already supports.
- Create Block Theme — **development only**, to dump Site Editor changes back to files.

Do not install Astra, Spectra / Ultimate Addons for Gutenberg, Elementor, or similar builders.
