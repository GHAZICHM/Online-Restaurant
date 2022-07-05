<?php
    session_start();
    if(isset($_SESSION['name'])){
        if($_SESSION['name'] == 'Admin'){
            include('indexAdmin.php');
        }else{
            include('indexUser.php');
        }
    }else{
        include('indexUser.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<body>
    
</body>
</html>