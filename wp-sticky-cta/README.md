# Sticky CTA Shortcode (WordPress)

Renders a sticky image/banner that stays visible while scrolling.

**Shortcode**
```
[sticky_cta img="https://example.com/cta.png" link="/contact/" width="320" alt="Book a consultation"]
```

**Parameters**
- `img` (required) – Image URL
- `link` (optional) – Click-through URL (default `#`)
- `width` (optional) – Max width in px (default `320`)
- `alt` (optional) – Alt text for the image

**Installation**
1. Upload the plugin to `wp-content/plugins/` or install via WP Admin → Plugins → Add New → Upload Plugin (ZIP).
2. Activate **Sticky CTA Shortcode**.
3. Place the shortcode in a sidebar widget, Elementor HTML widget, or inside content.

**Notes**
- Uses `position: sticky; top: 24px;` so it stays in view on scroll.
- In themes with complex sidebars, ensure the parent container isn’t `overflow:hidden` in a way that blocks sticky positioning.

## License
GPL-2.0-or-later
