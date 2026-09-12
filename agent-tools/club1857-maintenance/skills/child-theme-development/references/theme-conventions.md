# Theme Conventions

## Porter Pub child

`wp-content/themes/porter-pub-child/functions.php` registers styles, scripts, and
beer, event, and sport-event slider shortcodes. Inspect `template-parts/` for their
markup and `assets/css/` and `assets/js/` for presentation and interactions.
`header.php` and `theme-framework/` also contain overrides.

WooCommerce overrides are under `woocommerce/`. Events Calendar overrides occupy
both `tribe-events/` and `tribe/events/`; their template generations differ.
Preserve the lookup path when updating a template.

## Hello Elementor child

`wp-content/themes/hello-elementor-child/functions.php` registers slider assets,
the beer slider, and the event excerpt shortcode. Inspect `template-parts/`,
`assets/css/`, and `theme.json` according to the requested change.

## Dependencies and scope

Both themes define some of the same callback and shortcode names. Do not copy
callbacks between themes or edit both solely because their names match. Follow
the selected theme's enqueue handles and inspect existing jQuery/Slick loading
before adding a dependency. Preserve translations and plugin-provided hooks in
markup. Runtime activation and page content are database state, not established
by the presence of a theme directory.
