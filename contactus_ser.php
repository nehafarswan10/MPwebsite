<?php
$name="";
$email="";
$phone="";
$concern="";

$errors = array();

  // connect to databse registration
$db = mysqli_connect('localhost', 'root', '', 'test');


    //if submit name button clicked
    if (isset($_POST['submit'])) {
      // code...
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $concern = $_POST['concern'];
      // $username = mysql_real_escape_string($_POST['username']);
      // $email = mysql_real_escape_string($_POST['email']);
      // $password_1 = mysql_real_escape_string($_POST['psw']);
    //   $password_2 = $_POST['psw-repeat'];

      if (empty($name)) {
        // code...
        array_push($errors,"Name empty");
      }
      if (empty($email)) {
        array_push($errors,"Email empty");
      }
      if (empty($phone)) {
        array_push($errors,"Phone num empty");
      }
      if (empty($concern)) {
        array_push($errors,"Concern empty");
      }
      //ensure form fields are filled properly
      

      if (count($errors)==0) {
        // code...
        // $password = md5($password_1);
        $sql = "INSERT INTO `queries` (`name`, `phone`, `email`, `query`) VALUES ('$name', '$phone', '$email', '$concern')";
        mysqli_query($db, $sql);
      }
      mysqli_close($db);
    }
      // if no errors, save user to database
        // code...
 //password encrypted before storing in db.
?>
