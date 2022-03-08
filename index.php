<?php
    include "header0.php";
?>
<div id="main-content">
    <h2>Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="post-form">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <input type="submit" name="submit" value="Login" class="submit">
    </form>
</div>

</div>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){ 
        include "config.php";  
        $usr = $_POST['username']; 
        $pas = $_POST['password']; 
        $sql = "SELECT * FROM student WHERE susername='$usr' AND spassword='$pas' LIMIT 1"; 
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        if(mysqli_num_rows($result) == 1){ 
            $row = mysqli_fetch_array($result);
            session_start(); 
            $_SESSION['sid'] = $row['sid'];
            $_SESSION['sname'] = $row['sname'];
            $_SESSION['saddress'] = $row['saddress'];
            $_SESSION['sdrapeau'] = $row['sdrapeau'];
            $_SESSION['sclass'] = $row['sclass'];
            $_SESSION['ssport'] = $row['ssport'];
            $_SESSION['sart'] = $row['sart'];
            $_SESSION['sphone'] = $row['sphone'];
            $_SESSION['ssexe'] = $row['ssexe'];
            $_SESSION['sstatut'] = $row['sstatut'];
            $_SESSION['typ_permis1'] = $row['typ_permis1'];
            $_SESSION['typ_permis2'] = $row['typ_permis2'];
            $_SESSION['typ_permis3'] = $row['typ_permis3'];
            $_SESSION['susername'] = $row['susername']; 
            $_SESSION['spassword'] = $row['spassword']; 
            $_SESSION['logged'] = TRUE;
            if($row['susername'] == 'admin' && $row['spassword'] == 'admin') { 
                header("Location: adminInterface.php");
                exit;
            } else {
                header("Location: forUsers.php"); 
                exit;
            }
        } else if(mysqli_num_rows($result) == 0) {
            echo '<script>alert("Student doesn\'t exist");</script>';
        }
    } 
?> 