# Integrations

## External Services
There are no active external API integrations or SDKs present in the repository.

- **DigiLocker:** Mentioned as a hyperlink/logo inside the UI (`index.html`) linking to `https://www.digilocker.gov.in/` but not integrated to authenticate or pull external data.
- **Authentication:** Custom homegrown login system (`login_process.php`). Does not use external providers like OAuth (Google, GitHub, etc.).

## Database
- Integrates directly with a local MySQL instance using `mysqli_connect()`. All queries execute directly without an ORM or query builder.
