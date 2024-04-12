<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body style="margin: 8px;">

<!-- logo and nav bar -->
    <?php
        include "Logo_navBar_AboutUs.php";
    ?>

<!-- Event head and image -->
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
        <div class="head">
            <div>Events</div>
            <div style="color: red;">And</div>
            <div>Campaign</div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
        <img src="images/3-4.jpg" style="width: 50%;">
    </div>

<!-- Upcoming Events card -->
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; margin-top: 100px;">
        <div class="head">
            <div>Upcoming</div>
            <div>Events</div>
            <div style="color: red;">And</div>
            <div>Campaign</div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; ">
        <div style="display: flex; margin-top: 10px; background-color: red; width: 70%; height: fit-content; border-radius: 20px;">
            <div style="width: 50%; margin: 50px;">
                <div style="text-align: center;">
                    <p style="color: white;">
                        <div style="border-bottom: 2px solid white; padding-bottom: 20px;">
                            <h1 style="color: white; font-family: cursive">Discription</h1>
                        </div>
                    </p>
                </div>
                <div style="display: flex; align-item: flex-end; justify-content: center;">
                    <div class="menu_bar">
                        <button>Register</button>
                        <button>Donate</button>
                    </div>
                </div>
            </div>
            <div style="width: 50%; display: flex; justify-content: center;">
                <img src="images/3f655cf5c8ba49d4922736c59c1a13f5.jpg" style="width: 80%; margin: 20px;">
            </div>
        </div>
    </div>


<!-- Past Events card -->
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; margin-top: 100px;">
        <div class="head">
            <div>Past</div>
            <div>Events</div>
            <div style="color: red;">And</div>
            <div>Campaign</div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px; ">
        <div style="display: flex; margin-top: 10px; background-color: red; width: 70%; height: fit-content; border-radius: 20px;">
            <div style="width: 50%; margin: 50px;">
                <div style="text-align: center;">
                    <p style="color: white;">
                        <div style="border-bottom: 2px solid white; padding-bottom: 20px;">
                            <h1 style="color: white; font-family: cursive">Discription</h1>
                        </div>
                        
                    </p>
                </div>
                <div style="display: flex; align-item: flex-end; justify-content: center;">
                    <div class="menu_bar">
                        <button>Register</button>
                        <button>Donate</button>
                    </div>
                </div>
            </div>
            <div style="width: 50%; display: flex; justify-content: center;">
                <img src="images/3f655cf5c8ba49d4922736c59c1a13f5.jpg" style="width: 80%; margin: 20px">
            </div>
        </div>
    </div>

    <?php
        include "Contact_us_Below.php";
    ?>
</body>
</html>