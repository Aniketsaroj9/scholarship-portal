# Roadmap: Scholarship Portal Modernization

## 1. Phase 1: Foundational Layout & Security Infrastructure
**Goal:** Setup basic modern routing and secure the DB connection.
**Why:** The backend needs to be secure before UI can safely consume it.
- Initialize `_db.php` or `database_connection.php` with robust error handling and singleton-level connection control.
- Ensure all queries globally use `mysqli_stmt` or transition locally to a simple PDO wrapper if easier.

## 2. Phase 2: Authentication Security & Cleanup
**Goal:** Refactor Login and Signup logic.
**Why:** Login is highly vulnerable currently.
- Update `signup.php` and `login.php` interfaces.
- Modify `login_process.php` to use prepared statements and hash storage (`password_hash`).

## 3. Phase 3: Registration Form Modernization
**Goal:** Overhaul the large registration UI and its logic.
**Why:** The registration table is currently massive, uses inline styles, and `regis_procc.php` is vulnerable.
- Build a new responsive form using CSS grids/flexbox for `regis.php`.
- Patch `regis_procc.php` to secure variables.

## 4. Phase 4: UI Unification (Frames removal)
**Goal:** Remove all iframes and center tags from `index.html` and related files.
**Why:** Iframes are obsolete for layout formatting.
- Create a unified `header.php` and `footer.php`.
- Convert `index.html` to `index.php` and integrate the sub-pages natively.
- Apply global modern typography and CSS theming (glassmorphism UI layout!).

---
*Roadmap generated from initial analysis. Run `/gsd-plan-phase 1` to begin.*
