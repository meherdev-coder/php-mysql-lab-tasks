<?php
// Database Connection
$con = mysqli_connect("localhost", "root", "", "student");

// Check Connection
if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>