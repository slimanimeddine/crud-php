<?php
    include "header2.php";

    if(isset($_POST['logout'])){

        session_start();
        session_destroy();
        
        header("Location: http://localhost/crud/index.php");
        
        mysqli_close($conn);
        
    }
?>

<div id="main-content">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" class="post-form" method="post">
        <input type="submit" class="submit" name="logout" value="Logout">
    </form>
</div>