<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "if0_36525789";
    $password = "santheesh";
    $dbname = "lenscraft";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if (!$conn) {
        die(mysqli_error($conn));
    }
    
 }
 ?>
