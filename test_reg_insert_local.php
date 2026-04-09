<?php
// Mock POST data
$_POST['name'] = 'TestFirst';
$_POST['mid'] = 'TestMid';
$_POST['last'] = 'TestLast';
$_POST['email'] = 'test@example.com';
$_POST['mobile_number'] = '1234567890';
$_POST['country'] = 'India';
$_POST['caste'] = 'OPEN';
$_POST['graduation'] = 'Graduate';
$_POST['qualification'] = 'Post Graduate'; // Variable name mismatch in original form? form: name="qualification" -> value="post_graduation"
$_POST['state'] = 'Maharashtra';
$_POST['scheme'] = 'Test Scholarship';

// Buffer output to prevent header redirection issues
ob_start();
include 'regis_procc.php';
$output = ob_get_clean();

echo "Output from regis_procc.php:\n";
echo $output . "\n";

// Check if inserted
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query("SELECT * FROM reg WHERE firstname='TestFirst'");
if ($result->num_rows > 0) {
    echo "SUCCESS: Test data found in reg table.\n";
    $row = $result->fetch_assoc();
    print_r($row);
} else {
    echo "FAILURE: Test data NOT found in reg table.\n";
    echo "Error: " . $conn->error . "\n";
}
$conn->close();
?>
