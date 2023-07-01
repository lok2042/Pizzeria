<?php 
    include 'dbConfig.php';
            
    $customer_id = $_SESSION["customer_id"];
    $sql = "SELECT `date`, `time`, `pax`, `message` FROM `reservation` WHERE `customer_id` = '$customer_id';";

    $result = $conn->query($sql);
          
    echo "<div class='reservations-list-container'>
            <h2 class='account-page-h2'>My Reservations</h2>
            <div class='reservation-message-container'>
                <img src='../images/info.png' alt='More Info'>
                <p>If you wish to cancel or modify a reservation, please contact us at least 24 hours earlier at <b>(123) 1234 - 12345</b> or <b>pizzeria.admin@gmail.com</b></p>
            </div>";

    $count = 1;
    if($result->num_rows > 0) {
        
        echo "<table class='reservations-list-table'>
                <tr>
                    <th class='reservations-list-header'>#</th>
                    <th class='reservations-list-header'>Date</th>
                    <th class='reservations-list-header'>Time</th>
                    <th class='reservations-list-header'>Pax</th>
                    <th class='reservations-list-header last-item'>Message</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td class='reservations-list-data'>".$count."</td>    
                    <td class='reservations-list-data'>".$row['date']."</td>    
                    <td class='reservations-list-data'>".$row['time']."</td>
                    <td class='reservations-list-data'>".$row['pax']."</td>
                    <td class='reservations-list-data last-item'>".$row['message']."</td>
                </tr>";

            $count++;
        }
    }
    else {
        echo "<p>You haven't made any reservations yet.</p>";
    }

    echo "</table></div>";

    $conn->close();
?>

<script>
    function popup() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
</script>