<?php 

    $servername = "localhost";
    $username = "root";
    $password = "vertrigo";
    $dbase = "lms_db";

    $conn = mysqli_connect($servername, $username, $password,$dbase);

    if (!$conn) {
        die("Connection failed: contact the db administrator" . $conn->connect_error);
    }


 ?>