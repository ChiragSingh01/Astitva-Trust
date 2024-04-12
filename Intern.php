<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        .benefits{
            margin-top: 30px;
            font-size: 20px;
            font-family: cursive;
            width: 80%;
        }

    </style>
</head>
<body>
    <?php
        include "navBar_joinUs.php";
    ?>
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <div style="width: 80%; display: flex; justify-content: center; align-items: center; flex-direction: column;">
             <!-- BECOME AN INTERN HEAD -->
                <div class="head">
                    <div style="color: #dc3545;"><b>Join as an Intern !</b></div>
                    <img src="images/intern.png" alt="" style="width: 300px; margin: 20px; border: 3px solid #cc0a0a;">
                </div>

                <!-- INTRODUCTION -->
                <div class="benefits" >
                    Are you someone who is looking for internship opportunities at an NGO with motive of gaining experience and building your CV? <br> <br> 

                Well, ASTITVA has got the perfect opportunity for you. We believes that only through the collective efforts  <br> of the society, we can transform the lives of underprivileged people. Therefore, it encourages everyone from working professionals to even school students <br> to help create a positive impact in society by interning at ASTITVA . We provide internship opportunities  in a number of fields ranging from managing <br> the social media  , writing content for our social media platforms to even teaching children at our centers .
                </div>

                <!--BENEFITS-->

                <div class="head" style="margin-top: 60px; border-bottom: 4px solid #ffc107; padding-bottom: 20px; width: 100%; display: flex; justify-content: center; align-items: center;">
                    <div><b>BENEFITS</b></div>
                </div>

                <div class="benefits">
                    <ul>
                        <li>It will give you a sense of satisfaction and exhilaration as you would be helping these children with your actions</li> <br>
                        <li>It will give you a sense of how professional organizations work.</li> <br>
                        <li>It will help you build new networks as you would be constantly required to work with people from various backgrounds on varied projects.</li> <br>
                        <li>At the end of the internship, you will receive a certificate of completion and performance-based LOR, which will further help you with your career</li>
                    </ul>
                </div>

                <!-- COMMITMENTS -->
                <div class="head" style="margin-top: 60px; border-bottom: 4px solid #198754; padding-bottom: 20px; width: 100%; display: flex; justify-content: center; align-items: center;">
                    <div><b>COMMITMENTS</b></div>
                </div>

                <div class="benefits">
                    <ul>
                        <li>Interns should do their tasks diligently and timely submit them to their supervisors.</li>
                        <li>They are required to abide by the values and goals of Pehchaan The Street School </li>
                        <li>They must attend the weekly meetings regularly and productively contribute to them in the form of new ideas etc</li>
                        <li>They must treat their fellow interns and supervisors with regard and respect.</li>
                        <li>Any confidential information shared with the interns must stay within the organization itself</li>
                        <li>Be respectful, friendly and punctual.</li>
                    </ul>
                </div>
        </div>
        
    </div>

   <!-- Form -->
   <div style="display: flex; justify-content: center; align-items: center; margin-top: 100px; flex-direction: column;">
        <div style="border-bottom: 4px solid #0dcaf0; padding-bottom: 20px; width: 80%; display: flex; justify-content: center; align-items: center;">
            <h1 style="font-size: 80px; text-align: center;">Registration</h1>
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
                <span>Tell us about your self</span>
                <abbr style="color: red; border: none; text-decoration: none;" title="Required">*</abbr>
            </label>
            <textarea style="width: 100%;" name="" id="Massage" cols="30" rows="10"></textarea>

            <label for="Massage" style="margin-bottom: 10px; margin-top: 10px;">
                <span>why you want to join?</span>
                <abbr style="color: red; border: none; text-decoration: none;" title="Required">*</abbr>
            </label>
            <textarea style="width: 100%;" name="" id="Massage" cols="30" rows="10"></textarea>

            <div class="menu_bar">
                <button style="margin-inline: 0px;">Submit</button>
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