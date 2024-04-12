<!DOCTYPE html>
<html lang="en">
<head>
    
    <style>
      /* DONATION HEAD IMAGE */
      .donation-header{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }
      .donation-img-container{
        width: 70%;
        display: flex;
        justify-content: center;
      }
      .donation-img{
        width: fit-content;
        height: inherit;
        border: 4px solid black ;
        border-radius: 10%;
        
      }

      /* WHY  TO DONATE  */
      .why-to-donate{
        display: flex;
        justify-content: center;
        margin-left: 300px;
        width: 70%;
        margin-top: 80px;
        
      }
      .donate-reason{
        width: 70%;
        border: 4px solid rgb(154, 53, 53) ;
        border-radius: 8%;
        padding: 10px;
        color: rgb(0, 0, 0);
        font-style: italic;
        font-weight:500;

      }
      .donate-reason-head{
        margin-top: 150px;
        margin-left: 20px;
        border: 4px solid rgb(154, 53, 53) ;
        border-radius: 8%;
        height: 160px;
        text-align: center;
        padding: 4px;
        
      }

      /* PROVIDE LIST */
      .provide-list{
        display: flex;
        margin-top: 80px;
        margin-left: 250px;
        width: 80%;
      }
      .items-image{
        height: 400px;
        width: 40%;
        border: 4px solid rgb(154, 53, 53) ;
        border-radius: 5%;
      }
      .items-list{
        border: 4px solid rgb(154, 53, 53) ;
        border-radius: 8%;
        height: 180px;
        padding: 5px;
        width: 50%;
        margin-top: 120px;
        margin-left: 8px;
        font-style: italic;
        font-weight:500;
      }

      /* WAYS TO DONATE */
      .way-to-donate{
        margin-top: 100px;
        text-align: center;
      }
      .Qr-code{
        width: 30%;
        border: 4px solid black;
        margin: 40px auto;
        
      }

    </style>
</head>
<body>
    <?php
      include "navBar_Donation.php";
    ?>

    <!-- DONATION IMAGES -->

    <div class="donation-header">
      <div class="head">
        <div>DONATION</div>
      </div>
      <div class="donation-img-container">
        <img src="images/CLOTHES DONATION .png" class="img-fluid donation-img" alt="...">
      </div>
    </div>

    <!--WHY TO DONATE -->
    <div class="why-to-donate">
      <div class="donate-reason">
        At ASTITVA, we believe in the transformative power of compassion and generosity. As an NGO dedicated to making a positive impact in our community, we strive to encourage people to donate and support our noble cause. Our mission is simple but powerful: to create a ripple effect of kindness that uplifts the lives of those in need. <br>
        <br>
        Through our various initiatives, we provide food, clothing, books, and other essential resources to underprivileged children and their families. Education, we believe, is the greatest gift we can offer to uplift communities and break the cycle of poverty. <br>
        <br>
        But ASTITVA is not just about material donations. We also strive to create meaningful connections between individuals and communities. Through volunteer work, we invite people from all walks of life to come together and make a difference. By fostering a spirit of unity and compassion, we build strong bonds that transcend societal divisions. <br>
        <br>
        Join us on this incredible journey of giving back. Explore the joy of sharing and realize the immense impact of your actions. Your donation can spark a positive domino effect, inspiring others to join the cause, and ultimately creating a society where no one is left behind. <br>


      </div>
      <div class="donate-reason-head menu_bar">
        <h1><b> Why donate to <br> ASTITVA ?</b></h1>
        <button style=" margin-top: 20px;" type="button">DONATE NOW</button>
      </div>
    </div>

    <!--ITEMs you can provide -->
    <div class="provide-list">
      <div class="items-image">
        <img class="img-fluid" style="border-radius: 5%; height: inherit; width: fit-content; " src="https://files.globalgiving.org/pfil/18502/pict_featured_jumbo.jpg?t=1695816132000" alt="POOR CHILD">
      </div>
      <div class="items-list">

        -> Stationery (notebooks. Pencils, pens, erasers, sharpeners, scale, colours, colouring books, chart papers, chalks, markers) <br>
        -> Eatables: (milk, fruits, juices, samosa, chocolates, toffees, bread, muffins, chips) <br>
        -> Blankets, bedsheets, clothes, shoes, toys <br>
        -> Mats, fans, broom, tables, chairs, LED bulbs, handwash, sanitizer <br>
        -> Study material, school bags, uniform, boards <br>
      
      </div>
    </div>

    <!-- Direct Donation -->
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 100px;">
      <div class="head" style="display: flex; justify-content: center; align-items: center; flex-direction: column; width: 80%; padding-bottom: 20px; border-bottom: 4px solid black">
        <div style="display: flex; flex-direction: row; Column-gap: 20px;">
          DIRECT<div style="color: #00b4ed;">DONATIONS</div>IN
        </div>
        <p style="text-align: center; font-family: cursive;">Click on the donate button then fill the form apears bellow</p>
      </div>
      
    </div>

    <!--CHOICES AVALIABLE FOR DONATION-->
        <div style="display: flex; justify-content: center; align-items: center;">
            <div class="item-type">
                <div class="type1 menu_bar" style="border: 4px solid #cc0a0a;">
                    <div class="image"><img class="img-fluid"  src="images/water_bottle.jpeg" alt="Clothe TYPE"></div>
                    <div class="clothe-type"><h2><b> Water bottle </b></h2></div>
                    <a href="#form"><button style="margin-top: 30px;" type="button" onclick="change_html('water_bottle')">DONATE</button></a>
                </div>

                <div class="type1 menu_bar" style="border: 4px solid #ffcf00;">
                    <div class="image"><img class="img-fluid"  src="images/meal.jpeg" alt="Clothe TYPE"></div>
                    <div class="clothe-type"><h2><b> Meal </b></h2></div>
                    <a href="#form"><button style="margin-top: 30px;" type="button" onclick="change_html('meal')">DONATE</button></a>
                </div>

                <div class="type1 menu_bar" style="border: 4px solid #007900;">
                    <div class="image"><img class="img-fluid"  src="images/vector-shoe-glyph-black-icon.jpg" alt="Clothe TYPE"></div>
                    <div class="clothe-type"><h2><b> Footwear </b></h2></div>
                    <a href="#form"><button style="margin-top: 30px;" type="button" onclick="change_html('footwear')">DONATE</button></a>
                </div>
                
            </div>
        </div>

    <!--CHOICES AVALIABLE FOR DONATION-->
        <div style="display: flex; justify-content: center; align-items: center;">
            <div class="item-type">
                <div class="type1 menu_bar" style="border: 4px solid #cc0a0a;">
                    <div class="image"><img class="img-fluid"  src="images/learning_kit.jpeg" alt="Clothe TYPE"></div>
                    <div class="clothe-type"><h2><b> Learning Kit </b></h2></div>
                    <a href="#form"><button style="margin-top: 30px;" type="button" onclick="change_html('learning_kit')">DONATE</button></a>
                </div>

                <div class="type1 menu_bar" style="border: 4px solid #ffcf00;">
                    <div class="image"><img class="img-fluid"  src="images/bhandara.png" alt="Clothe TYPE"></div>
                    <div class="clothe-type"><h2><b> Bhandara </b></h2></div>
                    <a href="#form"><button style="margin-top: 30px;" type="button" onclick="change_html('bhandara')">DONATE</button></a>
                </div>

                <div class="type1 menu_bar" style="border: 4px solid #007900;">
                    <div class="image"><img class="img-fluid"  src="images/cow.png" alt="Clothe TYPE"></div>
                    <div class="clothe-type"><h2><b> Gau Seva </b></h2></div>
                    <a href="#form"><button style="margin-top: 30px;" type="button" onclick="change_html('gau_seva')">DONATE</button></a>
                </div>
                
            </div>
        </div>

        <!--  FORM   -->
        <div style="display: none; justify-content: center; align-items: center; flex-direction: column;" id="form">
                <div style="width: 70%; padding-bottom: 20px; border-bottom: 4px solid #dc3545;">
                    <h1 style="font-size: 50px; text-align: center;" id="clothe-type"></h1>
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

                    <label for="Massage" style="margin-bottom: 10px; margin-top: 10px;" id="type">
                        <span id="span-type"></span>
                        <abbr style="color: red; border: none; text-decoration: none;" title="Required">*</abbr>
                    </label>
                    <input style="width: 100%;" type="text" placeholder="" id="input-type">

                    <label for="Massage" style="margin-bottom: 10px; margin-top: 10px;" id="quantity">
                        <span>Quantity</span>
                    </label>
                    <input style="width: 100%;" type="number" placeholder="Quantity" oninput="validate(this.value)" id="input_quantity">

                    <div class="menu_bar" style="margin-top: 10px;">
                        <button  style="margin-inline: 0px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
          function change_html(option) {
            var form = document.getElementById('form');
            var type = document.getElementById('type');
            var quantity = document.getElementById('quantity');
            var input_quantity = document.getElementById('input_quantity');
            var clotheH1 = document.getElementById('clothe-type');
            var clotheSpan = document.getElementById('span-type');
            var clotheInput = document.getElementById('input-type');
            form.style.display = 'flex';
            quantity.style.display = 'flex';
            input_quantity.style.display = 'flex';
            type.style.display = 'flex';
            clotheInput.style.display = 'flex';
            if (option === 'water_bottle') {
                clotheH1.innerHTML = 'FORM FOR BOTTLE';
                type.style.display = 'none';
                clotheInput.style.display = 'none';
            } else if (option === 'meal') {
              clotheH1.innerHTML = 'FORM FOR MEAL';
              clotheSpan.innerHTML = 'Type';
              clotheInput.placeholder = 'Meal or Raw Ration'; 
            } else if (option === 'footwear') {
                clotheH1.innerHTML = 'FORM FOR FOOTWEARS';
                type.style.display = 'none';
                clotheInput.style.display = 'none'; 
            } else if (option === 'learning_kit') {
              clotheH1.innerHTML = 'FORM FOR KIT';
              type.style.display = 'none';
              clotheInput.style.display = 'none';
            } else if (option === 'bhandara') {
                clotheH1.innerHTML = 'FORM FOR BHANDARA';
                type.style.display = 'none';
                clotheInput.style.display = 'none';
                quantity.style.display = 'none';
                input_quantity.style.display = 'none'; 
            } else if (option === 'gau_seva') {
              clotheH1.innerHTML = 'FORM FOR GAU SEVA';
              type.style.display = 'none';
              clotheInput.style.display = 'none';
              quantity.style.display = 'none';
              input_quantity.style.display = 'none'; 
            }
          }

          function validate(Quantity) {
            var a = document.getElementById('quantity');
            if(Quantity >0){
                a.value = Quantity;
            } else {
                a.value = 1;
            }
          }
        </script>

    <!--  WAYS TO DONATE     -->
    <div class="way-to-donate menu_bar">
      <h1 style="font-size: 50px;"><b>DONATION OPTIONS</b></h1>
      <nav>
        <button style="margin-top: 8px;" class="donate-option" type="button" onclick="changeQR('Phone_pay')">Phone pay/UPI</button>
        <button style="margin-top: 8px;" class="donate-option" type="button" onclick="changeQR('neft')">NEFT/IMPS</button>
      </nav>
      <div class="Qr-code" id="donation">
        <img style="width: 100%;" src="images/QR.jpg" alt="Qr-code"> 
      </div>
    </div>

    <script>
      function changeQR(option) {
        var qrDiv = document.getElementById('donation');
        if (option === 'Phone_pay') {
          qrDiv.innerHTML = '<img style="width: 100%;" src="images/QR.jpg" alt="Qr-code">';
        } else if (option === 'neft') {
          qrDiv.innerHTML = "<p>Currently Not Accepting</p>"; 
        }
      }
    </script>

    <?php
        include "Contact_us_Below.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
 
    </div>
    
</body>
</html>