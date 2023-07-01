<?php 
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login'])) {

      // Username and Password
      $user = $_POST['username'];
      $pass = $_POST['password'];
      $encrypted_password = md5($pass);

      include 'dbConfig.php';
      $sql = "SELECT customer_id FROM `account` WHERE `username` = '$user' AND `password` = '$encrypted_password'";
      $result = $conn->query($sql);

      // Checks the password
      $success = false;
      if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["customer_id"] = $row['customer_id'];
        $success = true;
      }

      $conn->close();

      if($success) {
        header('Location: account.php');
      }
      else {
        echo "<script>
                alert('Login Failed: No match for Username and/or Password.')
                location = 'account.php';
              </script>";
      }
    }
?>