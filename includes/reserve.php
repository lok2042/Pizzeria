<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['reserve'])) {
        $res_date = $_POST['res_date'];
        $res_time = $_POST['res_time'];
        $res_pax = $_POST['res_pax'];
        $res_message = $_POST['res_message'];
        $res_customer_id = $_SESSION['customer_id'];

        include 'dbConfig.php';

        // Ensure number of customers half an hour before and 
        // one hour after the reservation time does not exceed 20
        $before = date('H:i:s', strtotime($res_time) - 1800);
        $after = date('H:i:s', strtotime($res_time) + 3600);
        $sql = "SELECT SUM(`pax`) AS sum FROM `reservation` WHERE `date` = '$res_date' AND `time` >= '$before' AND `time` <= '$after';";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $sum = $row['sum'];
        }


        if ($sum + $res_pax > 20) {
            echo "<script>
                    alert('Sorry, your reservation cannot be made because we are overbooked. Try another one.');
                    location = '../index.php#reservation-heading';
                  </script>";
        } 
        else {
            $date = new DateTime("now", new DateTimeZone('Asia/Kuala_Lumpur') );
            $timestamp = $date->format('Y-m-d H:i:s');

            $sql = "INSERT INTO `reservation` (`date`, `time`, `pax`, `message`, `timestamp`, `customer_id`) VALUES ('$res_date', '$res_time', '$res_pax', '$res_message', '$timestamp', '$res_customer_id');";

            if($conn->query($sql) === TRUE) {
                $success = true;
            }
    
            $conn->close();
    
            if($success) {
                $message = "Your reservation has been saved. We hope to see you soon.";
            }
            else {
                $message = "Sorry, your reservation cannot be made at the moment. Contact support for help.";
            }
    
            echo "<script>
                    alert('".$message."');
                    location = '../index.php#reservation-heading';
                  </script>";
        }
    }
?>