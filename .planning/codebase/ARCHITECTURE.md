# Architecture

## Application Architecture
The project follows a classic **Procedural Monolithic Architecture** where individual `.php` and `.html` files act as direct web endpoints.

### Pattern & Flow
1. **Entry Points:** `index.html`, `login.php`, `signup.php`, `regis.php`. These are directly accessible from the browser.
2. **Action Scripts:** User submits a form to secondary processing scripts (e.g., `regis_procc.php`, `login_process.php`).
3. **Data Flow:** The processing script receives data via `$_POST`, opens a MySQL connection, executes inline SQL strings, and handles the redirect via inline JavaScript (`window.location.href`).

### Rendering
- No templating engine is used. Files are a mix of raw HTML and PHP logic sprinkled in.
- UI composition heavily relies on obsolete HTML `<iframe>` tags inside `index.html` (e.g., loading `firstpage.html` or `bank.html` inside an iframe).

### Persistence
- Persistence relies purely on local database queries running synchronously within the main execution thread.
- Data logic and validation logic are comingled directly in route endpoints.
