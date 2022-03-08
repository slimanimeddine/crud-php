<?php
    include 'header.php';
    if(isset($_POST['deletebtn'])){

        include "config.php";
        $stu_id = $_POST['sid'];
        $sql = "DELETE FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        
        header("Location: http://localhost/crud/adminInterface.php");
        
        mysqli_close($conn);
        
    } elseif(isset($_POST['cancelbtn'])){
        header("Location: http://localhost/crud/adminInterface.php");
    }
?>