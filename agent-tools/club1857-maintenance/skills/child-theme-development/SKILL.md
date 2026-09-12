---
name: child-theme-development
description: Implement or fix Club1857 child-theme PHP, CSS, JavaScript, hooks, and shortcodes. Use for changes in porter-pub-child or hello-elementor-child.
---

# Child Theme Development

1. Locate the target repository and read its `AGENTS.md` and applicable nested
   guides. Confirm the requested theme against the active theme when the local
   runtime is available (`docker compose exec -T wpcli wp theme list`). If it is
   unavailable, use task evidence and state that activation was not verified.
2. Read [theme conventions](references/theme-conventions.md) for the relevant
   customization paths. Inspect the existing callback, template, and enqueue
   dependencies before changing them.
3. Implement the requested behavior in the appropriate child theme. Preserve
   shortcode names and public hooks unless changing them is part of the task.
   For plugin template overrides, compare the installed upstream template before
   editing; use its actual version rather than assuming current online examples match.
4. Syntax-check each changed PHP file using the running WordPress container:
   `docker compose exec -T wordpress php -l /var/www/html/<repository-relative-file>`.
   If using local PHP instead, report any runtime-version mismatch.
5. Verify the affected page at desktop and mobile widths when a browser and
   suitable database content are available. Check relevant interactions and errors.

Report changed behavior, files, verification results, and any checks blocked by
missing runtime or content. Do not claim visual verification from syntax checks.
