<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Car Compare</title>
</head>
<body>
    <nav class="navbar background navbackground h-nav-resp" id="home">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="img/cclogo.JPG" alt="logo"></div>
            <li> <a href="#home">Home</a> </li>
            <li> <a href="#about">About</a> </li>
            <li> <a href="#services">Services</a> </li>
            <li> <a href="#contact">Contact Us</a> </li>

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

    <section class="background first-section">
        <div class="box-main">
            <div class="first-half">

                <p class="text-big">Compare from all cars.</p><br>
                <p class="text-small">Provides you a platform to select your DREAM CAR.</p>
                <br><br>
                <div class="buttons">
                    <a href="adminlogin.php"><button class="btn">Admin LogIn</button></a>
                    <!-- <a href="admindashboard.php"><button class="btn">Admin Dashboard</button></a> -->
                    <a href="login.php"><button class="btn">User LogIn</button></a>
                    <a href="register.php"><button class="btn">User SignUp</button></a>
                </div>
            </div>

            <div class="second-half">
                <img src="img/cclogo-mini.png" alt="mini logo">
            </div>
        </div>
    </section>

    <section class="section" id="about">
        <div class="paras">
        <p class="sectionTag text-big">Confused? Easy way to compare cars.</p>
        <p class="sectionSubTag text-small">CarComparison.com is India's leading car search venture that helps users buy cars that are right for them.</p></div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/1200x900/?lamborghini,car" alt="car image" class="imgFluid">
        </div>
    </section>

    <hr>

    <section class="section secleft" id="services">
        <div class="paras">
        <p class="sectionTag text-big">Not Sure? Let us help you.</p>
        <p class="sectionSubTag text-small">Our website carry rich automotive content such as expert reviews, detailed specs and prices, comparisons as well as videos and pictures of all car brands and models available in India.
        </p></div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/1200x900/?supercars,mustang,audi" alt="car image" class="imgFluid">
        </div>
    </section>

    <hr>

    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">Our Mission</p>
        <p class="sectionSubTag text-small">Our mission is to bring joy and delight into car buying and ownership. To achieve this goal, we aim to empower Indian consumers to make informed car buying and ownership decisions with exhaustive and un-biased information on cars through our expert reviews, owner reviews, detailed specifications and comparisons.</p></div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/1200x900/?cars,supercars,mclaren" alt="car image" class="imgFluid">
        </div>
    </section>

    <hr>

    <section class="contactus" id="contact">
    <?php include('contactus_ser.php') ?>
        <h2 class="text-center">Contact Us</h2>
        <form class="form" action="index.php" method="post">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter your Name" required>
            <input class="form-input" type="int" name="phone" id="phone" placeholder="Enter your Phone" required>
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter your email" required>
            <textarea class="form-input" name="concern" id="concern" cols="30" rows="10" placeholder="Enter your Concern"></textarea>
            <button class="btn btn-dark" type="submit" name="submit">Submit</button>
        </form>
    </section>

    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2021 www.carsComparison.com - All rights reserved
        </p>
    </footer>
    <script src="js/resp.js"></script>
</body>
</html>
