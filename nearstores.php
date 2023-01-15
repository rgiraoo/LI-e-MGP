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
    <link rel="stylesheet" href="nearstores.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>


<body>



<div class="mapa">
    <iframe src="https://my.atlistmaps.com/map/f59f2988-ffed-4b48-8a98-e5a5f048d1e6?share=true" allow="geolocation" width="100%" height="700px" frameborder="0" scrolling="no" allowfullscreen></iframe>
</div>


    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">BesTCart</span>
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
                <li><a href="nearstores.php">
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
    </section>






    <script src="nearstores.js"></script>
</body>

</html>