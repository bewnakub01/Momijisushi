<?php
    session_start();
    include("connect.php");

    $pid = $_POST['hdnUserId'];
    $name = $_POST['txtName'];
    $last = $_POST['txtLastname'];
    $email = $_POST['txtEmail'];
    $address = $_POST['txtAddress'];

    $picture = $_POST['hdnUserPic'];
    if($_FILES["filepic2"]["name"]!=""){
        //ถ้าอัปโหลดไฟล์มาให้เก็บชื่อไฟล์เอาไว้อัปเดตด้วย
        $picture = $_FILES['filepic2']['name'];
        //move file
        move_uploaded_file($_FILES["filepic2"]["tmp_name"],"img/customer/".$_FILES["filepic2"]["name"]);
        $sql = "UPDATE customer SET picture='$picture' WHERE id=$pid";
        $result=$con->query($sql);
    }

    $sql = "UPDATE customer SET firstname='$name', lastname='$last', email='$email', address='$address' WHERE id=$pid";

    $result=$con->query($sql);
    if(!$result){
        echo "Error: ".$con->error;
    }
    else{
        header("Location: index.php");
    }
?>