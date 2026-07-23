<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $dept = $_POST['dept'];

    $sql = "INSERT INTO info (name, dept)
            VALUES ('$name', '$dept')";

    if (mysqli_query($con, $sql)) {
        echo "Insert Successfully Completed";
    } else {
        echo "Error: " . mysqli_error($con);
    }

} else {
    echo "Please submit the form first.";
}

mysqli_close($con);
?>