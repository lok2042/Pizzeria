<!DOCTYPE html>
<?php session_start() ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | Pizzeria</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Ubuntu:300,400,700&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/pizza.png" sizes="64x64" type="image/png">
  </head>
  <body>
    
    <!-- Header and Navigation -->
    <div class="header">
      <header>
        <img id="main-logo" src="../images/logo.jpg" alt="Pizzeria's Logo">
        <h1>Pizzeria</h1>
        <p>Proudly Serving Our Best Pizzas Since 1989</p>
        <?php
          if(isset($_SESSION["customer_id"])) {
            echo "<button type='button' id='logout-btn' onclick='logout()'>Log Out</button>";
          }
        ?>
      </header>
      <nav>
        <a class="nav-link" href="../index.php">Home</a>
        <a class="nav-link" href="../index.php#menu-heading">View Menu</a>
        <a class="nav-link" href="../index.php#reservation-heading">Make Reservation</a>
        <a class="nav-link" href="../index.php#about-us-heading">About Us</a>
        <a class="nav-link" href="../index.php#find-us-heading">Find Us</a>
        <a class="nav-icon" href="#"><img src="../images/profile.jpg" alt="Account"></a>
      </nav>
    </div>

    
    <!-- Main Section -->
    <div class="main">
      <?php
          if(isset($_SESSION["customer_id"])) {

            // Reservations made
            include 'reservations.php';
            
            // Customer's profile
            include 'profile.php';

            // Change password
            include 'changePasswordForm.html';
          }
          else {
            // Login / Register Forms
            include 'forms-container.html';
          }
      ?>
    </div>
    
    <!-- Footer Area -->
    <div class="footer">
      <!-- Footer Information -->
      <footer>
        Privacy & Cookies Policy &nbsp; | &nbsp; Web Terms of Use &nbsp; | &nbsp; Customer Terms & Conditions &nbsp; | &nbsp; Accesibility <br><br>
        Copyright &copy; 2021 Pizzeria. All Rights Reserved.
      </footer>
    </div>

  </body>
  <script>
    function logout() {
      var logout = confirm('Are you sure you want to log out?');
      if(logout) {
        window.location.href = 'logout.php';
      }
    }
  </script>
</html>
