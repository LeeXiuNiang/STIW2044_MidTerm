<?php
$servername = "localhost";
$username   = "crimsonw_272033_myshopadmin";
$password   = "CakM%i})?6eU";
$dbname     = "crimsonw_272033_myshopdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>