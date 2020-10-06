<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: admindashboard.php");
  exit;
}

// Include config file
require_once "configadmin.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: admindashboard.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>CC AdminLogin</title>
</head>
<body>
    <nav class="navbar background navbackground h-nav-resp" id="home">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="img/cclogo.JPG" alt="logo"></div>
            <li> <a href="index.php">Home</a> </li>
            <li> <a href="index.php#about">About</a> </li>
            <li> <a href="index.php#services">Services</a> </li>
            <li> <a href="index.php#contact">Contact Us</a> </li>

        </ul>
        <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <section class="adminloginsection">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="imgcontainer">
            <img src="img/avatar12.png" alt="Avatar" class="avatar">
            </div>

            <div class="container <?php echo (!empty($username_err)) ? 'has-error' : ''; ?> <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label for="uname"><b>Username</b></label>
            <input type="text" name="username" class="usercred" value="<?php echo $username; ?>">
            <br>
            <p><?php echo $username_err; ?></p><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" name="password" class="usercred" >
            <br>
            <p><?php echo $password_err; ?></p><br>

            <button type="submit" value="Login">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </div>

            <div class="container2">
                <a href="index.php" class="a-cancelbtn">
                    <button type="button" class="cancelbtn">Cancel</button>
                </a>
            <span class="psw"><a href="#">Forgot password?</a></span>
            </div>
        </form>
    </section>

    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2021 www.carsComparison.com - All rights reserved
        </p>
    </footer>
</body>
</html>
