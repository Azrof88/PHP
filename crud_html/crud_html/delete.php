<?php
include 'header.php';

if(isset($_POST['deletebtn'])) {
    // Get the student ID from the form
  $stu_id=$_POST['sid'];
 include 'config.php';
 
     $sql="DELETE FROM student WHERE sid={$stu_id}";
     $result=mysqli_query($conn,$sql) or die("Error in query");
 
     header("Location: index.php?msg=Data Saved Successfully");
 
 
     mysqli_close($conn);
}
else {
    echo "Error in query";
}




?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
