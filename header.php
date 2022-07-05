<?php
    // session_start();
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    include("config.php");
    include("db.php");
    $query = "SELECT * FROM category";
    $categury = $db->query($query);
    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
    }else{
        $name = 'Sign In';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Restaurant</title>

<link rel="stylesheet" href="./css/horiz.css">

<div class="topnav" id="myTopnav">
    <div id="space">
        <div>
            <a href="index.php" class="active">HomePage</a>
        </div>
        <div>
            <div class="dropdown">
                <button class="dropbtn">Category
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href='#d1'>IranianFood</a>
                    <a href='#d2'>Kebab</a>
                    <a href='#d3'>FastFood</a>
                    <a href='#d4'>Salad</a>
                    </div>
                    </div>
                    <a href='Contact.php'>Contact</a>
                    <a href='about.php'>About</a>
                    <a href='login.php' , id='signIn'><?=$name?></a>
                    <a href='javascript:void(0);' class='icon' onclick='myFunction()'>&#9776;</a>
                
        </div>
            
    </div>
</div>

</head>
<body>
    
</body>
</html>
