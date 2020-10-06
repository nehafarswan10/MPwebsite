<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <title>CC User SignUp/LogIn</title>
</head>
<body>
    <nav class="navbar background navbackground h-nav-resp" id="home">
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

    <div class="main">
        <section class="usersignupsection">
          <?php include('server.php'); ?>
            <form action="userlogin.php" method="post">
                <div class="container">
                    <h1>Sign Up</h1><br>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <!-- display errors form server php file -->
                    <?php include('errors.php') ?>
                    <br>
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter User Name" name="username" class="usersignupcred" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" class="usersignupcred" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" class="usersignupcred" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" class="usersignupcred" required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                </div>

                <div class="container2">
                    <a href="#" class="a-signup">
                        <button type="submit" class="signupbtn" name="signup">SignUp</button>
                    </a>
                </div>
            </form>
        </section>
    </div>

    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2021 www.carsComparison.com - All rights reserved
        </p>
    </footer>
</body>
</html>
