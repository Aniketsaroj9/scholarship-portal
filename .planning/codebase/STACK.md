# Stack

## Current Technology Stack
This project uses a traditional LAMP/XAMPP stack without any modern frameworks.

- **Language/Runtime:** PHP (Procedural)
- **Database:** MySQL
- **Frontend CSS/UI:** Vanilla HTML/CSS with inline styling. No external CSS frameworks (like Bootstrap or Tailwind).
- **Web Server:** Currently running on Apache via a standard XAMPP setup (inferred).

## Dependencies
- **Backend:** `mysqli` extension in PHP for database connectivity.
- **Frontend:** No modern package manager (`npm` or `composer`). Assets like fonts or frameworks are absent; uses standard web elements.

## Configuration
- Database configuration is hardcoded in files like `database_connection.php` and inline in some processing scripts (e.g. `regis_procc.php`, `login_process.php`). The default XAMPP credentials (`root`, no password) are currently hardcoded.
