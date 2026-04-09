# Conventions

## Coding Style
- Formatting is generally unstructured.
- Variable naming is mostly camelCase (`$firstname`, `$middlename`) but often inconsistent.
- No PSR-style standard, autoloader, or namespaces are enforced.

## Output & Interaction
- Instead of using native HTTP headers for redirection (`header('Location: home.php');`), scripts echo out JavaScript snippets `<script>window.location.href='home.php';</script>`.

## Error Handling
- Very rudimentary error handling. The app checks connection state or query results (`if ($result)`) and then echoes basic failure strings directly to the user's screen (`echo "REGISTER Failed: " . mysqli_error($con);`), which leaks exact database errors. No central logging facility exists in the core flow.

## Styling
- HTML uses raw `bgcolor`, inline `<style>` tags at the top of the file, and nested `<center>` tags, deviating from modern CSS separation of concerns.
