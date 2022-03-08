<?php
    include "config.php";

    $stu_name = $_POST['name_sport'];
    $sql = "INSERT INTO activite_sportive(activite) VALUES ('{$stu_name}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/crud/adminInterface.php");

    mysqli_close($conn);
?>
