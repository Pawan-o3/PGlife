<?php
// InfinityFree Database Connection

$DB_HOST = "sql100.infinityfree.com";
$DB_USER = "if0_40449149";
$DB_PASS = "Pawan150773";   // replace this
$DB_NAME = "if0_40449149_pglife";

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>
