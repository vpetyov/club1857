---
name: template-override-review
description: Review Club1857 WooCommerce and Events Calendar child-theme overrides against installed upstream templates for compatibility and preserved customizations.
---

# Template Override Review

Locate the repository and applicable contributor instructions. Scope the review
to the requested theme, plugin, or files. Read the
[review checklist](references/review-checklist.md) for lookup paths and evidence.

Compare each in-scope override with its installed upstream counterpart. Treat
version headers as clues, not proof of compatibility. Separate intentional site
customizations from missing upstream behavior. If a counterpart moved or is
missing, trace the installed template loader before declaring it obsolete.

Return findings ordered by impact, citing override and upstream paths, the
behavior affected, and a proposed correction. State the plugin version and any
runtime checks unavailable. A review alone should not replace templates; when
fixes are requested, preserve site behavior and validate affected flows.
