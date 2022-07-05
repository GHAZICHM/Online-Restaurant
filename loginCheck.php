<?php
    session_start();
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    include_once("config.php");
    include_once("db.php");
    $phone = $_POST['PhoneNumber'];
    $pass = $_POST['Password'];
    if($pass == "Admin" and $phone == "09123"){
        include("indexAdmin.php");
        $_SESSION['name'] = 'Admin';
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script>
            $("#signIn").html("Hi Admin!");
            alert(\'Welcome!\');
        </script>';
    }else{
        $check = 0;
        $query = "SELECT * FROM users";
        $users = $db->query($query);
        foreach($users as $user){
            if($user['phone'] == $phone and $user['password'] == $pass){
                $check = 1;
                include("indexUser.php");
                $name = $user['name'];
                $_SESSION['name'] = $name;
                echo "<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
                <script>
                    $('#signIn').html('Hi $name !!!');
                    alert('Welcome!');
                </script>";
                
            }
        }
        if($check == 0){
            include("login.php");
            echo "<script>
                alert('try again!');
            </script>
                ";
        }
        
    }

        
    ?>
       
<!DOCTYPE html>
<html lang="en">
<body>
    
</body>
</html>