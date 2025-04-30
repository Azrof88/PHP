<?php
echo $stu_id=$_GET['id'];
include 'config.php';

    $sql="DELETE FROM student WHERE sid={$stu_id}";
    $result=mysqli_query($conn,$sql) or die("Error in query");

    header("Location: index.php?msg=Data Saved Successfully");


    mysqli_close($conn);


?>