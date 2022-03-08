<?php
    include "config.php";
    
    $stu_name = $_POST['sname'];
    $stu_address = $_POST['saddress'];
    $image = $_FILES['sdrapeau']['tmp_name'];
    $drapeau = addslashes(file_get_contents($image)); 
    $stu_class = $_POST['class'];
    $stu_sport = $_POST["sport"];
    $stu_art = $_POST["art"];
    $stu_phone = $_POST['sphone'];
    $stu_sexe = $_POST['ssexe'];
    $stu_statut = $_POST['sstatut'];
    $stu_p1 = $_POST['typ_permis1'];
    $stu_p2 = $_POST['typ_permis2'];
    $stu_p3 = $_POST['typ_permis3'];
    $stu_username = $_POST["susername"];
    $stu_password = $_POST["spassword"];
    
    $sql = "INSERT INTO student(sname,saddress,sdrapeau,sclass,ssport,sart,sphone,ssexe,sstatut,typ_permis1,typ_permis2,typ_permis3,susername,spassword) VALUES ('{$stu_name}','{$stu_address}','{$drapeau}','{$stu_class}','{$stu_sport}','{$stu_art}','{$stu_phone}','{$stu_sexe}','{$stu_statut}','{$stu_p1}','{$stu_p2}','{$stu_p3}','{$stu_username}','{$stu_password}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/crud/adminInterface.php");

    mysqli_close($conn);
?>
