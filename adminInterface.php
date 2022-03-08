<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM (((((student LEFT JOIN studentclass ON student.sclass = studentclass.cid)
                                       LEFT JOIN activite_sportive ON student.ssport = activite_sportive.id)
                                       LEFT JOIN type_art ON student.sart = type_art.id)
                                       LEFT JOIN sexe ON student.ssexe = sexe.id)
                                       LEFT JOIN statut ON student.sstatut = statut.id)";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="5px">
        <thead>
          <th>Id</th>
          <th>Name</th>
          <th>Address</th>
          <th>Drapeau</th>
          <th>Class</th>
          <th>Sport</th>
          <th>Art</th>
          <th>Phone</th>
          <th>Sexe</th>
          <th>Statut</th>
          <th>Permis1</th>
          <th>Permis2</th>
          <th>Permis3</th>
          <th>username</th>
          <th>password</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
              <td><?php echo $row['sid']; ?></td>
              <td><?php echo $row['sname']; ?></td>
              <td><?php echo $row['saddress']; ?></td>
              <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['sdrapeau']); ?>" style="width: 150px;height: 150px;" /></td>
              <td><?php echo $row['cname']; ?></td>
              <td><?php echo $row['activite']; ?></td>
              <td><?php echo $row['art']; ?></td>
              <td><?php echo $row['sphone']; ?></td>
              <td><?php echo $row['sexe']; ?></td>
              <td><?php echo $row['statut']; ?></td>
              <td><?php if ($row['typ_permis1']=="on") echo "Permis A" ; ?></td>
              <td><?php if ($row['typ_permis2']=="on") echo "Permis B" ; ?></td>
              <td><?php if ($row['typ_permis3']=="on") echo "Permis C" ; ?></td>
              <td><?php echo $row['susername']; ?></td>
              <td><?php echo $row['spassword']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>