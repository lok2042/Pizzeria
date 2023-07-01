<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Pizzeria</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Ubuntu:300,400,700&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/pizza.png" sizes="64x64" type="image/png">
  </head>
  <body>
    
    <!-- Header and Navigation -->
    <div class="header">
      <header>
        <img id="main-logo" src="images/logo.jpg" alt="Pizzeria's Logo">
        <h1>Pizzeria</h1>
        <p>Proudly Serving Our Best Pizzas Since 1989</p>
        <?php
          if(isset($_SESSION["customer_id"])) {
            echo "<button type='button' id='logout-btn' onclick='logout()'>Log Out</button>";
          }
        ?>
      </header>
      <nav>
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#menu-heading">View Menu</a>
        <a class="nav-link" href="#reservation-heading">Make Reservation</a>
        <a class="nav-link" href="#about-us-heading">About Us</a>
        <a class="nav-link" href="#find-us-heading">Find Us</a>
        <a class="nav-icon" href="includes/account.php"><img src="images/profile.jpg" alt="Account"></a>
      </nav>
    </div>

    
    <!-- Main Section -->
    <div class="main">

      <!-- Latest Events, Today's Specials, Promotions, Limited-timed Deals -->
      <div class="whatsup-div">
        <div class="whatsup"></div>
      </div>

      <!-- Welcome Message -->
      <div class="welcome-div">
        <p>Welcome to Pizzeria! 🍕🍝🥤</p>
        <?php
          if(!isset($_SESSION["customer_id"])) {
            echo '<p>Please <a href="includes/account.php">login</a> if you already have an account with us. If not, <a href="includes/account.php">register</a> an account for free.</p><p>With an account, you can make reservations with us. 🍽️</p>';
          }
        ?>
        <p>Do take note that at any given time, we only accept a maximum of 20 customers in our restaurant. ‼️</p>
        <p>So, please make your reservations at least a week earlier. 📅</p>
      </div>
    
      <!-- Menu -->
      <div class="menu">
        <h2 id="menu-heading">Menu</h2>
        <form id="filter-products-form">
          <select id="select-product-options" name="category" onchange="getProducts(this.value)">
            <option value="all" selected>-- All Items --</option>
            <option value="1">Classic Pizza</option>
            <option value="2">Premium Pizza</option>
            <option value="3">Pasta</option>
            <option value="4">Sides</option>
            <option value="5">Salad</option>
            <option value="6">Desserts</option>
            <option value="7">Drinks</option>
          </select>
        </form>
        <div id="menu">
          <?php include 'includes/getAllProducts.php' ?>
        </div>
      </div>

      <!-- Make Reservation -->
      <div class="reservation">
        <h2 id="reservation-heading">Make a Reservation</h2>
        <?php
          if(isset($_SESSION["customer_id"])) {
            include 'includes/res_form.html';
          }
          else {
            echo "<p>Please <a href='includes/account.php'>login</a> first</p>";
          }
        ?>
      </div>
      
      <!-- About Us -->
      <div class="about-us">
        <div class="about-us-1">
          <img id="about-logo" src="images/logo.jpg" alt="Pizzeria's Logo">
        </div>
        <div class="about-us-2">
          <h2 id="about-us-heading">ABOUT US</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <p>Find more at <a href="https://github.com/lok2042" target="_blank">lok2024</a>
        </div>
      </div>

    </div>

    
    <!-- Footer Area -->
    <div class="footer">

      <!-- Find Us -->
      <div class="find-us">
        <div class="find-us-1">
          <h2>Find Us</h2>
          <img id="contact-storefront" src="images/shop.jpg" alt="Pizzeria Storefront">
          <p id="contact-address"><i style='font-size:20px' class='fas'>&#xf3c5;</i> No. 40, Jalan Medan Ipoh 1B, Medan Ipoh Bestari, 31400 Ipoh, Perak</p>
          <table id="contact-op-hours-table">
            <tr>
              <th>Monday</th>
              <td>Closed</td>
            </tr>
            <tr>
              <th>Tuesday</th>
              <td>5:30 to 11.00pm</td>
            </tr>
            <tr>
              <th>Wednesday</th>
              <td>5:30 to 11.00pm</td>
            </tr>
            <tr>
              <th>Thursday</th>
              <td>5:30 to 11.00pm</td>
            </tr>
            <tr>
              <th>Friday</th>
              <td>5:30 to 11:30pm</td>
            </tr>
            <tr>
              <th>Saturday</th>
              <td>5:30 to 11:30pm</td>
            </tr>
            <tr>
              <th>Sunday</th>
              <td>5:30 to 11.00pm</td>
            </tr>
          </table>
          <br>
          <a href="#contact-social-span" class="fa fa-facebook"></a>
          <a href="#contact-social-span" class="fa fa-instagram"></a>
          <a href="#contact-social-span" class="fa fa-linkedin"></a>
          <a href="#contact-social-span" class="fa fa-twitter"></a>
          <a href="#contact-social-span" class="fa fa-reddit"></a>
        </div>
        <div class="find-us-2">
          <h2 id="find-us-heading">Contact Us</h2>
          <form class="contact-form" action="includes/inquire.php" method="post">
            <label class="contact-form-label">Name</label>
            <input class="contact-form-input" type="text" name="name" placeholder="Your name.." maxlength="30" required>
            <label class="contact-form-label">Contact Number</label>
            <input class="contact-form-input" type="text" name="contact" placeholder="Your contact number.." maxlength="30" required> 
            <label class="contact-form-label">Email Address</label>
            <input class="contact-form-input" type="text" name="email" placeholder="Your email something.." maxlength="30" required>
            <label class="contact-form-label">Leave Your Message / Inquiry</label>
            <textarea class="contact-form-textarea" name="message" id="message" placeholder="Write something.." minlength="10" required></textarea>
            <input class="contact-form-button" type="submit" name="send" value="Send">
          </form>
        </div>
        <div class="find-us-3">
          <h2>Live Support</h2>
          <img src="images/contact_support.png" alt="Contact Support">
          <p>Feel free to ask our representative any questions directly!</p>
          <button type="button" name="button">Contact</button>
        </div>
      </div>

      <!-- Payment Options -->
      <div class="payments">
        <h2>We Accept</h2>
        <div class="payments-wrapper">
          <img class="payment-methods-img" src="images/payment-debit.png" alt="Debit Payment Options">
          <img class="payment-methods-img" src="images/payment-credit.png" alt="Credit Payment Options">
        </div>
      </div>

      <!-- Footer Information -->
      <footer>
        Privacy & Cookies Policy &nbsp; | &nbsp; Web Terms of Use &nbsp; | &nbsp; Customer Terms & Conditions &nbsp; | &nbsp; Accesibility <br><br>
        Copyright &copy; 2021 Pizzeria. All Rights Reserved.
      </footer>

    </div>
  </body>
  <script src="script.js"></script>
</html>
