<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .head-img{
            margin: auto;
        }

        /* JOIN US HEAD  */
        .why-to-join-head{
            margin-top: 60px;
            border: 3.5px solid rgb(221, 105, 63) ;
            text-align: center;
            font-weight: bolder;
            font-family: 'Times New Roman', Times, serif;
            border-radius: 10px;
        }

        /* JOIN US DESCRIPTION */
        .why-to-join{
            margin-top: 30px;
            margin-left: 250px;
            margin-right: 200px;
            font-weight:500;
            font-family: cursive;
        }


    </style>
</head>
<body>
    <?php
        include "navBar_joinUs.php";
    ?>

    <div class="parent" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">

        <!--    join us head    -->
        <div class="join-us-head" style="width: 80%;">
            
            <div class="head-img head" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                <div>JOIN US</div>
                <img class="img-fluid" style="width: 55%; border: 4px solid #ffc107;" src="images/join_us.png" alt="JOIN US">
            </div>
        </div>


        <!--    why-to-join-head     -->
        <div class="why-to-join-head">
            <h1>WHY TO JOIN ASTITVA ?</h1>
        </div>

        <!--DESCRIPTION -->
        <div class="why-to-join">
            Joining ASTITVA isn't just about becoming a member of an NGO; it's about becoming part of a community dedicated to making a tangible difference in the lives of others. By joining us, you're not just volunteering your time; you're investing in a brighter future for those in need. With ASTITVA, you'll have the opportunity to contribute to various social activities, including donating food, clothes, books, and engaging in other impactful initiatives. <br> <br>
            But that's not all! When you join ASTITVA, you open doors to numerous opportunities. Whether you're a student looking for valuable work experience or a professional seeking to give back, ASTITVA offers internships that allow you to hone your skills while making a meaningful impact. Additionally, our membership program provides a platform for like-minded individuals to come together, share ideas, and collaborate on projects that promote positive change in society. <br> <br>
            By becoming a part of ASTITVA, you become a catalyst for transformation, both in the lives of others and in your own. You'll gain a sense of fulfillment that comes from knowing you're making a difference, one act of kindness at a time. Join us at ASTITVA and be a part of something greater than yourself. Together, let's create a world where compassion and generosity reign supreme. <br> <br>


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
    </div>
    
    <?php
        include "Contact_us_Below.php";
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>