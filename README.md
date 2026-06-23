# OTV Agency Relaunch Landing Page

WordPress theme placeholder for the OTV Agency relaunch at [otv.agency](https://otv.agency).

## Client preview (GitHub Pages)

Static preview for sharing with clients: see **[CLIENT-PREVIEW.md](CLIENT-PREVIEW.md)**.

After push + Pages setup, the live URL is:

`https://otvagency.github.io/otv-agency-preview/`

Local preview: `python3 -m http.server 8899` → [preview.html](preview.html) or [index.html](index.html).

## What's included

- Custom WordPress block theme in `theme/` (upload to `wp-content/themes/otv-agency/`)
- `theme.json` brand tokens (forest/charcoal/cream palette inspired by Sept '22 OTV graphics + typography)
- Reusable section patterns in `theme/patterns/`
- Block templates in `theme/templates/` and template parts in `theme/parts/`
- Classic PHP templates (`front-page.php`, `header.php`, `footer.php`) for reliable single-page rendering
- Hero, services, pricing, portfolio teaser, testimonial, about, and contact sections
- Editorial hero and about photography (muted, non-stock aesthetic)
- Logo SVGs (light + dark horizontal, stacked footer logo, favicon)
- Copy reference in `content/copy.md`

## Theme structure

```
theme/
├── style.css              Theme header
├── theme.json             Brand colors, fonts, layout
├── functions.php          Assets, patterns, WooCommerce + Elementor support
├── front-page.php         Landing page (PHP template)
├── header.php / footer.php
├── templates/
│   ├── front-page.html    Block editor front page template
│   └── index.html         Fallback block template
├── parts/
│   ├── header.html
│   └── footer.html
├── patterns/              Section partials (hero, services, pricing, etc.)
└── assets/
    ├── css/main.css
    ├── js/main.js
    └── images/
```

## Deploy to WordPress

1. Zip the `theme/` folder or upload it to `wp-content/themes/otv-agency/`
2. In **Appearance → Themes**, activate **OTV Agency**
3. Create a page titled **Home**
4. Go to **Settings → Reading** → set **Your homepage displays** to **A static page** → select Home
5. The theme uses `front-page.php` (classic) or `templates/front-page.html` (block editor) for the homepage

## Placeholder URLs to fill in

Replace these before going live:

| Item | Where to update |
|---|---|
| JotForm intake embed | `theme/patterns/contact.php` → `#jotform-embed` block |
| Calendly link | `theme/patterns/hero.php` → primary CTA href |
| Social profiles | `theme/patterns/footer.php` (add links when ready) |
| Portfolio screenshots | Already included as PNGs in `theme/assets/images/portfolio/`. Replace or add `cmc`, `honey-sweet`, `jdprint`, `cay-custom`, `friendly-city`, or `bomb-effect` files (`.png`, `.jpg`, or `.webp`) to update. |

Portfolio cards auto-detect screenshots when those files exist; otherwise gradient placeholders display.

## Portfolio screenshots

When available, copy client site screenshots from:

- `02_Internal OTV/Marketing/Website Examples/`
- `02_Internal OTV/Website/Site Gallery/`

Rename to match the filenames above and drop into `theme/assets/images/portfolio/`.

## Later (v2)

- WooCommerce service catalog
- Elementor page editing (theme declares support when plugin is active)
- Full case study pages
- Norman Harris video testimonial embed
