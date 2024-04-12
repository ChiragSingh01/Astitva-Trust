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
                <div class="head" style="display: flex;">
                    <div style="color: #dc3545;"><b>Join as an <br>Volunteer !</b></div>
                    <img src="images/volunteer.png" alt="" style="width: 300px; margin: 20px; border: 3px solid #ffcf00;">
                </div>

                <!-- INTRODUCTION -->
                <div class="benefits" >
                <strong>Welcome to अstitva: Embracing the Essence of Volunteerism</strong>

                    At अstitva, we believe in the profound impact of volunteerism in shaping communities and fostering positive change. As an NGO committed to empowering individuals through volunteer opportunities, we strive to embody the essence of 'अstitva' – the existence and identity of every individual.

                    Our organization serves as a platform where individuals from all walks of life can contribute their time, skills, and passion towards meaningful causes. Whether it's lending a helping hand in environmental conservation, supporting education initiatives, or advocating for social justice, अstitva provides a diverse array of volunteer opportunities tailored to match the unique interests and talents of each individual.

                    Join us as we embark on a journey to make a difference, one volunteer at a time. Together, let's embrace the spirit of volunteerism and create a world where every individual's अstitva is celebrated and cherished.
                </div>

                <!--BENEFITS-->

                <div class="head" style="margin-top: 60px; border-bottom: 4px solid #ffc107; padding-bottom: 20px; width: 100%; display: flex; justify-content: center; align-items: center;">
                    <div><b>BENEFITS</b></div>
                </div>

                <div class="benefits">
                    <ul>
                        <li>
                            <strong>Personal Growth:</strong> Volunteering offers an opportunity for personal development and growth by allowing individuals to learn new skills, gain experience, and broaden their perspectives.
                        </li>
                        <li>
                            <strong>Sense of Purpose:</strong> By contributing to meaningful causes and making a positive impact on society, volunteers often experience a heightened sense of purpose and fulfillment in their lives.
                        </li>
                        <li>
                            <strong>Community Engagement:</strong> Volunteering provides a platform for individuals to connect with their communities, build relationships, and foster a sense of belonging and social cohesion.
                        </li>
                        <li>
                            <strong>Professional Development:</strong> Volunteering can enhance one's professional skills, expand their network, and provide valuable experience that can be beneficial for career advancement or transitioning into new fields.
                        </li>
                        <li>
                            <strong>Health and Well-being:</strong> Engaging in volunteer work has been linked to improved mental and physical health, as it can reduce stress, increase happiness, and provide a sense of satisfaction and accomplishment.
                        </li>
                        <li>
                            <strong>Making a Difference:</strong> By volunteering with अstitva, individuals have the opportunity to make a tangible difference in the lives of others and contribute to positive social change, leaving a lasting legacy in their communities.
                        </li>
                        <li>
                            <strong>Building Empathy and Compassion:</strong> Volunteering allows individuals to develop empathy and compassion by understanding the needs and challenges faced by others, thereby fostering a more compassionate and caring society.
                        </li>
                    </ul>
                </div>

                <!-- COMMITMENTS -->
                <div class="head" style="margin-top: 60px; border-bottom: 4px solid #198754; padding-bottom: 20px; width: 100%; display: flex; justify-content: center; align-items: center;">
                    <div><b>COMMITMENTS</b></div>
                </div>

                <div class="benefits">
                    <p>
                        As a volunteer with अstitva, you commit to:
                    </p>

                    <ul>
                        <li>
                            <strong>Regular Participation:</strong> Dedicate a specified amount of time each week or month to engage in volunteer activities and projects.
                        </li>
                        <li>
                            <strong>Responsibility:</strong> Fulfill assigned tasks and responsibilities promptly and effectively, ensuring accountability and reliability.
                        </li>
                        <li>
                            <strong>Respect and Inclusivity:</strong> Treat all individuals with respect, empathy, and dignity, regardless of their background, beliefs, or identity.
                        </li>
                        <li>
                            <strong>Collaboration:</strong> Work collaboratively with fellow volunteers, staff, and community members to achieve common goals and objectives.
                        </li>
                        <li>
                            <strong>Commitment to Mission:</strong> Embrace and uphold the values and mission of अstitva, striving to make a positive impact and contribute to meaningful change.
                        </li>
                        <li>
                            <strong>Continuous Learning:</strong> Seek opportunities for personal and professional growth, actively learning from experiences and feedback to improve skills and effectiveness.
                        </li>
                        <li>
                            <strong>Flexibility:</strong> Be adaptable and flexible in responding to the evolving needs and priorities of the organization and the communities served.
                        </li>
                        <li>
                            <strong>Communication:</strong> Maintain open and transparent communication with fellow volunteers, coordinators, and stakeholders, sharing insights, feedback, and concerns constructively.
                        </li>
                        <li>
                            <strong>Integrity:</strong> Conduct oneself with honesty, integrity, and ethical behavior, adhering to the principles of fairness, transparency, and accountability.
                        </li>
                        <li>
                            <strong>Advocacy and Support:</strong> Advocate for the causes and issues supported by अstitva, raising awareness and mobilizing support within the community, and providing assistance to those in need.
                        </li>
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