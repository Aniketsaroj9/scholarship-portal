# Structure

## Directory Layout
The codebase has a flat root-level structure. All files coexist in the root `c:\xampp\htdocs\Scholership-Portal` directory.

### Key Locations
- **`setup.sql`**: The single source of truth for the database schema (contains queries to create `login_db`, `login`, `reg`, and `chek` tables).
- **Processing Scripts (`*_process.php` & `*_procc.php`)**: Files containing the backend database insertion and selection logic (`login_process.php`, `regis_procc.php`).
- **UI Views (`*.html` & `*.php`)**: Front-facing user forms and dashboards (`index.html`, `login.php`, `regis.php`, `home.php`).
- **Testing Scripts (`test_*.php`)**: A collection of isolated scripts used by developers to manually verify DB connections and queries.
- **`database_connection.php`**: Contains reusable database connection logic, though some scripts bypass it and define connections inline.

### Naming Conventions
- There are no formalized naming conventions. Names are abbreviated (e.g., `regis_procc.php` instead of `registration_process.php`) and some files feature potential typos (`cheak.php` instead of `check.php`).
