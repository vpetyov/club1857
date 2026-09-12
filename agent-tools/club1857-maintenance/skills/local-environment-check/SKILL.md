---
name: local-environment-check
description: Diagnose the Club1857 local Docker stack, WordPress connectivity, and active theme without changing service or site configuration.
---

# Local Environment Check

Run the bundled script with an explicit target repository path:

```bash
bash <skill-directory>/scripts/check-environment.sh <repository-root>
```

The script checks Docker Compose availability, daemon connectivity, expected
running services, WordPress installation, and the active stylesheet. It emits
summaries instead of raw command failures because plugin/bootstrap errors can
contain local configuration. Exit codes: 0 passed, 1 check failures, 2 missing
prerequisites or invalid invocation.

Interpret missing services separately from failed WordPress checks. A fresh
checkout lacks ignored runtime files, uploads, and database content. Inspect
which prerequisites are missing without reading or printing credentials or SQL
contents. A running container alone does not establish application health.

Report passed, failed, and skipped checks plus the smallest relevant next step.
This diagnostic workflow does not authorize starting services, database imports,
plugin activation, or configuration repairs; perform repairs only within the
user's requested scope. Avoid displaying full `docker compose config`, environment
variables, or unfiltered logs. Do not repeat failed checks unless evidence changes.
