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
    <link rel="stylesheet" href="index2.css">
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
                <li><a href="index2.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="dashboard.html">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Flyers</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Near Stores</span>
                </a></li>
                <li><a href="mysuper.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">My Supermarket</span>
                </a></li>
                <li><a href="gcgc.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Grocery List</span>
                </a></li>
                
               
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
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

        <div class="dash-content">
            <div class="overview">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Bought</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Product</span>
                        <span class="data-list">Apples</span>
                        <span class="data-list">Chocolate</span>
                        <span class="data-list">Rice</span>
                        <span class="data-list">Pasta</span>
                        <span class="data-list">Beer</span>
                        <span class="data-list">Cheese</span>
                        <span class="data-list">Coca-Cola</span>
                    </div>
                    
                    <div class="data joined">
                        <span class="data-title">Quantity</span>
                        <span class="data-list">12</span>
                        <span class="data-list">3</span>
                        <span class="data-list">8</span>
                        <span class="data-list">14</span>
                        <span class="data-list">47</span>
                        <span class="data-list">16</span>
                        <span class="data-list">3</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">Fruit</span>
                        <span class="data-list">Food</span>
                        <span class="data-list">Food</span>
                        <span class="data-list">Food</span>
                        <span class="data-list">Drink</span>
                        <span class="data-list">Food</span>
                        <span class="data-list">Drink</span>
                    </div>

                    <div class="data type">
                        <span class="data-title">Member</span>
                        <span class="data-list">Dad</span>
                        <span class="data-list">Sister</span>
                        <span class="data-list">Dad</span>
                        <span class="data-list">Mom</span>
                        <span class="data-list">Alex</span>
                        <span class="data-list">Tomas</span>
                        <span class="data-list">Uncle</span>
                    </div>



                    
                </div>
            </div>
        </div>
    </section>








    <script src="index2.js"></script>
</body>

</html>