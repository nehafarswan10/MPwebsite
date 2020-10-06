<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style4.css">
    <title>CC User-Dashboard</title>
</head>
<body>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
    <nav class="navbar background navbackground h-nav-resp" id="home">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="img/cclogo.JPG" alt="logo"></div>
            <li> <a href="index.php">Home</a> </li>
            <!-- <li> <a href="#about">About</a> </li> -->
            <!-- <li> <a href="#services">Services</a> </li> -->
            <!-- <li> <a href="index.php#contact">Contact Us</a> </li> -->
            <li> <a href="#admin"><?php echo htmlspecialchars($_SESSION["username"]); ?></a> </li>

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

    <section class="main">

    <section class="left">
        <!-- <p>left Section</p> -->
        <div class="imgcontainer">
            <img src="img/useravatar.png" alt="Avatar" class="avatar">
        </div>
        <hr>
        <br>
        <a href="userdashboard.php" style="text-decoration: none;"><p class="logout" style="background: yellow; text-align: center; padding: 10px;">Car Compare</p></a>
        <br>
        <hr>
        <!-- <br> -->
        <!-- <p class="logout" style="background: yellow; text-align: center; padding: 10px;">Car Enquiry</p> -->
        <br>
        <!-- <hr> -->
        <br>
        <!-- <p class="logout" style="background: yellow; text-align: center; padding: 10px;">Users</p> -->
        <br>
        <hr>
        <br>
        <p class="logout" style="background: chartreuse; text-align: center; padding: 10px;">Enquires</p>
        <br>
        <hr><br><br><br><br><br><br><hr><br>
        <a href="reset-password.php" style="text-decoration: none;"><p class="logout" style="background: rgb(255, 0, 0); text-align: center; padding: 28px 10px 27px 10px; color: white; border: black;">Reset Password</p></a>
        <br><hr><br>
        <a href="logout.php" style="text-decoration: none;"><p class="logout" style="background: rgb(255, 0, 0); text-align: center; padding: 28px 10px 27px 10px; color: white; border: black;">Log Out</p></a>
    </section>

    <section class="right">
    <?php include('enq_ser.php') ?>
        <form action="userenquires.php" method="post" style="width: 70%;
    margin: 2% 10%;">
        <p>Enquiry details please.</p><br><hr>
        <br>
        <label for="name"><b>Name</b></label><br>
        <input type="text" name="name" required>
        <br>
        <label for="email"><b>Email to get ans to.</b></label><br>
        <input type="email" name="email" required>
        <br>
        <label for="cars"><b>Car(Model)</b></label><br>
        <input type="text" name="cars" required>
        <br>
        <label for="concern"><b>Your Que?</b></label><br>
        <textarea class="form-input" name="concern" id="concern" cols="30" rows="10" placeholder="Enter your Concern" style="resize:none;"></textarea>
        <br>
        <button type="submit" name="submit">Submit</button>
        </form>
    </section>

    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2021 www.carsComparison.com - All rights reserved
        </p>
    </footer>
</body>
</html>
