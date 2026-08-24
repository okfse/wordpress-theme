# OK Network Chapter — Site Editor & Customization Guide

This guide is designed for chapter editors, webmasters, and volunteers managing an Open Knowledge Network WordPress website.

---

## 🎨 1. Getting Started with the Site Editor

This theme uses modern WordPress Full Site Editing (FSE). You do not need any page-builder plugins (like Elementor or Astra/Spectra). Everything is managed natively in the WordPress Site Editor.

1. In your WordPress dashboard, navigate to **Appearance → Editor**.
2. From the Site Editor menu, you can customize:
   - **Navigation**: Manage header menu items and hierarchy.
   - **Styles**: Select chapter color variations and global typography.
   - **Pages**: Edit page templates and layouts.
   - **Templates & Template Parts**: Edit the **Header** and **Footer**.
   - **Patterns**: Access all pre-built OK Network brand blocks.

---

## 🎨 2. Applying Style Variations

The theme includes multiple built-in color schemes tailored to Open Knowledge brand colors:

* **Default (Blue)**: The classic okfn.org electric cyan (`#00d1ff`) identity.
* **Chapter Green (`styles/chapter-green.json`)**: Teal and vibrant green variation (`#2dd4bf`).
* **Chapter Purple (`styles/chapter-purple.json`)**: Brand purple and violet variation (`#7c3aed`).
* **Chapter Yellow (`styles/chapter-yellow.json`)**: Brand yellow accent variation (`#eab308`).
* **Dark Mode (`styles/dark-mode.json`)**: High-contrast dark background (`#121214`) with glowing neon accents.

### How to switch:
1. Go to **Appearance → Editor → Styles** (the half-black/half-white circle in the top right).
2. Click **Browse styles**.
3. Select your chapter's variation and click **Save**.

---

## 🧩 3. Using OK Network Block Patterns

To build pages, open the block inserter (`+` icon at the top left of the editor) and navigate to **Patterns → OK Network**:

| Pattern Name | Description |
|---|---|
| **Hero punch** | High-impact hero section with orb background, title, mission copy, and CTA button. |
| **Feature cards** | Three bordered cards with curved-arrow action links. |
| **Projects & Case studies** | Responsive grid of civic tech and data initiatives with category badges. |
| **Events & Meetups** | Upcoming community meetups with calendar badges and RSVP links. |
| **FAQ / Accordion** | Accessible expand/collapse accordion for frequently asked questions. |
| **Donate & Support CTA** | Centered fundraising section with one-time and membership buttons. |
| **Latest posts** | 3-column dynamic query loop of recent blog posts. |
| **Number stats** | Impact counter cards highlighting chapter milestones. |
| **Person card** | Team, board, and speaker biographies with photo, role, and bio. |
| **Newsletter** | Email subscription call-to-action with orb background. |
| **Language switcher** | Accessible bilingual toggle pill (`ES | EN` / `SV | EN`). |

---

## 🌐 4. Multilingual & Localization Settings

* **Spanish / English (Generic Network Theme)**: Primary strings are localized in `languages/okfn-chapter-es_ES.po` and `.l10n.php`.
* **Swedish / English (Sweden Theme)**: Localized in `languages/okfn-chapter-sv_SE.po` and `.l10n.php`.
* **Polylang Compatibility**: You can use the built-in `okfn-chapter/language-switcher` pattern or the Polylang Language Switcher block (`wp:polylang/language-switcher`).

---

## ♿ 5. Accessibility & SEO Best Practices

1. **Always add Alt Text to meaningful images**: If an image conveys information or portrays a team member, write descriptive alternative text in the Block Settings sidebar. Decorative background graphics already use empty `alt=""`.
2. **Maintain Heading Hierarchy**: Keep a single `Heading 1` (`<h1>`) per page. Section titles should be `Heading 2` (`<h2>`), and individual cards or accordion items should be `Heading 3` (`<h3>`).
3. **Use Button Block Styles**: Use the **Pill** (outline) or **White fill** block styles in the inspector for high-contrast, accessible call-to-actions.
