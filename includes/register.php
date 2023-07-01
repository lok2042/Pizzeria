<?php 
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register'])) {
        
        include 'dbConfig.php';

        // Personal Details
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        // Username and Password
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $re_pass = $_POST['re_password'];

        // Check password and re-password
        if(strcmp($pass, $re_pass) == 0) {

            // md5 encryption
            $encrypted_password = md5($pass);

            // INSERT sql statements
            $sql = "INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) VALUES ('$fname', '$lname', '$dob', '$contact', '$email');";
            
            if($conn->query($sql) === TRUE) {
                $customer_id = $conn->insert_id;

                $sql = "INSERT INTO `account` (`username`, `password`, `customer_id`) VALUES ('$user', '$encrypted_password', '$customer_id');";

                // Registration processing
                $success = false;
                if($conn->query($sql) === TRUE) {
                  $success = true;
                  $_SESSION["customer_id"] = $customer_id;
                }
                $conn->close();
    
                if($success == true) {
                    header('Location: account.php');
                }
                else {
                    echo "<script>
                            alert('Sorry, your account cannot be registered.')
                            location = 'account.php';
                          </script>";
                }
            }
            else {
                echo "<script>
                        alert('Sorry, your account cannot be registered.')
                        location = 'account.php';
                    </script>";
            }
        }
        else {
            echo "<script>
                    alert('Your passwords do not match!')
                    location = 'account.php';
                  </script>";
        }
        
    }
?>