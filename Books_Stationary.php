<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>

    <?php
      include "navBar_Donation.php";
    ?>

    <div class="parent-container">

        <!--HEADER-->
        <div class="donation-name">
            <H1 style="font-size: 50px; padding: 20px; text-align: center;"><b>BOOKS AND <br>STATIONARY DONATION</b></H1>
        </div>
        <p style="text-align: center; font-family: cursive;">Click on the donate button then fill the form apears bellow</p>
        <div>

        <!--CHOICES AVALIABLE FOR DONATION-->
        <div style="display: flex; justify-content: center; align-items: center;">
            <div class="item-type">
                <div class="type1 menu_bar" style="border: 4px solid #cc0a0a;">
                    <div class="image"><img class="img-fluid"  src="images/books_icon.png" alt="Books TYPE"></div>
                    <div class="clothe-type"><h2><b> Books </b></h2></div>
                    <a href="#form"><button style="margin-top: 30px;" type="button" onclick="change_html('books')">DONATE</button></a>
                </div>

                <div class="type1 menu_bar" style="border: 4px solid #ffcf00;">
                    <div class="image"><img class="img-fluid"  src="images/stationary_icon.jpg" alt="Stationary TYPE"></div>
                    <div class="clothe-type"><h2><b> Stationary </b></h2></div>
                    <a href="#form"><button style="margin-top: 30px;" type="button" onclick="change_html('stationary')">DONATE</button></a>
                </div>
                
            </div>
        </div>

        <!--  FORM   -->
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;" id="form">
                <div style="width: 70%; padding-bottom: 20px; border-bottom: 4px solid #dc3545;">
                    <h1 style="font-size: 50px; text-align: center;" id="books-type"> FORM FOR BOOKS</h1>
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
                        <span id="span-type">Name of Books</span>
                        <abbr style="color: red; border: none; text-decoration: none;" title="Required">*</abbr>
                    </label>
                    <input style="width: 100%;" type="text" placeholder="Name of Books" id="input-type">

                    <label for="Massage" style="margin-bottom: 10px; margin-top: 10px;">
                        <span>Quantity</span>
                    </label>
                    <input style="width: 100%;" type="number" placeholder="Quantity" oninput="validate(this.value)" id="quantity">

                    <div class="menu_bar" style="margin-top: 10px;">
                        <button  style="margin-inline: 0px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script>
      function change_html(option) {
        console.log("Function called with option:", option);
        var booksH1 = document.getElementById('books-type');
        var booksSpan = document.getElementById('span-type');
        var booksInput = document.getElementById('input-type');
        if (option === 'books') {
            booksH1.innerHTML = 'FORM FOR BOOKS';
            booksSpan.innerHTML = 'Name of Books';
            booksInput.placeholder = 'Name of Books';
        } else if (option === 'stationary') {
            booksH1.innerHTML = 'FORM FOR STATIONARY';
            booksSpan.innerHTML = 'Type of Stationary';
            booksInput.placeholder = 'Example: Pen, Notebooks, bags, geometry box, etc'; 
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

    <?php
        include "Contact_us_Below.php";
    ?>





















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
</body>
</html>