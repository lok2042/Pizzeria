<?php
    include 'dbConfig.php';
            
    $sql = "SELECT `username` FROM `account` ORDER BY `account_id`";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['username'].": ".md5($row['username'])."<br>";
        }
    }

    $conn->close();
?>