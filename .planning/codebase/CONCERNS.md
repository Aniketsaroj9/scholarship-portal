# Concerns

## Critical Vulnerabilities
1. **SQL Injection**: `$_POST` inputs are directly inserted into queries (e.g., `VALUES ('$firstname', ...)`) without sanitation or prepared statements. This is the single highest priority risk in the application.
2. **Hardcoded Secrets**: DB passwords (even blank XAMPP passwords) are hardcoded. A dot-env setup or configuration separation is required.
3. **Information Disclosure**: Direct `mysqli_error()` outputs are echoed to users on failure, revealing table structures.

## Technical Debt
- **UI Architecture**: Using `<iframe src="firstpage.html">` for layout is highly prone to display issues on modern phones. It should be replaced by generic layout mechanisms like PHP 'include' templates and Flexbox/Grid CSS.
- **Duplicate Logic**: `database_connection.php` exists, but several files (like `regis_procc.php` and `login_process.php`) still duplicate connection strings.
- **Data Validation**: None exists on the server-side, allowing incomplete, malicious, or poorly-formatted data (like empty passwords or invalid emails) to be injected right into the database.

## Brittleness
- Relies heavily on local, unstructured execution. Moving this to a production environment (like AWS or a shared host) will break configuration instantly because environments are not dynamic.
