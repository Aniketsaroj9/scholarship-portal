# What This Is

The **Scholership-Portal** is a sample web application built with a traditional PHP/MySQL stack that allows users to register, log in, and apply for various scholarship schemes.

## Core Value

The immediate goal is to dramatically improve the existing boilerplate project by modernizing its visual aesthetics (removing obsolete tags like `<iframe>` and `<center>`) and securing its data layer (fixing SQL injections).

## Requirements

### Validated

- ✓ Local database setup using `setup.sql`
- ✓ Web interfaces for Login, Signup, and Registration
- ✓ Ability to write registration details to `login_db`

### Active

- [ ] **Visual Overhaul**: Implement modern, rich CSS styling (glassmorphism, modern typography) and convert the layout to be fully responsive (removing the legacy iframe-based architecture).
- [ ] **Security Patching**: Convert all raw `$_POST` database insertions in processing scripts (`login_process.php`, `regis_procc.php`, etc.) into robust **Prepared Statements**.
- [ ] **Architecture Cleanup**: Consolidate database connections and separate PHP business logic from HTML views where practical for maintainability.

### Out of Scope

- [Docker/Deployment] — explicitly requested to remain a local sample codebase without deployment configurations.

## Key Decisions

| Decision | Rationale | Outcome |
|----------|-----------|---------|
| Focus on "Both" UI and Security | The user wants an end-to-end upgrade of the sample to adhere to modern security practices and visual standards. | — Pending |

## Evolution

This document evolves at phase transitions and milestone boundaries.

**After each phase transition** (via `/gsd-transition`):
1. Requirements invalidated? → Move to Out of Scope with reason
2. Requirements validated? → Move to Validated with phase reference
3. New requirements emerged? → Add to Active
4. Decisions to log? → Add to Key Decisions
5. "What This Is" still accurate? → Update if drifted

**After each milestone** (via `/gsd-complete-milestone`):
1. Full review of all sections
2. Core Value check — still the right priority?
3. Audit Out of Scope — reasons still valid?
4. Update Context with current state

---
*Last updated: 2026-04-09 after initialization*
