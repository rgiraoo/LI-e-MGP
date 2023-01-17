<!DOCTYPE html>
<html lang="en">





<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // Redirect the user to the login page
  header('Location: register.php');
  exit;
}
?>







<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grocery List</title>
  <link rel="stylesheet" href="gcgc.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<body>
  <nav>
    <div class="logo-name">
      <div class="logo-image">
        <!--<img src="images/logo.png" alt="">-->
      </div>

      <span class="logo_name">BesTCart</span>
    </div>

    <div class="menu-items">
      <ul class="nav-links">
        <li style="border-bottom: 0px; padding-bottom: 0px;"><a href="index2.php">
            <i class="uil uil-estate"></i>
            <span class="link-name">Home</span>
          </a></li>
        <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="dashboard.php">
            <i class="uil uil-comments"></i>
            <span class="link-name">Dashboard</span>
          </a></li>
        <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="flyers.php">
            <i class="uil uil-files-landscapes"></i>
            <span class="link-name">Flyers</span>
          </a></li>
        <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="nearstores.php">
            <i class="uil uil-chart"></i>
            <span class="link-name">Near Stores</span>
          </a></li>
        <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="mysuper.php">
            <i class="uil uil-thumbs-up"></i>
            <span class="link-name">My Supermarket</span>
          </a></li>
        <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="gcgc.php">
            <i class="uil uil-comments"></i>
            <span class="link-name">Grocery List</span>
          </a></li>

      </ul>

      <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

        <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;" class="mode">
          <a href="#">
            <i class="uil uil-moon"></i>
            <span class="link-name">Dark Mode</span>
          </a>

          <div class="mode-toggle">
            <span class="switch"></span>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <section class="dashboard">
    <div class="top">
      <i class="uil uil-bars sidebar-toggle"></i>

      <div class="search-box">
        <i class="uil uil-search"></i>
        <input type="text" placeholder="Search here...">
      </div>

      <!--<img src="images/profile.jpg" alt="">-->
    </div>




    



    


    <form id="product-form" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <label for="price">Unit Price:</label>
    <input type="text" id="price" name="price"><br>
    <label for="units">Units:</label>
    <input type="text" id="units" name="units"><br>
    <input type="submit" value="Add Product">
    <input type="button" value="Print Table" onclick="printTable()">

   

</form>


<table id="product-table">
    <tr>
        <th>Name</th>
        <th>Unit Price</th>
        <th>Units</th>
    </tr>

    <tr id="total-row">
        <td id="teste1">Total</td>
        <td id="total-col"></td>
    </tr>
</table>









<script>
    // Get the form and the table elements
    const form = document.getElementById('product-form');
    const table = document.getElementById('product-table');
    let total = 0;
    // Add a submit event listener to the form
    form.addEventListener('submit', e => {
        e.preventDefault(); // prevent the form from submitting

        // Get the form data
        const name = document.getElementById('name').value;
        const price = document.getElementById('price').value;
        const units = document.getElementById('units').value;

        // Create a new FormData object to send the form data in the request
        const formData = new FormData();
        formData.append('name', name);
        formData.append('price', price);
        formData.append('units', units);

        // Send a POST request to the PHP script
        fetch('create_product.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Check if the product was added successfully
            if (data.success) {
                // Create a new row for the product
                const row = document.createElement('tr');
                const nameCol = document.createElement('td');
                nameCol.innerHTML = name;
                const priceCol = document.createElement('td');
                priceCol.innerHTML = price;
                const unitsCol = document.createElement('td');
                unitsCol.innerHTML = units;

                // Append the columns to the row
                row.appendChild(nameCol);
                row.appendChild(priceCol);
                row.appendChild(unitsCol);

                // Append the row to
                // Append the row to the table
                table.appendChild(row);

                // Clear the form
                form.reset();

                // update the total
                total += price * units;
                const totalRow = document.getElementById('total-row');
                const totalCol = document.getElementById('total-col');
                totalCol.innerHTML = total;
                totalCol.style.backgroundColor = "gray";
                totalCol.style.fontWeight = "bold";
                totalRow.style.backgroundColor = "gray";
                totalRow.style.fontWeight = "bold";
                teste1.style.backgroundColor= "grey";
            } else {
                // Show an error message
                alert('Error: ' + data.message);
            }
        });
    });
</script>



<script>
  function printTable() {
    window.print();
}
</script>





  










    



   







    </main>

    <script src="gcgc.js"></script>
</body>

</html>