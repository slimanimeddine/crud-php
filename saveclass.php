<?php
    include "config.php";

    $stu_name = $_POST['sname_class'];
    $sql = "INSERT INTO studentclass(cname) VALUES ('{$stu_name}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/crud/adminInterface.php");

    mysqli_close($conn);
?>
