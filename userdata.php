<?php
   $name = $_POST['user'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $comment = $_POST['comment'];

   $localhost = 'localhost';
   $user = 'root';
   $pass = '';
   $database = 'custdata';



   $conn = new mysqli($localhost, $user, $pass,$database);
   if($conn->connect_error){
     die('connection failed: '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into custtdata(Name,Email,Phone_no,Comment) values(?,?,?,?)");
    $stmt->bind_param("ssis", $name , $email, $mobile, $comment);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
    }
?>