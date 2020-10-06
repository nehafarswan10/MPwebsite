<?php
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    // echo $username.$password;
            if($username == "prafulkr" && $password == "1234"){
                // echo "Username/Password incorrect!";
                header('Location: admindashboard.php');
            }else{
                // echo "Wrong cred.";
                header('Location: adminlogin.php');
            }
?>