<?php
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";
    $image = $_FILES['image'];
    $image_name = $image['name'];
    echo $image_name."<br>";
    $image_size = $image['size'];
    $image_tmp_name = $image['tmp_name'];
    $image_type = $image['type'];
    $image_error = $image['error'];
    $image_ext = explode('.', $image_name);
    $image_ext = strtolower(end($image_ext));
    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
    if(move_uploaded_file($image_tmp_name, 'images/'.$image_name)){
        echo "File uploaded successfully";
    }else{
        echo "File upload failed";
    }
    if(in_array($image_ext, $allowed_ext)){
        echo "File type is allowed";
    }else{
        echo "File type is not allowed";
    }
    if($image_error == 0){
        echo "No error";    
    }else{
        echo "Error";
    }
    echo "<br><br>";
    echo "Image name: ".$image_name."<br>";
    echo "Image size: ".$image_size."<br>";
    echo "Image tmp name: ".$image_tmp_name."<br>";
    echo "Image type: ".$image_type."<br>";
    echo "Image error: ".$image_error."<br>";
    
}


?>





<html>
<head>
    <title>File Upload</title>
</head>
<body>
<form action='' method='post' enctype='multipart/form-data'>
    <input type='file' name='image'/><br><br>
    <input type='submit' />
</form>
</body>
</html>