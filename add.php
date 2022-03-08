<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" enctype="multipart/form-data" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" required/>
        </div>
        <div class="form-group">
            <label>Drapeau</label>
            <input type="file" name="sdrapeau" accept="image/*" onchange="loadFile(event)" required/>
            <img id="output">
        </div>
		<div class="form-group">
            <label>Sexe</label>
            <select name="ssexe" required>
                <option value="" selected disabled>Select Sexe</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM sexe";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['sexe']; ?> ></option>

              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Statut</label>
            <select name="sstatut" required>
                <option value="" selected disabled>Select Statut</option>
                <?php
                include 'config.php';

                $sql0 = "SELECT * FROM statut";
                $result0 = mysqli_query($conn, $sql0) or die("Query Unsuccessful.");

                while($row0 = mysqli_fetch_assoc($result0)){
                ?>
                <option value="<?php echo $row0['id']; ?>"><?php echo $row0['statut']; ?> ></option>

              <?php } ?>
            </select>
        </div> 
        <div class="form-group">
            <input type=checkbox name='typ_permis1' checked>Permis A
            <input type=checkbox name='typ_permis2' checked>Permis B
            <input type=checkbox name='typ_permis3' checked>Permis C
		</div> 
        <div class="form-group">
            <label>Class</label>
            <select name="class" required>
                <option value="" selected disabled>Select Class</option>
                <?php
                include 'config.php';

                $sql1 = "SELECT * FROM studentclass";
                $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

                while($row1 = mysqli_fetch_assoc($result1)){
                ?>
                <option value="<?php echo $row1['cid']; ?>"><?php echo $row1['cname']; ?> ></option>

              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Sport</label>
            <select name="sport" required>
                <option value="" selected disabled>Select Sport</option>
                <?php
                include 'config.php';

                $sql2 = "SELECT * FROM activite_sportive";
                $result2 = mysqli_query($conn, $sql2) or die("Query Unsuccessful.");

                while($row2 = mysqli_fetch_assoc($result2)){
                ?>
                <option value="<?php echo $row2['id']; ?>"><?php echo $row2['activite']; ?> ></option>

              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Art</label>
            <select name="art" required>
                <option value="" selected disabled>Select Art Type</option>
                <?php
                include 'config.php';

                $sql3 = "SELECT * FROM type_art";
                $result3 = mysqli_query($conn, $sql3) or die("Query Unsuccessful.");

                while($row3 = mysqli_fetch_assoc($result3)){
                ?>
                <option value="<?php echo $row3['id']; ?>"><?php echo $row3['art']; ?> ></option>

              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" required/>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="susername" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="spassword" required>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<script src="script.js"></script>
</body>
</html>