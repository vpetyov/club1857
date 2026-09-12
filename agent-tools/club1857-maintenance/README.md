# Club1857 Maintenance

Portable agent workflows for this WordPress repository. `plugin.json` targets
[Agent Plugins 1.0.0](https://agent-plugins.org/plugin-authors/build-an-agent-plugin).
The three skills live directly under `skills/`; each bundles its own resources.

## Use

Load this directory as a plugin using your client's supported installation flow.
Committing it does not automatically install or enable it. No marketplace or
client-specific configuration is included. Skills can also be read directly by
an agent when a task explicitly references their `SKILL.md` paths.

- `child-theme-development`: scoped changes to either custom child theme.
- `local-environment-check`: read-only Docker and WordPress diagnostics.
- `template-override-review`: compare commerce/event overrides with installed upstream files.

From the repository root, run the standalone checker:

```bash
bash agent-tools/club1857-maintenance/skills/local-environment-check/scripts/check-environment.sh .
```

Requires Bash and Docker Compose v2; WordPress checks require running `wordpress`
and `wpcli` services and configured local WordPress files/database. Exit status is
0 when checks pass, 1 for failed checks, and 2 for invalid input or unavailable
Docker tooling. Output contains check summaries, never raw configuration or logs.
The script does not start services, install WordPress, or repair configuration.
WordPress bootstrap may run installed plugin hooks as it normally does.

## Maintain

Keep repository-wide conventions in the root `AGENTS.md`. Pass the target
repository path explicitly to scripts; the plugin may be installed elsewhere.
Keep bundled references within this package and resolve them relative to each
skill. Do not bundle site configuration, database dumps, or credentials.

Version package changes in `plugin.json` using semantic versioning. Validate it
against the declared schema and validate each skill's frontmatter before sharing.
Use `bash -n` and exercise the checker after script changes. MCP is intentionally
absent; add it only for a concrete integration, with client-managed authentication.
