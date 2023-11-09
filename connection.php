<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host = 'localhost';
$username = 'root'; // Your MySQL username (often 'root')
$password = 'admin'; // Replace 'your_password' with your actual MySQL password
$database = 'carproject';

try {
    $con = new mysqli($host, $username, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Connection error: ' . $ex->getMessage();
    exit();
}
?>
