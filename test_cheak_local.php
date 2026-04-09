<?php
$_POST['check'] = true;
$_POST['cast'] = 'OBC';

// Capture output
ob_start();
include 'cheak.php';
$output = ob_get_clean();

echo "Captured Output Length: " . strlen($output) . "<br>";
if (strpos($output, 'Directorate of technical education') !== false) {
    echo "TEST PASSED: Found expected scholarship.<br>";
} else {
    echo "TEST FAILED: Did not find expected scholarship.<br>";
}
echo "<hr>";
echo $output;
?>
