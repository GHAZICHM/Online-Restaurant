<?php
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    include_once("config.php");
    include_once("db.php");
    $Name = $_POST['Name'];
    $body = $_POST['body'];
    $count = $_POST['count'];
    $categoryId = $_POST['categoryId'];
    $img = $_FILES["image"]["name"];
    move_uploaded_file( $_FILES["image"]["tmp_name"],  "./img/$img");
    $query = "UPDATE `post` SET `category_id`='$categoryId',`body`='$body',`image`='$img',`count`='$count' WHERE `name`='$Name'";
    $posts = $db->query($query);
    if(isset($posts)){
        echo "<script>alert('Successfully Changed!');</script>";
        include("defineFood.php");
    }     
?>
       
<!DOCTYPE html>
<html lang="en">
<body>
</body>
</html>