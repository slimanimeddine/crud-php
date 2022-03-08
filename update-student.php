    <?php
        include 'header2.php';
        session_start();
    ?>
    <div id="main-content">
        <h2>Edit Record</h2>
        <form class="post-form" action="update-user.php" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" name="sid"  value="<?php echo $_SESSION['sid']; ?>" />
                <input type="text" name="sname" value="<?php echo $_SESSION['sname']; ?>" />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="saddress" value="<?php echo $_SESSION['saddress']; ?>" />
            </div>
            <div class="form-group">
                <label>Class</label>
                <?php
                include "config.php";
                $sql1 = "SELECT * FROM studentclass";
                $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

                if(mysqli_num_rows($result1) > 0)  {
                    echo '<select name="sclass">';
                    while($row1 = mysqli_fetch_assoc($result1)){
                    if($_SESSION['sclass'] == $row1['cid']){
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                    echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                    }
                echo "</select>";
                }
                ?>
            </div>
            <div class="form-group">
                <label>Sport</label>
                <?php
                $sql1 = "SELECT * FROM activite_sportive";
                $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

                if(mysqli_num_rows($result1) > 0)  {
                    echo '<select name="ssport">';
                    while($row1 = mysqli_fetch_assoc($result1)){
                    if($_SESSION['ssport'] == $row1['id']){
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                    echo  "<option {$select} value='{$row1['id']}'>{$row1['activite']}</option>";
                    }
                echo "</select>";
                }
                ?>
            </div>
            <div class="form-group">
                <label>Type Art</label>
                <?php
                $sql1 = "SELECT * FROM type_art";
                $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

                if(mysqli_num_rows($result1) > 0)  {
                    echo '<select name="sart">';
                    while($row1 = mysqli_fetch_assoc($result1)){
                    if($_SESSION['sart'] == $row1['id']){
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                    echo  "<option {$select} value='{$row1['id']}'>{$row1['art']}</option>";
                    }
                    echo "</select>";
                }
                ?>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="sphone" value="<?php echo $_SESSION['sphone']; ?>" />
            </div>
            <div class="form-group">
                <label>Sexe</label>
                <?php
                $sql1 = "SELECT * FROM sexe";
                $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

                if(mysqli_num_rows($result1) > 0)  {
                    echo '<select name="ssexe">';
                    while($row1 = mysqli_fetch_assoc($result1)){
                    if($_SESSION['ssexe'] == $row1['id']){
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                    echo  "<option {$select} value='{$row1['id']}'>{$row1['sexe']}</option>";
                    }
                    echo "</select>";
                }
                ?>
            </div>
            <div class="form-group">
                <label>Statut</label>
                <?php
                $sql1 = "SELECT * FROM statut";
                $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

                if(mysqli_num_rows($result1) > 0)  {
                    echo '<select name="sstatut">';
                    while($row1 = mysqli_fetch_assoc($result1)){
                    if($_SESSION['sstatut'] == $row1['id']){
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                    echo  "<option {$select} value='{$row1['id']}'>{$row1['statut']}</option>";
                    }
                    echo "</select>";
                }
                ?>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="susername" value="<?php echo $_SESSION['susername']; ?>" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="spassword" value="<?php echo $_SESSION['spassword']; ?>" />
            </div>
            <input class="submit" type="submit" value="Update"  />
        </form>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
