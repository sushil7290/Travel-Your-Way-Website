<?php
   $name = $_POST['Name'];
   $age = $_POST['age'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $Gender = $_POST['Gender'];
   $address = $_POST['address'];

   $localhost = 'localhost';
   $user = 'root';
   $pass = '';
   $database = 'custdata';



   $conn = new mysqli($localhost, $user, $pass,$database);
   if($conn->connect_error){
     die('connection failed: '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into signup(Name,Age,Contact_no,Email,Gender,Address) values(?,?,?,?,?,?)");
    $stmt->bind_param("siisss", $name ,$age, $phone, $email, $Gender, $address);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
    }
?>