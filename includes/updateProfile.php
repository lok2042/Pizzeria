<?php
  session_start();

  if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update'])) {
        
    include 'dbConfig.php';

    // Personal Details
    $customer_id = $_SESSION['customer_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];


    $sql = "UPDATE `customer` 
            SET `first_name` = '$fname',
                `last_name` = '$lname',
                `date_of_birth` = '$dob',
                `contact` = '$contact',
                `email` = '$email'
            WHERE `customer_id` = '$customer_id';";

    if($conn->query($sql) === TRUE) {
      $success = true;
    }

    $conn->close();

    if($success == true) {
      $message = "Your personal details has been updated successfully!";
    }
    else {
      $message = "Sorry, your profile cannot be updated.";
    }

    echo "<script>
            alert('".$message."');
            location = 'account.php';
          </script>";
  }
?>
