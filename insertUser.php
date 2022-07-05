<?php
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    include_once("config.php");
    include_once("db.php");
    $Name = $_POST['Name'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Password = $_POST['Password'];
    $RepeatedPassword = $_POST['RepeatedPassword'];
    if($Password !== $RepeatedPassword){
        echo "<script>alert('Repeated Password is not correct!');</script>";
        include("register.php");
    }
    $query = "INSERT INTO `users` (`id`, `name`, `phone`, `password`) VALUES (NULL,'$Name', '$PhoneNumber', '$Password')";
    $users = $db->query($query);
    if(isset($users)){
        echo "<script>alert('Successfully Added! Please Login!');</script>";
        include("login.php");
    }     
    ?>
       
<!DOCTYPE html>
<html lang="en">
<body>
    
</body>
</html>