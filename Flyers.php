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
    <title>Document</title>
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

        <div class="menu-items" id="myMenu">
            <ul class="nav-links">
                <li><a href="index2.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="dashboard.html">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="flyers.php">
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
                <li><a href="register.html">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Login/Register</span>
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
                <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
<br><br>
<aside>
  <div class="caixa_br">
    <h1>Select your Supermarket</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis egestas dolor ac aliquet mollis. In ac ipsum enim. Nulla pharetra sollicitudin magna.</p>
    <div class="grid-container">
        
       
        <div class="grid-item"><a href="jumbo.pdf"><img src="conti.png" alt="cant load" height="100" width="100"></div>
        <div class="grid-item"><a href="jumbo.pdf"> <img src="conti.png" alt="cant load" height="100" width="100"></div>  
        <div class="grid-item"><a href="jumbo.pdf"><img src="conti.png" alt="cant load" height="100" width="100"></div>
        <div class="grid-item"><a href="jumbo.pdf"><img src="conti.png" alt="cant load" height="100" width="100"></div>
        <div class="grid-item"><a href="jumbo.pdf"><img src="conti.png" alt="cant load" height="100" width="100"></div>  
        <div class="grid-item"><a href="jumbo.pdf"><img src="conti.png" alt="cant load" height="100" width="100"></div>
        <div class="grid-item"><a href="jumbo.pdf"><img src="conti.png" alt="cant load" height="100" width="100"></div>
     
  </div>
</aside>
<script src="Flyers.js"></script>
</body>
</html>