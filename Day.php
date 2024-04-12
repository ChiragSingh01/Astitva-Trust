<!DOCTYPE html>
<html lang="en">
<head>
     <style>

       .CELEBRATION-HEADER{
        display: flex;
        width: 85%;
        margin: auto;
       }


       .ngo-image-celebration{
        width: 65%;
        margin: auto;

       }

       .img-fluid{
        width: fit-content;
        height: inherit;
        margin: auto;
        border-radius: 20%;
       }

       .celebrate-day-head{
        text-align: center;
        margin-top: 200px;
        margin-right:10px ;
        margin-bottom: 240px;
        padding: 8px;
        outline:4px dotted red;
       }

       .DESCRIPTION-HEADING{
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 70%;

        

       }

       .description-head{
        text-align: center;
       }

       .description-info{
        margin-top: 40px;
        padding: 10px;
        width: 90%;
        font-size: 16px;
        font-style: italic;
        font-weight:500 ;
       }

       
        
     </style>
</head>
<body>
    <?php
      include "navBar_Donation.php";
    ?>

    <div class="parent">

        <!-- CELEBRATION   HEADER   -->
        <div class="CELEBRATION-HEADER">
            

            <div class="ngo-image-celebration">

                <div class="celebrating-img">
                    <img class="img-fluid" src="https://images.donatekart.com/campaign/cover/Celebrate-Birthday922718591.png" alt="CHILDER ENJOYING BIRTHDAY TREAT">
                </div>

            </div>

            <div class="celebrate-day-head menu_bar">
                <h2><b> CELEBRATE YOUR DAY <br> WITH US ! !</b></h2>
                <button style="margin-top: 30px;" type="button"> JOIN US </button>
            </div>
        </div>

        <!--   CELEBRATION DESCRIPTION -->

        <div class="DESCRIPTION-HEADING">

            <div class="description-head">
                <h1 style="text-decoration: 2px underline red; text-underline-offset: 20px;"><b>CELEBRATE YOUR DAY SPECIAL WITH US !!</b></h1>
                
            </div>
            <div class="description-info">
                At ASTITVA, we believe in celebrating the joy of giving, especially on special occasions! Are you looking for a meaningful way to mark your birthday, anniversary, or any other milestone? Look no further! Join us in making a difference by celebrating your special day with the children of our NGO. <br> <br>
                Instead of lavish parties or extravagant gifts, why not share your happiness with those who need it most? By choosing to celebrate with ASTITVA, you're not just creating memories for yourself but also spreading smiles among children in need. <br> <br>
                Your generosity will not only make their day but will also fill your heart with warmth and fulfillment. Let's turn your special moments into unforgettable experiences for both you and the children of ASTITVA. Together, we can make every celebration count! <br> <br>

            </div>

        </div>

        <!--  FORM   -->
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 100px; flex-direction: column;">
            <div style="width: 70%; padding-bottom: 20px; border-bottom: 4px solid #dc3545;">
                <h1 style="font-size: 50px; text-align: center;">Give us Info <br>About the Day</h1>
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

                <label for="Phone" style="margin-bottom: 10px; margin-top: 10px;">
                    <span>Date</span>
                    <abbr style="color: red; border: none; text-decoration: none;" title="Required">*</abbr>
                </label>
                <input style="width: 100%;" type="date" placeholder="date" id="date">

                <label for="Massage" style="margin-bottom: 10px; margin-top: 10px;">
                    <span>How and what you want to Celebrate</span>
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
     
    </div>
    
</body>
</html>