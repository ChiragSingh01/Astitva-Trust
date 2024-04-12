<?php
  include "Classes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* NGO HEAD IMAGE */
        .blog-image{
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 100px ;
            margin-top: 50px;
        }

        /* CONTENT */

        .parent{
            height: 600px;
            width: 60%;
            margin-top: 40px;
        }
        .content-image{
            height: 300px;
            width: 95%;
            display: flex;
            justify-content: center;
            margin-left: 20px;
        }
        .content-heading{
            height: 80px;
            width: 90%;
            margin-left: 40px;
            text-align: center;
        }
        .date-time-content{
            display: flex;
            justify-content: space-between;
            width: 90%;
            margin-left: 40px;
            font-size: 12px;
            font-family: cursive;
            color: grey;
        }
        .information{
            display: flex;
            justify-content: space-between;
            width: 90%;
            margin-left: 40px;
            margin-top: 20px;
            font-size: 18px;
            
        }

    </style>

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
                <a href="Blogs.php" class="anchor"><button style="color: black; background: white;">Blogs</button></a>
                <a href="Donate_Now.php" class="anchor"><button>Donate Now</button></a>
            </div>
        </div>
    </div>

    <!-- NGO BLOG IMAGE  -->
    <div style="display: flex; justify-content: center; align-items: center;">
        <div class="head" style="width: 70%; padding-bottom: 20px; border-bottom: 4px solid #dc3545; display: flex; justify-content: center; align-items: center;">
            <div>Blogs</div>
        </div>
    </div>

    <!-- BLOG CONTENT- - -> 1 -->
    <div style="display: flex; justify-content: center; align-items: center;">
        <div class="parent">

            <!-- CONTENT - IMAGE -->
            <div class="content-image">
                <img src="https://www.shutterstock.com/image-vector/ngo-volunteers-nongovernmental-nonprofit-organizations-260nw-2220453171.jpg" alt="content-image"
                            style="width: inherit; height: inherit;" >
            </div>

            <!-- CONTENT-HEAD -->
            <div class="content-heading">
                <h2><b>BLOG-1 HEADING</b></h2>
            </div>

            <!-- DATE-TIME -->
            <div class="date-time-content">
                <div class="date-time">By Astitva NGO</div>
                <div class="date-time">Posted on : DD/MM/YYYY</div>
                <div class="date-time">Posted in :(category->news/updates/oldwork)</div>
                
            </div>

            <!-- CONTENT - INFORMATION   -->
            <div class="information">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam fuga quo, tempora, velit recusandae alias error beatae molestiae cum ratione ab officia, atque non voluptatibus nemo veniam possimus? Iusto quod veniam vel praesentium, dolorem impedit laboriosam minus, necessitatibus, distinctio mollitia eveniet dolorum aut enim earum deleniti natus. Voluptatum, ipsa nisi.
            </div>
        </div>
    </div>
    

    <?php
        include "Contact_us_Below.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
</body>
</html>