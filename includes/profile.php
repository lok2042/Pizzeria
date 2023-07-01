<?php 
    include 'dbConfig.php';
            
    $customer_id = $_SESSION["customer_id"];
    $sql = "SELECT *  FROM `customer` WHERE `customer_id` = '$customer_id';";

    $result = $conn->query($sql);
          
    echo "<div class='customer-profile'>";

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
              
        echo "<h2 class='account-page-h2'>My Profile</h2>
            <div id='detailsDiv'>
                <table class='customer-details-table'>
                    <tr>
                        <th class='customer-details-table-header'>First Name</th>
                        <td class='customer-details-table-data'>".$row['first_name']."</td>
                    </tr>
                    <tr>
                        <th class='customer-details-table-header'>Last Name</th>
                        <td class='customer-details-table-data'>".$row['last_name']."</td>
                    </tr>
                    <tr>
                        <th class='customer-details-table-header'>Date of Birth</th>
                        <td class='customer-details-table-data'>".$row['date_of_birth']."</td>
                    </tr>
                    <tr>
                        <th class='customer-details-table-header'>Contact Number</th>
                        <td class='customer-details-table-data'>".$row['contact']."</td>
                    </tr>
                    <tr>
                        <th class='customer-details-table-header'>Email Address</th>
                        <td class='customer-details-table-data'>".$row['email']."</td>
                    </tr>
                </table>
                <button class='submit-button' type='button' onclick='showUpdateForm()'>Update</button>
            </div>
            <div id='updateFormDiv' class='account-page-form-container no-display'>
                <button id='x-btn' type='button' onclick='hideUpdateForm()'>&#10006;</button>
                <h3>Profile Update</h3>
                <form class='account-page-form' action='updateProfile.php' method='post'>
                    <label class='account-page-label'>First Name</label>
                    <input class='account-page-input' type='text' name='fname' value='".$row['first_name']."' required>
                    <label class='account-page-label'>Last Name</label>
                    <input class='account-page-input' type='text' name='lname' value='".$row['last_name']."' required>
                    <label class='account-page-label'>Date of Birth</label>
                    <input class='account-page-input' type='date' name='dob' value='".$row['date_of_birth']."' required>
                    <label class='account-page-label'>Contact Number</label>
                    <input class='account-page-input' type='text' name='contact' value='".$row['contact']."' required>
                    <label class='account-page-label'>Email Address</label>
                    <input class='account-page-input' type='text' name='email' value='".$row['email']."' required>
                    <input class='submit-button' type='submit' name='update' value='Update'>
                </form>
            </div>
            <script>
                // Display Update Form and Hide Profile Table
                function showUpdateForm() {
                    var detailsDiv = document.getElementById('detailsDiv');
                    detailsDiv.classList.add('no-display');
                    var updateFormDiv = document.getElementById('updateFormDiv');
                    updateFormDiv.classList.remove('no-display');
                }
                // Hide Update Form and Show Profile Table
                function hideUpdateForm() {
                    var detailsDiv = document.getElementById('detailsDiv');
                    detailsDiv.classList.remove('no-display');
                    var updateFormDiv = document.getElementById('updateFormDiv');
                    updateFormDiv.classList.add('no-display');
                }
            </script>";
    }
    else {
        echo "<p>Sorry, something went wrong :(</p>";
    }

    echo "</div>";

    $conn->close();
?>