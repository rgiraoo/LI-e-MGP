<!DOCTYPE html>
<html lang="en">


<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // Redirect the user to the login page
  header('Location: register.html');
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

            <span class="logo_name">Grocery List</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li style="border-bottom: 0px; padding-bottom: 0px;"><a href="index2.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Flyers</span>
                </a></li>
                <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="#">
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
                <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="register.html">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Login/Register</span>
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
    
        <main class="caixa">
            <div class="main_container">
                <div id="container">
                    <div class="correcao">
                    <button id="printButton" onclick="printDocument('print')">Print your bill</button>
                    <div id = "print">
                    <table class="dynamic-row" align="center">
                      <thead>
                        <tr>
                          <td style="color: white;">
                            Product Name
                          </td>
                          <td style="color: white;">
                            Unit
                          </td>
                          <td style="color: white;">
                            Unit Price
                          </td>
                          <td style="color: white;">
                            Total
                          </td>
                          <td style="color: white;">
                            Edit/Delete
                          </td>
                        </tr>
                      </thead>
                    </table>
                    <div id="invoice" style="color: white;">
                      <table align="center" class="dynamic-row">
                        <tbody id="dynamic-row">
                        </tbody>
                      </table>
                    </div>
                    <table class="dynamic-row" align="center">
                      <tr id="grand-total">
                        <td style="color: white;">
                          <h5>Grand Total :</h5>
                        </td>
                        <td style="color: white;" id="grand-total-1">0</td>
                      </tr>
                    </table>
                    </div>
                    <br />
                    <div class="input-area">
                      <input
                        type="text"
                        class="input-boxes"
                        id="product-name"
                        placeholder="Product Name"
                        required
                      />
                      <input
                        type="number"
                        class="input-boxes"
                        id="unit-price"
                        placeholder="Unit Price"
                        required
                      />
                      <input
                        type="number"
                        class="input-boxes"
                        id="unit"
                        placeholder="Unit"
                        required
                      />
                      <button id="add" onclick="addItem()">Add</button>
                    </div>
                    </div>
                  </div>    
            </div>
            
    </main>

    <script src="gcgc.js"></script>
</body>

</html>