<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlogin.php");
    exit;
}
// print_r($_POST);
if(isset($_POST['car-name'])){
	
    // print_r($_FILES);
	$tempPath = $_FILES['uploadfile']['tmp_name'];

    $destination = "image/".$_FILES['uploadfile']['name'];
    move_uploaded_file($tempPath,$destination);
    
    $carname=$_POST['car-name'];
    $topspeed = $_POST['top-speed'];
    $enginetype = $_POST['engine-type'];
    $maxpowerrpm = $_POST['max-power-rpm'];
    $maxtorque = $_POST['max-torque'];
    $noofcylinder = $_POST['no-of-cylinder'];
    $valvespercylinder = $_POST['valves-per-cylinder'];
    $turbocharger = $_POST['turbo-charger'];
    $transmissiontype = $_POST['transmission-type'];
    $gearbox = $_POST['gear-box'];
    $drivetype = $_POST['drive-type'];
    $zerohun = $_POST['0-100'];
    $mileage = $_POST['mileage'];
    $fueltankcapacity = $_POST['fuel-tank-capacity'];
    $steeringtype = $_POST['steering-type'];
    $turningradius = $_POST['turning-radius'];
    $noofairbags = $_POST['no-of-airbags'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $seatingcapacity = $_POST['seating-capacity'];
    $bootspace = $_POST['boot-space'];
    $noofspeaker = $_POST['no-of-speaker'];
    $powerstearing = $_POST['power-stearing'];
    $powerwindowsfront = $_POST['power-windows-front'];
    $powerwindowsrear = $_POST['power-windows-rear'];
    $leatherseats = $_POST['leather-seats'];
    $abssystem = $_POST['abs-system'];
    $brakeassist = $_POST['brake-assist'];
    $centrallocking = $_POST['central-locking'];
    $powerdoorlock = $_POST['power-door-lock'];
    $radio = $_POST['radio'];
    $phoneconnectivity = $_POST['phone-connectivity'];
    $onroadprice = $_POST['on-road-price'];
    $addcar = $_POST['addcar'];
    
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

            
            $sql = "INSERT INTO `cars` ( `filename`, `carname`, `topspeed`, `enginetype`, `maxpowerrpm`, `maxtorque`, `noofcylinder`, `valvespercylinder`, `turbocharger`, `transmissiontype`, `gearbox`, `drivetype`, `0100`, `mileage`, `fueltankcapacity`, `steeringtype`, `turningradius`, `noofairbags`, `length`, `width`, `seatingcapacity`, `bootspace`, `noofspeaker`, `powerstearing`, `powerwindowsfront`, `powerwindowsrear`, `leatherseats`, `abssystem`, `brakeassist`, `centrallocking`, `powerdoorlock`, `radio`, `phoneconnectivity`, `onroadprice`) 
            VALUES 
            ( '".$_FILES['uploadfile']['name']."','".$carname."','".$topspeed."','".$enginetype."','".$maxpowerrpm."','". $maxtorque."','".$noofcylinder."','".$valvespercylinder."','".$turbocharger."','".$transmissiontype."','".$gearbox."','".$drivetype."','".$zerohun."','".$mileage."','".$fueltankcapacity."','".$steeringtype."','".$turningradius."','".$noofairbags."','".$length."','".$width."','".$seatingcapacity."','".$bootspace."','".$noofspeaker."','".$powerstearing."','".$powerwindowsfront."','".$powerwindowsrear."','".$leatherseats."','".$abssystem."','".$brakeassist."','".$centrallocking."','".$powerdoorlock."','".$radio."','".$phoneconnectivity."','".$onroadprice."');";


            // $sql = "INSERT INTO `cars` ( `filename`, `carname`, `topspeed`, `enginetype`, `maxpowerrpm`, `maxtorque`, `noofcylinder`, `valvespercylinder`, `turbocharger`, `transmissiontype`, `gearbox`, `drivetype`, `0100`, `mileage`, `fueltankcapacity`, `steeringtype`, `turningradius`, `noofairbags`, `length`, `width`, `seatingcapacity`, `bootspace`, `noofspeaker`, `powerstearing`, `powerwindowsfront`, `powerwindowsrear`, `leatherseats`, `abssystem`, `brakeassist`, `centrallocking`, `powerdoorlock`, `radio`, `phoneconnectivity`, `onroadprice`) 
            // VALUES 
            // ( '".$_FILES['uploadfile']['name']."', '".$carname."', '".$topspeed."', '".$enginetype."', '".$maxpowerrpm."', '". $maxtorque."', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h');";

            // $sql = "INSERT INTO `cars` (`filename`, `carname`, `topspeed`, `enginetype`, `maxpowerrpm`, `maxtorque`, `noofcylinder`, `valvespercylinder`, `turbocharger`, `transmissiontype`, `gearbox`, `drivetype`, `0100`, `mileage`, `fueltankcapacity`, `steeringtype`, `turningradius`, `noofairbags`, `length`, `width`, `seatingcapacity`, `bootspace`, `noofspeaker`, `powerstearing`, `powerwindowsfront`, `powerwindowsrear`, `leatherseats`, `abssystem`, `brakeassist`, `centrallocking`, `powerdoorlock`, `radio`, `phoneconnectivity`, `onroadprice`) 
                                // VALUES (".$carname.",".$carname.",".$topspeed.",".$enginetype.",".$maxpowerrpm.",". $maxtorque.",".$noofcylinder.",".$valvespercylinder.",".$turbocharger.",".$transmissiontype.",".$gearbox.",".$drivetype.",".$zerohun.",".$mileage.",".$fueltankcapacity.",".$steeringtype.",".$turningradius.",".$noofairbags.",".$length.",".$width.",".$seatingcapacity.",".$bootspace.",".$noofspeaker.",".$powerstearing.",".$powerwindowsfront.",".$powerwindowsrear.",".$leatherseats.",".$abssystem.",".$brakeassist.",".$centrallocking.",".$powerdoorlock.",".$radio.",".$phoneconnectivity.",".$onroadprice.");";
                                if (mysqli_query($conn, $sql)) {
                                    echo "New record created successfully";
                                  } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                  }
                                // mysqli_query($conn, $sql);
}
?>

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
            <li> <a><?php echo htmlspecialchars($_SESSION["username"]); ?></a> </li>

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
        <br>
        <a href="queries.php" style="text-decoration: none;"><p class="logout" style="background: yellow; text-align: center; padding: 10px;">Queries</p></a>
        <br><hr><br><br><br><br>
        <a href="logoutadmin.php" style="text-decoration: none;"><p class="logout" style="background: rgb(255, 0, 0); text-align: center; padding: 28px 10px 27px 10px; color: white; border: black;">Log Out</p></a>
    </section>

    <section class="right">
        <!-- <p style="background: greenyellow;">Right Section</p> -->
        <!-- <p style="background: greenyellow;">Right Section</p> -->
        <form action="addcars.php" method="post" enctype="multipart/form-data">
        <p class="cardetails">Car Details</p>
        <br>
        <label for="car-name"><b>Brand (Model)</b></label>
        <input type="text" name="car-name" id="car-name" require="false">
        <br>

        <input type="file" name="uploadfile" value="" />
        <br>

        <label for="top-speed"><b>Top Speed (Kmph)</b></label>
        <input type="text" name="top-speed" require="false">
        <br>

        <label for="engine-type"><b>Engine Type</b></label>
        <input type="text" name="engine-type" require="false">
        <br>

        <label for="max-power-rpm"><b>Max Power rpm</b></label>
        <input type="text" name="max-power-rpm" require="false">
        <br>

        <label for="max-torque"><b>Max Torque rpm</b></label>
        <input type="text" name="max-torque" require="false">
        <br>

        <label for="no-of-cylinder"><b>No Of Cylinder</b></label>
        <input type="text" name="no-of-cylinder" require="false">
        <br>

        <label for="valves-per-cylinder"><b>Valves Per Cylinder</b></label>
        <input type="text" name="valves-per-cylinder" require="false">
        <br>

        <label for="turbo-charger"><b>Turbo Charger (yes/no)</b></label>
        <input type="text" name="turbo-charger" require="false">
        <br>

        <label for="transmission-type"><b>Transmission Type (Manual/automatic)</b></label>
        <input type="text" name="transmission-type" require="false">
        <br>

        <label for="gear-box"><b>Gear Box ( _ Speed)</b></label>
        <input type="text" name="gear-box" require="false">
        <br>

        <label for="drive-type"><b>Drive Type (FWD/RWD)</b></label>
        <input type="text" name="drive-type" require="false">
        <br>

        <label for="0-100"><b>0-100kmph (Seconds)</b></label>
        <input type="text" name="0-100" require="false">
        <br>

        <label for="mileage"><b>Mileage (kmpl)</b></label>
        <input type="text" name="mileage" require="false">
        <br>

        <label for="fuel-tank-capacity"><b>Fuel Tank Capacity (Litres)</b></label>
        <input type="text" name="fuel-tank-capacity" require="false">
        <br>

        <label for="steering-type"><b>Steering Type (Manual/Electric)</b></label>
        <input type="text" name="steering-type" require="false">
        <br>

        <label for="turning-radius"><b>Turning Radius (Metres)</b></label>
        <input type="text" name="turning-radius" require="false">
        <br>

        <label for="no-of-airbags"><b>No Of Airbags</b></label>
        <input type="text" name="no-of-airbags" require="false">
        <br>

        <label for="length"><b>Length (mm)</b></label>
        <input type="text" name="length" require="false">
        <br>

        <label for="width"><b>Width (mm)</b></label>
        <input type="text" name="width" require="false">
        <br>

        <label for="seating-capacity"><b>Seating Capacity</b></label>
        <input type="text" name="seating-capacity" require="false">
        <br>

        <label for="boot-space"><b>Boot Space (Litres)</b></label>
        <input type="text" name="boot-space" require="false">
        <br>

        <label for="no-of-speaker"><b>Number Of Speaker</b></label>
        <input type="text" name="no-of-speaker" require="false">
        <br>

        <label for="power-stearing"><b>Power Steering</b></label>
        <input type="text" name="power-stearing" require="false">
        <br>

        <label for="power-windows-front"><b>Power Windows Front</b></label>
        <input type="text" name="power-windows-front" require="false">
        <br>

        <label for="power-windows-rear"><b>Power Windows Rear</b></label>
        <input type="text" name="power-windows-rear" require="false">
        <br>

        <label for="leather-seats"><b>Leather Seats</b></label>
        <input type="text" name="leather-seats" require="false">
        <br>

        <label for="abs-system"><b>Anti Lock Braking System</b></label>
        <input type="text" name="abs-system" require="false">
        <br>

        <label for="brake-assist"><b>Brake Assist</b></label>
        <input type="text" name="brake-assist" require="false">
        <br>

        <label for="central-locking"><b>Central Locking</b></label>
        <input type="text" name="central-locking" require="false">
        <br>

        <label for="power-door-lock"><b>Power Door Locks</b></label>
        <input type="text" name="power-door-lock" require="false">
        <br>

        <label for="radio"><b>Radio</b></label>
        <input type="text" name="radio" require="false">
        <br>

        <label for="phone-connectivity"><b>Phone Connectivity</b></label>
        <input type="text" name="phone-connectivity" require="false">
        <br>

        <label for="on-road-price"><b>On Road Price</b></label>
        <input type="text" name="on-road-price" require="false">
        <br>

        <button type="submit" name="addcar">ADD CAR</button>
        </form>
    </section>

    </section>
    <!-- <section class="adminloginsection">
        <form action="action_page.php" method="post">
            <div class="imgcontainer">
            <img src="img/avatar12.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" class="usercred" require="false">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" class="usercred" require="false">

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
