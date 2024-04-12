<?php
    include "Classes.php";
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
                <a href="HOMEPAGE.php" class="anchor"><button>Home</button></a>
                
                <div class="dropdown">
                    <a href="About_us.php" class="anchor" ><button class="dropbtn">About Us</button></a>
                    <div class="dropdown-content">
                        <a href="About_us.php">About us</a>
                        <a href="Our_Impact.php">Our Impact</a>
                        <a href="Institute.php">Institute</a>
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
                        <a href="other.php">Other</a>
                    </div>
                </div>
                <a href="Contact_us.php" class="anchor"><button style="color: black; background: white;">Contact Us</button></a>
                <a href="Blogs.php" class="anchor"><button>Blogs</button></a>
                <a href="Donate_Now.php" class="anchor"><button>Donate Now</button></a>
            </div>
        </div>
    </div>


    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; flex-direction: column;">
    <!-- image with donate now button -->
        <div style=" background-image: url('images/desktop-wallpaper-temple-people-children-graphy-emotion-happy-person-tribe-child-smile-fun-graph-crowd-male-2048x1365-px-facial-expression-interaction-social-group-2048x1365-happy-person.jpg'); background-repeat: no-repeat; background-size: cover;">
            <div style="height: 567px; width: 850px; display: flex; align-items: flex-end; justify-content: center;">
                <a class="anchor" href="Donate_Now.php"><button class="contact_us" style="border-radius: 10px; padding: 10px; margin-bottom: 30px;">Donate Now</button></a>
            </div>    
        </div>

    <!-- contact us header -->
        <div style="margin-top: 40px;">
            <h1 style="font-size: 60px;">Contact Us</h1>
        </div>

    <!-- Contact Details -->
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 40px; width: 80%;">
            <div style="width: 50%; margin-right: 10px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3497.1405796146155!2d77.118689!3d28.775065999999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDQ2JzMwLjIiTiA3N8KwMDcnMDcuMyJF!5e0!3m2!1sen!2sin!4v1711649432179!5m2!1sen!2sin" width="100%" height="450" style="border: 2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div style="width: 50%; margin-left: 10px;">
                <div class="menu_bar" style="display: flex; justify-content: right; margin-bottom: 40px; width:100%;">
                    <a class= "anchor" href="Donate_Now.php">
                        <button>DONATE NOW</button>
                    </a>
                    <a class= "anchor" href="Contact_us.php">
                        <button>GET IN TOUCH</button>
                    </a>
                </div>
                <h1 style="text-align: right;">अstitva-Hands for Empowering The Roots</h1>
                <p style="text-align: right; margin-top: 40px; width:100%;">
                    HeadOffice  Address: 106/336, MLA Road, Khera Kalan . North west delhi – 110082 New Delhi
                    <br><br>Branch Office : D-74 , Devru Road, Opposite Delhi Vidyapeeth School, Sonipat -131001 Haryana
                    <br><br>Contact no. 9873624554, 9873233808.
                    <br><br>E-mail: astitvatrust0205@gmail.com
                </p>
                <div style="display: flex; flex-direction: row; justify-content: right;">
                    <a class="fa fa-instagram" href="https://www.instagram.com/astitva_trust_?igsh=NGJtZDBlOXh0NDRk" style="color: #ff00ba"></a>
                    <a class="fa fa-facebook" href="https://www.facebook.com/share/Kbf5QaHeKEWmkApg/?mibextid=qi2Omg"></a>
                    <a class="fa fa-youtube" href="https://youtube.com/@thedaydreamer0205?si=G9gnblTY6CvOQw4u" style="color: red"></a>
                </div>
            </div>
        </div>
    </div>

<!-- Send us Message -->
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 100px; flex-direction: column;">
        <div>
            <h1 style="font-size: 80px; text-align: center;">Send Us Message</h1>
            <p style="text-align: center; margin-top: 40px;">Have Questions or Suggestions? Share it with us.</p>
        </div>
        <div style="width: 60%; margin-top: 50px;">
            <label for="Name" style="margin-bottom: 10px;">
                <span>Full Name</span>
                <abbr style="color: red; border: none; text-decoration: none;" title="Required">*</abbr>
            </label>
            <input style="width: 100%;" type="text" placeholder="Name" id="Name">

            <label for="Email" style="margin-bottom: 10px; margin-top: 10px;">
                <span>Email</span>
                <abbr style="color: red; border: none; text-decoration: none;" title="Required">*</abbr>
            </label>
            <input style="width: 100%;" type="text" placeholder="Email" id="Email">

            <label for="Phone" style="margin-bottom: 10px; margin-top: 10px;">
                <span>Phone</span>
                <abbr style="color: red; border: none; text-decoration: none;" title="Required">*</abbr>
            </label>
            <input style="width: 100%;" type="text" placeholder="Phone" id="Phone">

            <label for="Massage" style="margin-bottom: 10px; margin-top: 10px;">
                <span>Message</span>
            </label>
            <textarea style="width: 100%;" name="" id="Massage" cols="30" rows="10"></textarea>
            <div class="menu_bar">
                <button style="margin-inline: 0px;">Submit</button>
            </div>
        </div>
    </div>
    
</body>
</html>