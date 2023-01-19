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
    <title>Flyers</title>
    <link rel="stylesheet" href="Flyers.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Dosis:600' rel='stylesheet' type='text/css'>
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
                <li><a href="index2.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="dashboard.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="flyers.php">
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
                <input type="text" id="mySearch" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
<br><br>
<aside>
  <div class="caixa_br">
    <h1>Select your Supermarket</h1>
    <div class="grid-container">
        <div class="grid-item"><a href="flyers/jumbo.pdf"><img src="flyers/jumbo.png" alt="cant load" height="130" width="130"></div>
        <div class="grid-item"><a href="flyers/continente.pdf"><img src="flyers/conti.png" alt="cant load" height="100" width="100"></div>  
        <div class="grid-item"><a href="flyers/pingodoce.pdf"><img src="flyers/pingodoce.png" alt="cant load" height="100" width="100"></div>
        <div class="grid-item"><a href="flyers/lidl.pdf"><img src="flyers/lidl.png" alt="cant load" height="100" width="100"></div>
        <div class="grid-item"><a href="flyers/intermarche.pdf"><img src="flyers/intermarche.png" alt="cant load" height="100" width="100"></div>  
        <div class="grid-item"><a href="flyers/minipreco.pdf"><img src="flyers/minipreco.png" alt="cant load" height="100" width="100"></div>
        <div class="grid-item"><a href="flyers/aldi.pdf"><img src="flyers/aldi.png" alt="cant load" height="100" width="120"></div>
     
  </div>
</aside>
<script src="Flyers.js"></script>
</body>
</html>