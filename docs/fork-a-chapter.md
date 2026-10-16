# Fork a chapter from this theme

Keep one upstream: the `v3/theme-improvements` line in this repository. A chapter site installs that theme. Sweden stays on `sweden-customizations` until the parent is released as a versioned zip. After that, Sweden can become a child theme. Do not copy this whole repository into a second theme repo.

## Change these files

| File | What to change |
|---|---|
| `assets/logos/**`, favicon | The chapter logo pack. |
| `functions.php` | `okfn_chapter_default_logo()` path. Filters `okfn_chapter_contact_email`, `okfn_chapter_social_links`, `okfn_chapter_donate_url`, `okfn_chapter_newsletter_url`. |
| `parts/header.html` | Navigation labels and URLs, in the language of the site. This file is not passed through gettext. |
| `patterns/footer.php` | Legal links that differ from privacy, code of conduct, donate, and the Network. |
| `patterns/hero-punch.php`, `patterns/feature-cards.php`, `patterns/topic-cards.php` | Only when the wording or the URLs differ from the generic starter. |
| `style.css` | Theme name, author, description. |
| `languages/*.po` | The chapter locale. |
| `screenshot.png` | A capture of that chapter’s front page. |
| `docs/migration.md` | How that chapter moves off the classic theme. |

Leave `theme.json` colours, shared patterns, and search templates on the upstream branch. Style variations switch the footer and the default orb between the four brand colours. They do not replace those colours.

## Filters

```php
add_filter( 'okfn_chapter_contact_email', function () {
	return 'contact@example.org';
} );

add_filter( 'okfn_chapter_donate_url', function () {
	return home_url( '/donate/' );
} );

add_filter( 'okfn_chapter_newsletter_url', function () {
	return home_url( '/contact/' );
} );

add_filter( 'okfn_chapter_social_links', function () {
	return array(
		array( 'service' => 'mastodon', 'url' => 'https://mastodon.social/@chapter' ),
	);
} );
```

`hreflang` is empty until Polylang is active or you return a map from `okfn_chapter_language_alternates`:

```php
add_filter( 'okfn_chapter_language_alternates', function () {
	return array(
		'en'        => home_url( '/' ),
		'sv'        => home_url( '/sv/' ),
		'x-default' => home_url( '/' ),
	);
} );
```

Do not redirect visitors from `Accept-Language`.

## Sentences every chapter rewrites

The starter text is in [starter-copy.md](starter-copy.md). Replace the legal placeholder, the project cards, the example event, and the newsletter URL before the site is public. Point donations at the chapter, not at the Foundation PayPal button.
