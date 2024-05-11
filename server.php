<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lenscraft";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if (!$conn) {
        die(mysqli_error($conn));
    }
    
 }
 ?>