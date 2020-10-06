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
        <section class="userloginsection">
            <form action="action_page.php" method="post">
                <h1 class="login">LogIn</h1>
                <div class="imgcontainer">
                <img src="img/useravatar.png" alt="Avatar" class="avatar">
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
        </section>


    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2021 www.carsComparison.com - All rights reserved
        </p>
    </footer>
</body>
</html>
