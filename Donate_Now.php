<?php
  include "Classes.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- logo and nav bar -->
   <div class="logo_Header">
        <div class = "logo">
            <img src="images/LOGO.png" style="width: fit-content; height: inherit;">
        </div>
        <div style="display: flex; justify-content: center; align-items: center; background-color: black; padding: 10px;">
            <div class="menu_bar">
                <a href="HOMEPAGE.php" class="anchor"><button>Home</button></a>
                
                <div class="dropdown">
                    <a href="About_us.php" class="anchor" ><button class="dropbtn">About Us</button></a>
                    <div class="dropdown-content">
                        <a href="About_us.php">About us</a>
                        <a href="Our_Impact.php">Our Impact</a>
                        <a href="Shikshaantar.php">Shikshaantar</a>
                        <a href="Event.php">Events</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="Join_us.php" class="anchor" ><button class="dropbtn">Join Us</button></a>
                    <div class="dropdown-content">
                        <a href="Join_us.php" >Join us</a>
                        <a href="Member.php" >Become a Member</a>
                        <a href="Volunteer.php" >Become a Volunteer</a>
                        <a href="Intern.php" >Become a Intern</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="Donation.php" class="anchor" data-value="4"><button class="dropbtn">Donation</button></a>
                    <div class="dropdown-content">
                        <a href="Donation.php">Donation</a>
                        <a href="Clothes.php">Donate Clothes</a>
                        <a href="Food.php">Donate Food</a>
                        <a href="Books_Stationary.php" >Donate Books/Stationary</a>
                        <a href="Day.php">Celebrate a day with us</a>
                    </div>
                </div>
                <a href="Contact_us.php" class="anchor"><button>Contact Us</button></a>
                <a href="Blogs.php" class="anchor"><button>Blogs</button></a>
                <a href="Donate_Now.php" class="anchor"><button style="color: black; background: white;">Donate Now</button></a>
            </div>
        </div>
    </div>
    
    <?php
        include "Contact_us_Below.php";
    ?>
</body>
</html>