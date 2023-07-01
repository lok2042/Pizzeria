<?php
  include 'dbConfig.php';

  $category = $_GET['q'];

  if($category == "all") {
    $sql = "SELECT `name`, `image`, `description` FROM `menu_item`";
  }
  else {
    $sql = "SELECT `name`, `image`, `description` FROM `menu_item` WHERE `category_id` = '$category'";
  }

  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='menu-item'>
              <span class='product-name'><b>".$row['name']."</b></span>
              <img class='product-img' src='images/".$row['image']."' alt='A menu item'>
              <span class='product-desc'><p>".$row['description']."</p></span>
            </div>";
    }
  }
  else {
    echo "Sorry. Our menu cannot be displayed at the moment.";
  }

  $conn->close();
?>
