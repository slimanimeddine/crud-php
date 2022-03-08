<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Delete"/>
    </form>
<?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $stu_id = $_POST['sid'];

        $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="deletedatafr.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <p><?php echo $row['sname']; ?></p>
        </div>
        <div class="form-group">
            <label>Address</label>
            <p><?php echo $row['saddress']; ?></p>
        </div>
		<div class="form-group">
            <label>username</label>
            <p><?php echo $row['susername']; ?></p>
        </div>	
		<div class="form-group">
            <label>Password</label>
            <p><?php echo $row['spassword']; ?></p>
        </div>	

        <div class="form-group">
            <p> <strong>Proceed to deletion?</strong> </p>
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete"  />
        <input class="submit" type="submit" name="cancelbtn" value="Cancel"  />
    </form>
    <?php
  }
}
}

    ?>
    </div>
</div>
</body>
</html>