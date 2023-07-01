<?php
  include 'dbConfig.php';

  $sql = "SELECT `name`, `image`, `description` FROM `menu_item`";
  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='menu-item'>
              <span><b class='product-name'>".$row['name']."</b></span>
              <img class='product-img' src='images/".$row['image']."' alt='A menu item'>
              <span><p class='product-desc'>".$row['description']."</p></span>
            </div>";
    }
  }
  else {
    echo "Sorry. Our menu cannot be displayed at the moment.";
  }

  $conn->close();
?>
