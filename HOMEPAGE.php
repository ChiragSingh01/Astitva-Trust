<?php
  include "Classes.php";
  include "slide_show_classes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body style="margin: 8px;">

<!-- logo and nav bar -->
    <div class="logo_Header">
        <div class = "logo">
            <img src="images/LOGO.png" style="width: fit-content; height: inherit;">
        </div>
        <div style="display: flex; justify-content: center; align-items: center; background-color: black; padding: 10px;">
            <div class="menu_bar">
                <a href="HOMEPAGE.php" class="anchor"><button style="color: black; background: white;">Home</button></a>
                
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
                <a href="Donate_Now.php" class="anchor"><button>Donate Now</button></a>
            </div>
        </div>
    </div>
    



    <!-- slideshow -->
    <div class="slideshow-container">

      <div class="mySlides fade" style="display: flex; justify-content: center; align-items: center; margin-top: 60px;">
          <img src="images/Home_Slide_1.jpg" style="width: 100%;">
      </div>

      <div class="mySlides fade" style="justify-content: center; align-items: center; margin-top: 60px;">
          <img src="images/Home_Slide_2.jpg" style="width: 100%;">
      </div>

      <div class="mySlides fade" style="justify-content: center; align-items: center; margin-top: 60px;">
          <img src="images/Home_Slide_3.jpeg" style="width: 100%;">
      </div>

      </div>
      <br>

      <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
      </div>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "flex";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
    </script>


    
    <!--SLOGAN-->
    <div class="slogan">
       <h3> "It’s easier to take than to give. It’s nobler to give than to take. <br>
         The thrill of taking lasts a day. The thrill of giving lasts a lifetime"</h3> 
    </div>

    <!--INTRODUCTION-->
    <div>
        <div class="intro-heading">
        <h1 style="text-align: center; color: red"> <b>WHO WE ARE !!</b></h1> 
        </div>

        <div class="info-intro" style="display: flex; justify-content: center; margin: 20px 125px ;">
          <div style="width: 40%; font-size: 25px; text-align: justify; margin-rigth: 20px;">
            Welcome to अstitva, where compassion drives action. We're dedicated to aiding impoverished children, families, and girls, ensuring no one goes hungry or lacks essentials like clothing and education. Our mission goes beyond immediate relief, aiming to break the cycle of poverty through education and empowerment. Join us in creating a world where every child thrives, families are supported, and every girl has equal opportunities. Welcome to अstitva.
          </div>
          <div style="width: 40%; display: flex; justify-content: right; align-items: center; margin-left: 20px;">
              <img src="images/IMG_8244.JPG" alt="ASTITVA" style="width: 100%;">
          </div>
        </div>
    </div>

    <!--WHAT WE DO-->
    <div>
        <div class="we-do-head">
            <h1 style="text-align: center; color: red ; margin-top: 200px;"><b>WHAT WE DO !!</b></h1>
        </div>
        <div class="lorem">
            <h3 style="text-align: center; color: black ; margin-top: 20px;">Nutritious Meals Provision | Clothing Distribution | Kanyadaan: Empowering Girls | Education Access for All</h3>
        </div>

        <!--IMAGES GRID -->
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 60px;">
          <div class="image_grid">
            <img src="images/IMG_8235.JPG" style=" width: 200px; height: 200px; border: 2px solid #c10404;">
            <img src="images/IMG_8241.JPG" style=" width: 200px; height: 200px; border: 2px solid #c10404;">
            <img src="images/download.jpeg" style=" width: 200px; height: 200px; border: 2px solid #c10404;">
            <img src="images/OIP (1).jpeg" style=" width: 200px; height: 200px; border: 2px solid #c10404;">
            <img src="images/OIP.jpeg" style=" width: 200px; height: 200px; border: 2px solid #c10404;">
            <img src="images/th.jpeg" style=" width: 200px; height: 200px; border: 2px solid #c10404;">
            <img src="images/OIP (2).jpeg" style=" width: 200px; height: 200px; border: 2px solid #c10404;">
            <img src="images/IMG_8244.JPG" style=" width: 200px; height: 200px; border: 2px solid #c10404;">
          </div>
        </div>
    </div>

    <!--VALUES --- ETHICS -->
    <div class="VALUES">
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 60px;">
            <h1 style="text-align: center; color: red"><b>Values and Ethics</b></h1>  
        </div>
        <div class="values-flex">
            <div class="value-text">
                <span style="color: red; "> 01 </span><br>
                <span style="text-decoration: underline; font-size: 25px;"><b>Empathy</b></span><br>
                We believe in empathy towards all members of our community, and work towards fostering a supportive environment for our students and their families.
            </div>
            <div class="value-text">
                 <span style="color: red; "> 02 </span><br>
                 <span style="text-decoration: underline; font-size: 25px;"><b>Innovation</b></span><br>
                 We strive towards creating a diverse and inclusive space where everyone, regardless of their background or circumstances, is given an opportunity to learn and grow.
            </div>
            <div class="value-text">
                <span style="color: red; "> 03 </span><br>
                <span style="text-decoration: underline; font-size: 25px;"><b>Resposibility </b></span><br>
                We encourage innovative approaches to education and vocational training, which can help provide better opportunities and access to resources for our students and the wider community.
            </div>
            <div class="value-text">
                <span style="color: red; "> 04 </span><br>
                <span style="text-decoration: underline; font-size: 25px;"><b>Happiness</b></span><br>
                We take responsibility for our actions and are accountable for the impact we have on our students, their families, and the community we serve.
            </div>
        </div>
        
    </div>

    <!--JOIN NGO -->
        <div style="margin-top: 60px;">
            <div>
                <h1 style="text-align: center; color: red"><b>JOIN US !!</b></h1> 
            </div>
            <!--IMAGES-->
            <div class="join-img" style="display: flex; margin: 0 220px; justify-content: center;">
                <div class="menu_bar" style="text-align: center;">
                    <img src="images/intern.png" alt="" style="width: 300px; margin: 20px; border: 3px solid #cc0a0a;">
                    <h2>Internship</h2>
                    <a href="Intern.php"><button type="submit"> APPLY </button></a>   
                </div>
                <div class="menu_bar" style="text-align: center;">
                    <img src="images/volunteer.png" alt="" style="width: 300px; margin: 20px; border: 3px solid #ffcf00;">
                    <H2>Volunteership</H2>
                    <a href="Volunteer.php"><button type="submit"> APPLY </button></a>  
                </div>
                <div class="menu_bar" style="text-align: center;">
                    <img src="images/member.jpg" alt="" style="width: 300px; margin: 20px; border: 3px solid #007900;">
                    <h2>Member</h2>
                    <a href="Member.php"><button type="submit"> APPLY </button></a>    
                </div>

            </div>
        </div>

     <!--   FOUNDERS   -->
     <div class="FOUNDERS" style="margin-top: 150px;">
      <div><h1 style="text-align: center; color: red"><b>OUR FOUNDERS</b></h1></div>

        <div class="founder-img-flex">
              <div class="FOUNDER-IMG">
                <img src="images/Mukul.jpg" class="img-thumbnail " alt="MUKUL RANA">
                <div class="founder-name"><b>PRESIDENT <br>-> Mr.MUKUL RANA</b></div>
              </div>
             <div class="FOUNDER-IMG">
               <img src="images/SHALU.jpg" class="img-thumbnail" alt="SHALU DHAMA">
               <div class="founder-name"><b>VICE-PRESIDENT <br>-> Ms.SHALU DHAMA</b></div>
             </div>
             <div class="FOUNDER-IMG">
              <img src="images/SATISH.jpg" class="img-thumbnail" alt="">
              <div class="founder-name"><b>TREASURER <br>-> Mr. SATISH RANA</b></div>
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