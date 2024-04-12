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
                    <div style="color: #dc3545;"><b>Join as an Member !</b></div>
                    <img src="images/member.jpg" alt="" style="width: 300px; margin: 20px; border: 3px solid #007900;">
                </div>

                <!-- INTRODUCTION -->
                <div class="benefits" >
                    <header>
                        <h1>Welcome to अstitva</h1>
                        <h2>Empowering Lives, Creating Opportunities</h2>
                    </header>
                    <section>
                        <p>In a world where every individual's potential deserves nurturing, where opportunities are the gateway to empowerment, there exists an organization committed to fostering growth, igniting change, and building a community of resilience. Welcome to अstitva - a beacon of hope, a catalyst for transformation, and a testament to the power of collective action.</p>
                        <p>At अstitva, we believe in the inherent worth and dignity of every person. Our name, meaning "existence" in Hindi, encapsulates our core ethos: to uphold the essence of humanity, to champion diversity, and to celebrate the unique contributions each individual brings to our collective tapestry.</p>
                        <p>Through our unwavering dedication, अstitva endeavors to provide a platform where members are not just passive participants, but active architects of their destiny. We recognize that true empowerment stems from access to opportunities - opportunities to learn, to grow, to thrive, and to lead. Thus, at the heart of our mission lies the commitment to create a supportive ecosystem where dreams take flight, where barriers are dismantled, and where aspirations find wings to soar.</p>
                        <p>Join us as we embark on this journey of empowerment and inclusion. Together, let us redefine what it means to exist, to flourish, and to leave an indelible mark on the world. With अstitva, the opportunity to make a difference begins with you.</p>
                    </section>
                </div>

                <!--BENEFITS-->

                <div class="head" style="margin-top: 60px; border-bottom: 4px solid #ffc107; padding-bottom: 20px; width: 100%; display: flex; justify-content: center; align-items: center;">
                    <div><b>BENEFITS</b></div>
                </div>

                <div class="benefits">
                    <ul>
                        <li>Access to a supportive community dedicated to personal and collective growth</li>
                        <li>Opportunities for skill development, learning, and leadership</li>
                        <li>Participation in impactful projects and initiatives aimed at creating positive change</li>
                        <li>Networking opportunities with like-minded individuals and organizations</li>
                        <li>A platform to amplify your voice and contribute to meaningful conversations</li>
                        <li>The satisfaction of being part of a movement that empowers individuals and communities</li>
                    </ul>
                </div>

                <!-- COMMITMENTS -->
                <div class="head" style="margin-top: 60px; border-bottom: 4px solid #198754; padding-bottom: 20px; width: 100%; display: flex; justify-content: center; align-items: center;">
                    <div><b>COMMITMENTS</b></div>
                </div>

                <div class="benefits">
                    <ul>
                        <li>To uphold the values of inclusivity, diversity, and respect for all individuals</li>
                        <li>To provide equal access to opportunities for personal and professional growth</li>
                        <li>To foster a supportive environment where every voice is heard and valued</li>
                        <li>To continuously strive for positive social impact through our projects and initiatives</li>
                        <li>To promote transparency, accountability, and integrity in all our endeavors</li>
                        <li>To empower individuals to become agents of change in their communities and beyond</li>
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