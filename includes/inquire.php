<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['send'])) {

        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        include 'dbConfig.php';

        $date = new DateTime("now", new DateTimeZone('Asia/Kuala_Lumpur') );
        $timestamp = $date->format('Y-m-d H:i:s');

        $sql = "INSERT INTO `inquiry` (`name`, `contact`, `email`, `message`, `time_stamp`) VALUES ('$name', '$contact', '$email', '$message', '$timestamp');";

        if($conn->query($sql) === TRUE) {
            $success = true;
        }
    
        $conn->close();
    
        if($success) {
            $message = "Your inquiry has been sent. Contact support if you do not receive any response via a phone call or email within 3 working days.";
        }
        else {
            $message = "Sorry, inquiry cannot be sent at the moment. Contact support for help.";
        }
    
        echo "<script>
                alert('".$message."');
                location = '../index.php#find-us-heading';
            </script>";
    }
?>