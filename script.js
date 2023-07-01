function getProducts(category) {
  if (category == "") {
    return;
  }
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("menu").innerHTML = this.responseText;
    }
  }
  xmlhttp.open("GET", "includes/getProducts.php?q="+category, true);
  xmlhttp.send();
}

function logout() {
  var logout = confirm('Are you sure you want to log out?');
  if(logout) {
    window.location.href = 'includes/logout.php';
  }
}

