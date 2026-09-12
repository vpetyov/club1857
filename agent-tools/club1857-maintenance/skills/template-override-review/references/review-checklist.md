# Override Review Checklist

## Locate counterparts

For `wp-content/themes/porter-pub-child/woocommerce/<path>`, begin with
`wp-content/plugins/woocommerce/templates/<path>`.

For `tribe-events/<path>`, begin with
`wp-content/plugins/the-events-calendar/src/views/<path>`.
For `tribe/events/v2/<path>`, begin with that plugin's `src/views/v2/<path>`.
These are starting points: inspect the installed loader if a mapping fails.
Check parent-theme overrides when relevant to actual template resolution.

Read the installed plugin header/version and any template `@version` annotations.
Use `diff -u <upstream> <override>`; exit code 1 indicates differences, not a failed
comparison. Do not replace an entire customized template just to match a header.

## Assess differences

- Missing or reordered actions/filters and their arguments.
- Changed variables, escaping, localization, form fields, and nonces.
- Markup/data attributes expected by installed plugin JavaScript.
- Site-specific layout and content that must survive an update.
- Deprecated calls confirmed against the installed plugin implementation.

## Verify relevant behavior

For commerce changes, exercise affected product, variation, cart, or checkout
interactions using local test data; avoid real payments. For event changes,
exercise the affected listing, single event, navigation, or metadata display.
Check responsive layout and PHP/browser errors. Record paths, impact, evidence,
and checks performed; explicitly identify any behavior that remains unverified.
