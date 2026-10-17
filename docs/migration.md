# Migrating okfn.se

The classic theme (`OKFN-WP` 2.0, folder `wordpress-theme-2022-05-10`) is a Bootstrap 4 PHP theme. This block theme replaces the header, footer, and templates. It does not rewrite page HTML. Classic code is tag `classic-2.0.0`.

Install the release file [okfn-chapter.zip](https://github.com/okfse/wordpress-theme/releases/download/v3.1.3/okfn-chapter.zip) from tag `v3.1.3`. That tag is the Sweden theme. Do not install a zip downloaded from the branch menu: GitHub names that archive after the branch, and WordPress will not see it as `okfn-chapter`. Later edits stay on branch `sweden-customizations`. Do not deploy `master`, `sweden/okfn-chapter`, or a fork. Another chapter follows [fork-a-chapter.md](fork-a-chapter.md) and [starter-copy.md](starter-copy.md).

Inventory of the live site on 16 October 2026:

- WordPress 7.1.3. The theme’s `Tested up to` header still says 7.0. Confirm PHP 8.2+ on the host. The public HTML language is `en`.
- The front page is the static page Hem. The posts page is `/blog/`. About 50 pages and 180 posts.
- Hem is old Bootstrap markup. `/om/`, `/kontakt/`, and `/donera/` already contain blocks. `/donera/` lists Swish `123 705 58 09`, Bankgiro `5359-5633`, and OpenCollective. Keep that text.
- Rendered content has no `[latestposts]`, `[carousel]`, or `[pseudocontent]`. One 2014 post, “Open data innovation with geodata”, still contains `[slide]`. Strings such as `contact[at]okfn.se` are written into the text. They are not theme shortcodes.
- English is a page tree under `/en/` (About, Board, Donate, Projects, Publications, Organization), not Polylang.
- Plugins on the REST index: Jetpack, Jetpack Boost, Two Factor, Limit Login Attempts Reloaded.

`templates/front-page.html` does not print the page body. Activating the theme replaces Hem with the hero, feature cards, latest posts, topic cards, newsletter, and closing band. Other pages use `page.html`, which prints the title and the existing content. Posts use `single.html` and keep their permalinks.

## Staging

1. Back up the database and `wp-content/uploads`. Copy production to a staging host.
2. Confirm PHP 8.2 or newer.
3. Install `okfn-chapter.zip` so the directory is `wp-content/themes/okfn-chapter/`. Leave `wordpress-theme-2022-05-10` installed.
4. Activate **OK Network Chapter**.
5. Settings → General → Site Language → Svenska. Pattern strings load `sv_SE` only when that is the site language. The header in `parts/header.html` is Swedish either way. An English site language would put English pattern text under that Swedish header.
6. Settings → Reading stays a static front page: Hem in front, Blogg for posts. The new front page comes from the theme template.
7. The header links are Om `/om/`, Vad vi gör `/oppnadata/`, Engagera dig `/engagera-dig/`, Blogg `/blog/`, Kontakt `/kontakt/`. Donate is a button to `/donera/`. “Vad vi gör” opens the page titled “Vad är Öppet?”. Keep the URL. Rename the label later if the board wants that.
8. The footer points at `/dataskyddspolicy/`, `/cookie-policy/`, `/om/uppforandekod/`, `/ip-policy/`, `/om/stadgar/`, and `/donera/`. Social links are Mastodon `mastodon.nu/@okfse`, GitHub `okfse`, LinkedIn `open-knowledge-sweden`, and X `okfse`. Confirm the accounts. The Sweden page on okfn.org still lists older URLs. That page is outside this repository.
9. The header logo falls back to `assets/logos/Landscape/SVG/OKSE-landscape-full-rgb.svg` when no Site Logo is set. Set a Site Icon only when the OKSE favicon should not be used.
10. Open `/donera/` and confirm the Swish and Bankgiro details still render. Use the donate pattern only after those details are copied into it.
11. Open `/en/`, a Swedish post, search, and the 404. The language switcher marks EN on `/en/` and SV elsewhere. Old posts can look plainer. That can ship.
12. If Jetpack’s SEO module is on, disable either that module or rely on it alone. This theme also prints Open Graph tags when Yoast, Rank Math, SEOPress, and AIOSEO are absent. It does not detect Jetpack.
13. Search for leftover classic shortcodes:

    ```sql
    SELECT ID, post_title FROM wp_posts
    WHERE post_status = 'publish'
      AND post_content REGEXP '\\[(latestposts|latest_posts|pseudocontent|carousel|slide|banner|notitle|menupod)';
    ```

    Fix the known 2014 geodata post in the editor.
14. Logged out, on a desktop width and a phone width: menu overlay, search, skip link, footer links.
15. A native speaker on the board approves the legal sentences in [starter-copy-sv.md](starter-copy-sv.md) before they replace `/om/`. Do not paste 2021 biographies from okfn.org into person cards.

Leave Umami off on staging. See [umami.md](umami.md).

## Cutover

Activate the same theme directory on production after staging looks right. Keep the classic folder for one release, then remove it. The old Appearance → Menus screen is unused. This theme reads `parts/header.html`.

`/om/`, `/engagera-dig/`, project pages, and the English tree can be restyled in the Site Editor after launch. Their URLs stay.

Do not install Astra, Spectra / Ultimate Addons for Gutenberg, Elementor, or a similar builder. Contact Form 7 is optional.
