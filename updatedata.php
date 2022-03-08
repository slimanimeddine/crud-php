<?php
    include 'config.php';

    $stu_id = $_POST['sid'];
    $stu_name = $_POST['sname'];
    $stu_address = $_POST['saddress'];
    $stu_class = $_POST['sclass'];
    $stu_art = $_POST["sart"];
    $stu_sport = $_POST["ssport"];
    $stu_phone = $_POST['sphone'];
    $stu_sexe = $_POST['ssexe'];
    $stu_statut = $_POST['sstatut'];
    $stu_username = $_POST["susername"];
    $stu_password = $_POST["spassword"];

    $sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', ssport = '{$stu_sport}', sart = '{$stu_art}', sphone = '{$stu_phone}', ssexe = '{$stu_sexe}', sstatut= '{$stu_statut}', susername = '{$stu_username}', spassword = '{$stu_password}' WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/crud/adminInterface.php");

    mysqli_close($conn);
?>
