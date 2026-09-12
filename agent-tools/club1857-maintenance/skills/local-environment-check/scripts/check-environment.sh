#!/usr/bin/env bash
# Diagnostic only: suppress raw failures that may contain local secrets.
set -u
if [ "$#" -ne 1 ] || [ ! -d "$1" ]; then
    printf 'Usage: bash check-environment.sh <repository-root>\n' >&2
    exit 2
fi
cd -- "$1" || exit 2
if [ ! -f docker-compose.yml ] || [ ! -d wp-content/themes/porter-pub-child ]; then
    printf 'FAIL: Target is not the expected Club1857 repository.\n' >&2
    exit 2
fi
if ! command -v docker >/dev/null 2>&1 || ! docker compose version >/dev/null 2>&1; then
    printf 'FAIL: Docker Compose v2 is unavailable.\n'
    exit 2
fi
if ! docker info >/dev/null 2>&1; then
    printf 'FAIL: Docker daemon is unavailable.\n'
    exit 2
fi
if ! running=$(docker compose ps --services --status running 2>/dev/null); then
    printf 'FAIL: Cannot inspect Compose service status.\n'
    exit 1
fi
failed=0
is_running() {
    local entry
    while IFS= read -r entry; do
        [ "$entry" = "$1" ] && return 0
    done <<< "$running"
    return 1
}
for service in db redis wordpress wpcli phpmyadmin; do
    if is_running "$service"; then
        printf 'PASS: %s is running.\n' "$service"
    else
        printf 'FAIL: %s is not running.\n' "$service"
        failed=1
    fi
done
if is_running wordpress && is_running wpcli && is_running db; then
    if docker compose exec -T wpcli wp core is-installed >/dev/null 2>&1; then
        printf 'PASS: WordPress installation is reachable through WP-CLI.\n'
        # Return only a fixed label, never arbitrary plugin/bootstrap output.
        if docker compose exec -T wpcli wp theme is-active porter-pub-child >/dev/null 2>&1; then
            printf 'PASS: Active theme is porter-pub-child.\n'
        elif docker compose exec -T wpcli wp theme is-active hello-elementor-child >/dev/null 2>&1; then
            printf 'PASS: Active theme is hello-elementor-child.\n'
        else
            printf 'FAIL: Neither expected child theme is confirmed active.\n'
            failed=1
        fi
    else
        printf 'FAIL: WordPress installation check failed; inspect runtime/database setup locally.\n'
        failed=1
    fi
else
    printf 'SKIP: WordPress checks require running db, wordpress, and wpcli services.\n'
fi
exit "$failed"
