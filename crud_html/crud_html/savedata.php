<?php

echo $stu_name = $_POST['sname'];
echo $stu_address= $_POST['saddress'];
echo $stu_class = $_POST['class'];
echo $stu_phone= $_POST['sphone'];

$conn=mysqli_connect("localhost","root","","crud") or die("Error in connection");
$sql="INSERT INTO student (sname,saddress,sclass,sphone) VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone')";
$result=mysqli_query($conn,$sql) or die("Error in query");

//want to go index.php after save data
if($result){
    header("Location: index.php?msg=Data Saved Successfully");
}
else{
    echo "Error in saving data";
}

?>