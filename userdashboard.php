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
            <li> <a href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a> </li>

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

    <section class="left" style="position:fixed;">
        <!-- <p>left Section</p> -->
        <div class="imgcontainer">
            <img src="img/useravatar.png" alt="Avatar" class="avatar">
        </div>
        <hr>
        <br>
        <p class="logout" style="background: chartreuse; text-align: center; padding: 10px;">Car Compare</p>
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
        <a href="userenquires.php" style="text-decoration: none;"><p class="logout" style="background: yellow; text-align: center; padding: 10px;">Enquires</p></a>
        <br>
        <hr><br><br><br><br><br><br><hr><br>
        <a href="reset-password.php" style="text-decoration: none;"><p class="logout" style="background: rgb(255, 0, 0); text-align: center; padding: 28px 10px 27px 10px; color: white; border: black;">Reset Password</p></a>
        <br><hr><br>
        <a href="logout.php" style="text-decoration: none;"><p class="logout" style="background: rgb(255, 0, 0); text-align: center; padding: 28px 10px 27px 10px; color: white; border: black;">Log Out</p></a>
    </section>
    

    <section class="right" style="display:flex; margin: 0 0 10% 10%;background: white;">
        <!-- <h1>Hi,#D1C4E9 <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome!</h1> -->
        <!-- <p style="background: greenyellow;">Right Section</p> -->
        <!-- <p style="background: greenyellow;">Right Section</p> -->
        <div class="one" style="margin: 10px 10px 10px 80px;
    padding: 5px;
    background: white;">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";
            

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            ?>

            <form action="" method="POST">
            Choose Carname <br><hr><br>
            <select name="carname">
            <?php
            $sql = "SELECT * FROM cars";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<option>".$row['carname']."</option>";
            }
            ?>
            </select>
            <button type="submit">submit</button>
            </form>



            <?php
            if(isset($_POST['carname'])){
                // code here 
                $sql = "SELECT * FROM cars WHERE carname='".$_POST['carname']."'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<img width='250' height='250' src='image/".$row["filename"]."'>";
                echo "<br><br><b style='font-size: 24px;''> - Car Model: " . $row["carname"]. "</b> <br>";
                echo "<br> - Top Speed: " . $row["topspeed"]. "<br>";
                echo "<br> - Engine Type: " . $row["enginetype"]. " <br>";
                echo "<br> - Max Power rpm: " . $row["maxpowerrpm"]. " <br>";
                echo "<br> - Max Torque: " . $row["maxtorque"]. " <br>";
                echo "<br> - No of Cylinders: " . $row["noofcylinder"]. " <br>";
                echo "<br> - Valves per Cylinder: " . $row["valvespercylinder"]. " <br>";
                echo "<br> - Turbo Charger: " . $row["turbocharger"]. " <br>";
                echo "<br> - Transmission Type: " . $row["transmissiontype"]. " <br>";
                echo "<br> - Gear Box: " . $row["gearbox"]. " <br>";
                echo "<br> - Drive Type: " . $row["drivetype"]. " <br>";
                echo "<br> - 0-100 kmph: " . $row["0100"]. " <br>";
                echo "<br> - Mileage: " . $row["mileage"]. " <br>";
                echo "<br> - Fuel Tank Capacity: " . $row["fueltankcapacity"]. " <br>";
                echo "<br> - Steering Type: " . $row["steeringtype"]. " <br>";
                echo "<br> - Turning Radius: " . $row["turningradius"]. " <br>";
                echo "<br> - No of Airbags: " . $row["noofairbags"]. " <br>";
                echo "<br> - Length: " . $row["length"]. " <br>";
                echo "<br> - Width: " . $row["width"]. " <br>";
                echo "<br> - Seating Capacity: " . $row["seatingcapacity"]. " <br>";
                echo "<br> - Bootspace: " . $row["bootspace"]. " <br>";
                echo "<br> - No of speaker: " . $row["noofspeaker"]. " <br>";
                echo "<br> - Power Stearing: " . $row["powerstearing"]. " <br>";
                echo "<br> - Power Windows Front: " . $row["powerwindowsfront"]. " <br>";
                echo "<br> - Power Windows Rear: " . $row["powerwindowsrear"]. " <br>";
                echo "<br> - Leather Seats: " . $row["leatherseats"]. " <br>";
                echo "<br> - ABS System: " . $row["abssystem"]. " <br>";
                echo "<br> - Brake Assist: " . $row["brakeassist"]. " <br>";
                echo "<br> - Central Locking: " . $row["centrallocking"]. " <br>";
                echo "<br> - Power Door Lock: " . $row["powerdoorlock"]. " <br>";
                echo "<br> - Radio: " . $row["radio"]. " <br>";
                echo "<br> - Phone Connectivity: " . $row["phoneconnectivity"]. " <br>";
                echo "<br><b> - On-Road Price: ₹ " . $row["onroadprice"]. "</b> <br>";

            }
            } else {
                
            }
	
               }
            
            mysqli_close($conn);
            ?>
        </div>
        
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
