<?php
echo $stu_id= $_POST['sid'];

echo $stu_name = $_POST['sname'];
echo $stu_address= $_POST['saddress'];
echo $stu_class = $_POST['sclass'];
echo $stu_phone= $_POST['sphone'];

$conn=mysqli_connect("localhost","root","","crud") or die("Error in connection");
$sql="UPDATE student SET sname='$stu_name',saddress='$stu_address',sclass='$stu_class',sphone='$stu_phone' WHERE sid='$stu_id'";
$result=mysqli_query($conn,$sql) or die("Error in query");

//want to go index.php after save data
if($result){
    header("Location: index.php?msg=Data Saved Successfully");
}
else{
    echo "Error in saving data";
}

?>