# Umami analytics (Hobby)

The theme does **not** embed analytics. Add [Umami Cloud](https://umami.is/) on the **WordPress site**, not in git.

Hobby is enough for a chapter: 100k events/month, 3 websites, 6 months retention. There is no official Umami WordPress plugin. Tracking is one script:

```html
<script defer src="https://cloud.umami.is/script.js" data-website-id="YOUR-UUID"></script>
```

## Install (recommended)

1. Create an account at [cloud.umami.is](https://cloud.umami.is) and pick **Hobby**.
2. **Add a website** for the real domain (e.g. `okfn.se`). Copy the **Website ID**. Optionally add a second site for staging (Hobby allows three).
3. In WordPress: Plugins → Add New → **[Integrate Umami](https://wordpress.org/plugins/integrate-umami/)** (GPL, tested on WordPress 7.x).
4. Settings:
   - Script URL: `https://cloud.umami.is/script.js`
   - Website ID: the UUID from step 2
   - Enable tracking
   - **Ignore admin users**
5. Open the public site **logged out** and confirm a pageview in the Umami dashboard.

Do not put the UUID in the theme repository. Production and staging IDs differ. Do not enable tracking on wp-env (`localhost:8888`); that burns the Hobby event quota.

## Privacy

Umami Cloud is cookieless. Note it on the privacy policy page (`/dataskyddspolicy/` on okfn.se) if that document still claims only unspecified “analytics”.

## Optional: no plugin

If you refuse extra plugins, define this in `wp-config.php` on the server only (not in git):

```php
define( 'OKFN_UMAMI_WEBSITE_ID', 'your-uuid-here' );
```

Then a small theme loader can enqueue the Cloud script. That helper is not shipped yet; use Integrate Umami unless you ask for it.
