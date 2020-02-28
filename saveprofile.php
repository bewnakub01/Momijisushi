<?php

    include("connect.php");
    echo ini_get("upload_max_filesize"). "<br>";
    $allowedType=["jpg","jpeg","gif","png","tif","tiff"];
    $fileType=explode("/",$_FILES["filepic"]["type"]);
    $size = $_FILES["filepic"]["size"]/1024/1024;
    if(!in_array($fileType[1],$allowedType)){
        echo "Non-image file is not allowed.";
    }
    else if($size>1.00){
        echo "File size exceeds maximun treshold.";
    }
    else{
        $pid = $_POST['hdnProductId'];
        $name = $_POST['txtName'];
        $last = $_POST['txtLastname'];
        $email = $_POST['txtEmail'];
        $address = $_POST['txtAddress'];

        move_uploaded_file($_FILES["filepic"]["tmp_name"],"img/customer/".$_FILES["filepic"]["name"]);

        $sqlInsert = "INSERT INTO customer (name,lastname,email,address,picture) VALUES('$name','$last','$email','$address','$picture')";

        echo $sqlInsert;
    }

?>