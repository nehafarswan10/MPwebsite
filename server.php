<?php
$username="";
$email="";
$password_1="";
$password_2="";
$password="";
$errors = array();

  // connect to databse registration
$db = mysqli_connect('localhost', 'root', '', 'test');


    //if signup name button clicked
    if (isset($_POST['signup'])) {
      // code...
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password_1 = $_POST['psw'];
      // $username = mysql_real_escape_string($_POST['username']);
      // $email = mysql_real_escape_string($_POST['email']);
      // $password_1 = mysql_real_escape_string($_POST['psw']);
      $password_2 = $_POST['psw-repeat'];

      if (empty($username)) {
        // code...
        array_push($errors,"Username empty");
      }
      if (empty($email)) {
        array_push($errors,"Email empty");
      }
      if (empty($password_1)) {
        array_push($errors,"Password empty");
      }
      //ensure form fields are filled properly
      if ($password_1 != $password_2) {
        // code...
        array_push($errors,"Passwords do not match.");
      }

      if (count($errors)==0) {
        // code...
        $password = md5($password_1);
        $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
      }
      mysqli_close($db);
    }
      // if no errors, save user to database
        // code...
 //password encrypted before storing in db.
?>
