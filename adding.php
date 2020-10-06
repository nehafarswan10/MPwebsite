<?php 
error_reporting(0); 
?> 
<?php 
  $msg = ""; 
  
  // If upload button is clicked ... 
  if (isset($_POST['addcar'])) { 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "image/".$filename; 
    $carname = $_POST["car-name"];
	$topspeed = $_POST["top-speed"];
	$enginetype = $_POST["engine-type"];
	$maxpowerrpm = $_POST["max-power-rpm"];
	$maxtorque = $_POST["max-torque"];
	$noofcylinder = $_POST["no-of-cylinder"];
	$valvespercylinder = $_POST["valves-per-cylinder"];
	$turbocharger = $_POST["turbo-charger"];
	$transmissiontype = $_POST["transmission-type"];
	$gearbox = $_POST["gear-box"];
	$drivetype = $_POST["drive-type"];
	$zerotohun = $_POST["0-100"];
	$mileage = $_POST["mileage"];
	$fueltankcapacity = $_POST["fuel-tank-capacity"];
	$steeringtype = $_POST["steering-type"];
	$turningradius = $_POST["turning-radius"];
	$noofairbags = $_POST["no-of-airbags"];
	$length = $_POST["length"];
	$width = $_POST["width"];
	$seatingcapacity = $_POST["seating-capacity"];
	$bootspace = $_POST["boot-space"];
	$noofspeaker = $_POST["no-of-speaker"];
	$powerstearing = $_POST["power-stearing"];
	$powerwindowsfront = $_POST["power-windows-front"];
	$powerwindowsrear = $_POST["power-windows-rear"];
	$leatherseats = $_POST["leather-seats"];
	$abssystem = $_POST["abs-system"];
	$brakeassist = $_POST["brake-assist"];
	$centrallocking = $_POST["central-locking"];
	$powerdoorlock = $_POST["power-door-lock"];
	$radio = $_POST["radio"];
	$phoneconnectivity = $_POST["phone-connectivity"];
	$onroadprice = $_POST["on-road-price"];




    $db = mysqli_connect("localhost", "root", "", "test"); 
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO `cars` (`filename`, `carname`, `topspeed`, `enginetype`, `maxpowerrpm`, `maxtorque`, `noofcylinder`, `valvespercylinder`, `turbocharger`, `transmissiontype`, `gearbox`, `drivetype`, `0100`, `mileage`, `fueltankcapacity`, `steeringtype`, `turningradius`, `noofairbags`, `length`, `width`, `seatingcapacity`, `bootspace`, `noofspeaker`, `powerstearing`, `powerwindowsfront`, `powerwindowsrear`, `leatherseats`, `abssystem`, `brakeassist`, `centrallocking`, `powerdoorlock`, `radio`, `phoneconnectivity`, `onroadprice`) VALUES ('$filename', '$carname', '$topspeed', '$enginetype', '$maxpowerrpm', '$maxtorque', '$noofcylinder', '$valvespercylinder', '$turbocharger', '$transmissiontype', '$gearbox', '$drivetype', '$zerotohun', '$mileage', '$fueltankcapacity', '$steeringtype', '$turningradius', '$noofairbags', '$length', '$width', '$seatingcapacity', '$bootspace', '$noofspeaker', '$powerstearing', '$powerwindowsfront', '$powerwindowsrear', '$leatherseats', '$abssystem', '$brakeassist', '$centrallocking', '$powerdoorlock', '$radio', '$phoneconnectivity', '$onroadprice'); 
  
        -- Execute query 
        mysqli_query($db, $sql);
        
		-- Now let's move the uploaded image into the folder: image 
        -- move_uploaded_file($tempname, $folder);
	}
endif; 
?>