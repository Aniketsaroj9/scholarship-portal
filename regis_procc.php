<?php
require_once 'database_connection.php';

// Retrieve POST variables securely
$firstname = trim($_POST['name'] ?? '');
$middlename = trim($_POST['mid'] ?? '');
$lastname = trim($_POST['last'] ?? '');
$email = trim($_POST['email'] ?? '');
$mobilno = trim($_POST['mobile_number'] ?? '');
$country = $_POST['country'] ?? 'India';
$cast = $_POST['caste'] ?? 'OPEN';
$qualification = $_POST['graduation'] ?? '';
$current = $_POST['qualification'] ?? '';
$state = $_POST['state'] ?? '';
$schol = $_POST['scheme'] ?? '';

// Basic backend validation
if (empty($firstname) || empty($lastname) || empty($email) || empty($mobilno)) {
    die("<h1>Error: Essential fields are missing. Please go back and complete the form.</h1>");
}

$sql = "INSERT INTO `reg` 
    (`firstname`, `middelname`, `lastname`, `email`, `mobilno`, `country`, `cast`, `qualification`, `current`, `state`, `schol`) 
    VALUES 
    (:firstname, :middlename, :lastname, :email, :mobilno, :country, :cast, :qualification, :current, :state, :schol)";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':firstname' => $firstname,
        ':middlename' => $middlename,
        ':lastname' => $lastname,
        ':email' => $email,
        ':mobilno' => $mobilno,
        ':country' => $country,
        ':cast' => $cast,
        ':qualification' => $qualification,
        ':current' => $current,
        ':state' => $state,
        ':schol' => $schol
    ]);

    // Debug Logging (safe)
    file_put_contents('debug_log.txt', "REGIS_PROCC: Success for user email: $email\n", FILE_APPEND);

    echo "<script type='text/javascript'>
        alert('REGISTER SUCCESSFULLY');
        window.location.href='home.php';
    </script>";

} catch (PDOException $e) {
    // Standardized secure error output
    file_put_contents('debug_log.txt', "REGIS_PROCC: Error inserting data: " . $e->getMessage() . "\n", FILE_APPEND);
    echo "<h1>Registration Failed</h1>";
    echo "<p>Please ensure all details are correct. If the issue persists, contact support.</p>";
}
?>