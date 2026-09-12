# Repository Guidelines

## Project Structure & Module Organization

This repository contains a WordPress site and Docker configuration.
- `wp-content/themes/porter-pub-child/` contains custom PHP hooks, `template-parts/`, CSS/JavaScript in `assets/`, and WooCommerce and Events Calendar template overrides.
- `wp-content/themes/hello-elementor-child/` contains another child theme with its own hooks, templates, and assets. Confirm the active theme before editing.
- `wp-content/plugins/` and `wp-content/mu-plugins/` contain installed extensions. Prefer child-theme customizations over changes to bundled third-party code.
- `docker-compose.yml` defines WordPress, MySQL, Redis, phpMyAdmin, and WP-CLI services; `wordpress.ini` supplies PHP settings.
- WordPress core, uploads, caches, and local configuration are excluded by `.gitignore`. A fresh checkout requires these runtime dependencies and suitable database content.

## Build, Test, and Development Commands

Run commands from the repository root:
- `docker compose up -d` starts the local stack; WordPress is exposed at `http://localhost:8000`, phpMyAdmin at `http://localhost:8080`.
- `docker compose logs -f wordpress` follows web-server and PHP output.
- `docker compose exec wpcli wp theme list` checks installed themes and identifies the active theme.
- `docker compose exec wordpress php -l /var/www/html/wp-content/themes/porter-pub-child/functions.php` checks PHP syntax; substitute each changed PHP file.
- `docker compose stop` stops services while retaining containers.

There is no root-level asset build, package manifest, or test runner.

## Coding Style & Naming Conventions

Match surrounding formatting; custom PHP generally uses four-space indentation, though legacy files vary. Use snake_case for PHP functions, prefix new global functions with `club1857_`, and use descriptive hyphenated asset filenames. Preserve upstream template paths. Register behavior through WordPress hooks and enqueue assets through WordPress APIs. Sanitize input and escape output. No repository-wide formatter or linter is configured.

## Testing Guidelines

No project-wide automated suite or coverage threshold is defined. Syntax-check changed PHP and manually verify affected pages, shortcodes, responsive layouts, and relevant commerce or event flows. Check browser-console and PHP errors. Bundled plugin tests are not a site-level suite.

## Commit & Pull Request Guidelines

No commit convention is established beyond initial commits. Use imperative subjects, such as `Fix event slider layout`. PRs should describe affected paths, validation steps, related issues when available, and screenshots for visual changes.

## Configuration & Security

Keep credentials, SQL backups, logs, and uploads out of commits. Review local database settings before starting Docker. Read any nested `AGENTS.md` before modifying its directory.

## Agent Workflows

Use [Club1857 Maintenance](agent-tools/club1857-maintenance/README.md) for child-theme development, local diagnostics, and template reviews. Its portable skills require client loading or explicit reference; repository rules remain here.

## Do / Don't

**Don't:**
- Don't run `git commit` or `git push`. Make the code changes and leave them for the user to review and commit themselves.
- Don't make changes to the plugins without reviewing their impact and ensuring compatibility with the custom theme.
- Don't add yourself as a contributor in the project files, PRs, or any documentation.

**Do:**
- Try to always hook into WordPress actions and filters rather than modifying wp core files or plugins which are not created by me directly.