<?php
include ('authentication.php');
include ('config/dbcon.php'); ?>

<?php 


if(isset($_POST['logout_btn'])){



    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
 
 
    $_SESSION['status'] = "LOGGED OUT SUCCESSFULLY";
    $_SESSION['status_code'] = "success";
    header('Location: login.php');
 exit();
 }

?>