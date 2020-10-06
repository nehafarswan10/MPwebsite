<?php include('add.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style5.css">
    <title>CC Admin-Dashboard</title>
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
            <li> <a>Admin</a> </li>

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
            <img src="img/avatar12.png" alt="Avatar" class="avatar">
        </div>
        <hr>
        <br>
        <p class="logout" style="background: chartreuse; text-align: center; padding: 10px;">Add cars</p>
        <br>
        <hr>
        <br>
        <a href="carsdatabase.php" style="text-decoration: none;"><p class="logout" style="background: yellow; text-align: center; padding: 10px;">Cars Database</p></a>
        <br>
        <hr>
        <br>
        <a href="usersdatabase.php" style="text-decoration: none;"><p class="logout" style="background: yellow; text-align: center; padding: 10px;">Users</p></a>
        <br>
        <hr>
        <br>
        <a href="enquires.php" style="text-decoration: none;"><p class="logout" style="background: yellow; text-align: center; padding: 10px;">Enquires</p></a>
        <br>
        <hr>
        <br><br><br><br><br><br><br><hr><br>
        <p class="logout" style="background: rgb(255, 0, 0); text-align: center; padding: 28px 10px 27px 10px; color: white; border: black;">Log Out</p>
    </section>

    <section class="right">
        <!-- <p style="background: greenyellow;">Right Section</p> -->
        <!-- <p style="background: greenyellow;">Right Section</p> -->
        <form action="" method="post" enctype="multipart/form-data">
        <p class="cardetails">Car Details</p>
        <br>
        <input type="file" 
                   name="uploadfile" 
                   value="" /> 

        <button type="submit" name="addcar">ADD CAR</button>
        </form>
        <img src="image/<?php echo $result ?>">
    </section>

    </section>
    <!-- <section class="adminloginsection">
        <form action="action_page.php" method="post">
            <div class="imgcontainer">
            <img src="img/avatar12.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" class="usercred" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" class="usercred" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </div>

            <div class="container2">
                <a href="index.html" class="a-cancelbtn">
                    <button type="button" class="cancelbtn">Cancel</button>
                </a>
            <span class="psw"><a href="#">Forgot password?</a></span>
            </div>
        </form>
    </section>-->

    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2021 www.carsComparison.com - All rights reserved
        </p>
    </footer>
</body>
</html>
