<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body style="margin: 8px;">
<!-- logo and nav bar -->
    <?php
        include "Logo_navBar_AboutUs.php";
        include "slide_show_classes.php";
    ?>

<!-- About -->
    <div style="margin-top: 10px; display: flex; justify-content: center; align-items: center;">
        <div class="head">
            <div  style="color: #c10404;">About</div>
            <div>अstitva</div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; width: 80%;">
            <img src="images/191286_1.jpg" style="width: 40%; margin-right: 50px;">
            <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
                Welcome to अstitva, where compassion meets action. We are a dedicated non-governmental organization committed to extending a helping hand to those in need, particularly focusing on impoverished children, families, and girls. In the heart of our mission lies a profound belief in the transformative power of providing basic necessities and education to uplift communities.

                At अstitva, we believe that no child should go to bed hungry, no family should lack warm clothing, and every girl deserves equal opportunities for education and empowerment. With this ethos guiding us, we tirelessly work towards providing essential resources such as food, clothing, and education to those who need it most.
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; width: 80%;">
            But our commitment goes beyond just meeting immediate needs. We also recognize the importance of cultural and societal ceremonies, such as "kanyadaan," and ensure that every girl has the opportunity to participate with dignity and joy.

            Through our comprehensive programs and initiatives, we aim not only to alleviate the immediate suffering of poverty but also to break the cycle of deprivation by investing in education and skill-building. We firmly believe that education is the key to unlocking a brighter future for individuals and communities alike.

            Join us in our journey to make a tangible difference in the lives of the less fortunate. Together, we can create a world where every child has access to nourishment, every family feels the warmth of care, and every girl has the chance to fulfill her potential. Together, we can bring hope, dignity, and opportunity to those who need it most. Welcome to the compassionate community of अstitva.
        </div>
    </div>

<!-- Our vision -->
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 60px;">
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; width: 80%; flex-direction: column;">
            <div class="head">
                <div style="text-decoration: 2px underline #c10404;">Our Vision</div>
            </div>
            <p style=" font-size: 20px; text-align: center; width: 80%; margin-top: 30px;">
                At अstitva, we envision a world where every individual, regardless of their background or circumstances, has the opportunity to thrive and realize their full potential. Rooted in the values of compassion, equality, and empowerment, our NGO is dedicated to uplifting the lives of the underprivileged, particularly focusing on children, impoverished families, and girls.
            </p>

            <!-- slideshow -->
            <div class="slideshow-container">

                <div class="mySlides fade" style="display: flex; justify-content: center; align-items: center; margin-top: 60px;">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/IMG_8235.JPG" style="width:70%">
                </div>

                <div class="mySlides fade" style="justify-content: center; align-items: center; margin-top: 60px;">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/IMG_8241.JPG" style="width:70%">
                </div>

                <div class="mySlides fade" style="justify-content: center; align-items: center; margin-top: 60px;">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/IMG_8244.JPG" style="width:70%">
                </div>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>
            </div>      
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

<!-- Our Mission -->
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 60px;">
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; width: 80%; flex-direction: column;">
            <div class="head">
                <div style="text-decoration: 2px underline #c10404;">Our Mission</div>
            </div>
            <div>
                <p style=" font-size: 20px; text-align: center; margin-top: 30px;">
                    To provide holistic support and opportunities for growth to those in need, ensuring access to fundamental necessities and pathways to a brighter future.
                </p>
            </div>
            <div style="display: flex; justify-content: center; align-items: center; margin-top: 40px;">
                <div class="image_grid">
                    <img src="images/IMG_8235.JPG" alt="" style="width: 200px; height: 200px; border: 2px solid #c10404;">
                    <img src="images/IMG_8241.JPG" alt="" style="width: 200px; height: 200px; border: 2px solid #c10404;">
                    <img src="images/Our-Mission.jpg" alt="" style="width: 200px; height: 200px; border: 2px solid #c10404;">
                    <img src="images/Our-Mission-1.jpg" alt="" style="width: 200px; height: 200px; border: 2px solid #c10404;">
                    <img src="images/Our-Mission-2.jpg" alt="" style="width: 200px; height: 200px; border: 2px solid #c10404;">
                    <img src="images/Our-Mission-3.jpg" alt="" style="width: 200px; height: 200px; border: 2px solid #c10404;">
                    <img src="images/Our-Mission-4.jpg" alt="" style="width: 200px; height: 200px; border: 2px solid #c10404;">
                    <img src="images/Our-Mission-5.jpg" alt="" style="width: 200px; height: 200px; border: 2px solid #c10404;">
                </div>
            </div>
        </div>
    </div>

<!-- Core Pillers -->
    <div class="VALUES">
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 60px;">
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; width: 80%; flex-direction: column;">
            <div class="head">
                <div style="text-decoration: 2px underline #c10404;">Core Pillars</div>
            </div>
        </div>
    </div>
        <div class="values-flex">
            <div class="value-text">
                <span style="color: red; "> 01 </span><br>
                <span style="text-decoration: underline; font-size: 25px;"><b>Nourishment</b></span><br>
                <p style="text-align: justify;">We believe that no child should go to bed hungry. Through our food programs, we aim to eradicate hunger by providing nutritious meals to impoverished children and families, fostering healthy development and enabling them to concentrate on their education and personal growth.</p>
            </div>
            <div class="value-text">
                <span style="color: red; "> 02 </span><br>
                <span style="text-decoration: underline; font-size: 25px;"><b>Clothing</b></span><br>
                <p style="text-align: justify;">Basic clothing is a fundamental human need often overlooked. Through our clothing initiatives, we aim to clothe those in need, restoring dignity and confidence while protecting them from the harsh realities of weather and environment.</p>
            </div>
            <div class="value-text">
                <span style="color: red; "> 03 </span><br>
                <span style="text-decoration: underline; font-size: 25px;"><b>Education</b></span><br>
                <p style="text-align: justify;">Education is the cornerstone of empowerment. We are committed to breaking the cycle of poverty through education by providing access to quality schooling, educational resources, and scholarships. By investing in education, we empower individuals to build a better future for themselves and their communities.</p>
            </div>
            <div class="value-text">
                <span style="color: red; "> 04 </span><br>
                <span style="text-decoration: underline; font-size: 25px;"><b>Kanyadaan</b></span><br>
                <p style="text-align: justify;">We recognize the significance of marriage in many cultures and the financial burdens it may impose, particularly on families with limited means. Our Kanyadaan initiative aims to support families by providing financial assistance for the marriage of their daughters, ensuring they have a dignified start to their marital journey.</p>
            </div>
        </div>
        
    </div>

<!-- Our Approach -->
    <div class="VALUES">
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 60px;">
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; width: 80%; flex-direction: column;">
            <div class="head">
                <div style="text-decoration: 2px underline #c10404;">Our Approach</div>
            </div>
        </div>
    </div>
        <div class="values-flex">
            <div class="value-text">
                <span style="color: red; "> 01 </span><br>
                <span style="text-decoration: underline; font-size: 25px;"><b>Community-Centric</b></span><br>
                <p style="text-align: justify;">We work closely with local communities to understand their unique needs and challenges, tailoring our programs and initiatives to address them effectively. By fostering community participation and ownership, we create sustainable impact and promote long-term development.</p>            
            </div>
            <div class="value-text">
                <span style="color: red; "> 02 </span><br>
                <span style="text-decoration: underline; font-size: 25px;"><b>Through Collaboration</b></span><br>
                <p style="text-align: justify;">Collaboration is at the heart of our approach. We partner with government agencies, businesses, educational institutions, and other NGOs to maximize our reach and resources, leveraging collective expertise and networks to create meaningful change.</p>            
            </div>
            <div class="value-text">
                <span style="color: red; "> 03 </span><br>
                <span style="text-decoration: underline; font-size: 25px; "><b>Advocacy and Awareness</b></span><br>
                <p style="text-align: justify;">Beyond direct interventions, we advocate for policy changes and societal shifts that promote equity and inclusivity. Through awareness campaigns and grassroots mobilization, we strive to challenge stereotypes, dismantle barriers, and create a more just and compassionate society.</p>            
            </div>
        </div>
        
    </div>

    <?php
        include "Contact_us_Below.php";
    ?>
</body>
</html>