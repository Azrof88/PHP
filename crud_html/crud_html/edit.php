<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $conn=mysqli_connect("localhost","root","","crud") or die("Error in connection");
    $stu_id=$_GET['id'];
    $sql="SELECT * FROM student WHERE sid='$stu_id'";
    $result=mysqli_query($conn,$sql) or die("Error in query");
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $sid=$row['sid'];
            $sname=$row['sname'];
            $saddress=$row['saddress'];
            $sclass=$row['sclass'];
            $sphone=$row['sphone'];
    
    
        

    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $sid; ?>" />
          <input type="text" name="sname" value="<?php echo $sname ?>" />
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $saddress ?>" />
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
          echo "<select name='sclass'>";
            $sql1="SELECT * FROM studentclass";
            $result1=mysqli_query($conn,$sql1) or die("Error in query");
            if(mysqli_num_rows($result1)>0){
                while($row1=mysqli_fetch_assoc($result1)){
                    $cid=$row1['cid'];
                    $cname=$row1['cname'];
                    if($sclass==$cid){
                        echo "<option value='$cid' selected>$cname</option>";
                    }
                    else{
                        echo "<option value='$cid'>$cname</option>";
                    }
                }
            }
            echo "</select>";

          ?>

      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $sphone ?>" />
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
    }
    }
    else{
        echo "No record found";
    }
    
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
