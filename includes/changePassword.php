<?php
  session_start();

  if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['changePassword'])) {
        
    // Passwords
    $customer_id = $_SESSION['customer_id'];
    $pass = $_POST['password'];
    $re_pass = $_POST['re_password'];

    // Check password and re-password
    if(strcmp($pass, $re_pass) == 0) {
        include 'dbConfig.php';

        // md5 encryption
        $new_encrypted_password = md5($pass);

        $sql = "UPDATE `account` SET `password` = '$new_encrypted_password' WHERE `id` = '$customer_id';";

        if($conn->query($sql) === TRUE) {
            $success = true;
        }

        $conn->close();

        if($success == true) {
            $message = "Success! Your password has been reset.";
        }
        else {
            $message = "Sorry, your password cannot be reset.";
        }
    }
    else {
        $message = "Your passwords do not match!";
    }

    echo "<script>
            alert('".$message."');
            location = 'account.php';
          </script>";
  }
?>
