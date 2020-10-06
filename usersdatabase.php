<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlogin.php");
    exit;
}
?>

<?php 
$con = mysqli_connect('localhost','root','','test');
$result=mysqli_query($con,"select * from users");
// $result=mysqli_query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style4.css">
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"> 
        </script> 
        <script src="jquery-table2excel-master/src/jquery.table2excel.js"></script> 
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
            <img src="img/avatar12.png" alt="Avatar" class="avatar">
        </div>
        <hr>
        <br>
        <a href="addcars.php" style="text-decoration: none;"><p class="logout" style="background: yellow; text-align: center; padding: 10px;">Add cars</p></a>
        <br>
        <hr>
        <br>
        <a href="carsdatabase.php" style="text-decoration: none;"><p class="logout" style="background: yellow; text-align: center; padding: 10px;">Cars Database</p></a>
        <br>
        <hr>
        <br>
        <p class="logout" style="background: chartreuse; text-align: center; padding: 10px;">Users</p>
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
        <table class="table2excel" align="center" border="5px" style="width:70%; margin:10%; line-height:40px; border-style: solid;">
        <tr>
        <th colspan="2"><h2>Users Record</h2></th>
        </tr>
        <t>
        <th>ID</th>
        <th>Username</th>
        </t>
        <?php
        while($rows=$result -> fetch_array(MYSQLI_ASSOC))
        {
        ?>
        <tr align="center">
        <td><?php echo $rows['id']?></td>
        <td><?php echo $rows['username']?></td>
        </tr>
        <?php
        }
        mysqli_close($con);
        ?>
        </table>
        <button class="exportBtnClass"> 
         Export to Excel file 
</button>
    </section>


    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2021 www.carsComparison.com - All rights reserved
        </p>
    </footer>
    <script> 
   $(function() { 
         
       $(".exportBtnClass").click(function(e){ 
           var table = $(this).prev('.table2excel'); 
           if(table && table.length){ 
               var preserveColors =  
              (table.hasClass('colorClass') ? true : false); 

               $(table).table2excel({ 

// This class's content is excluded from getting exported 
                   exclude: ".noExl",  
                   name: "Output excel file ", 
                   filename:  
"Users_Record-" + new Date().toString().replace(/[\-\:\.]/g, "") + ".xls", 

                   fileext: ".xls", //File extension type 
                   exclude_img: true, 
                   exclude_links: true, 
                   exclude_inputs: true, 
                   preserveColors: preserveColors 
               }); 
           } 
       });         
   }); 
</script> 
</body>
</html>
