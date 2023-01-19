<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT name, units FROM products";
$result = $conn->query($sql);

$data1 = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data1[] = array(
            'name' => $row['name'],
            'units' => $row['units']
        );
    }
}

$sql = "SELECT added_by, price FROM products1";
$result = $conn->query($sql);

$data2 = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data2[] = array(
            'added_by' => $row['added_by'],
            'price' => $row['price']
        );
    }
}


$sql = "SELECT categories, quantity FROM products1";
$result = $conn->query($sql);

$data3 = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data2[] = array(
            'categories' => $row['categories'],
            'quantity' => $row['quantity']
        );
    }
}



$sql = "SELECT units, unit_price FROM products";
$result = $conn->query($sql);

$data3 = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data2[] = array(
            'units' => $row['units'],
            'unit_price' => $row['unit_price']
        );
    }
}



$data = array_merge($data1, $data2, $data3);





$conn->close();
?>

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
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

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
                <li><a href="register.html">
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
        </div>


        <div style="display: flex;">
  <div style="width: 80%;">
    <div style="width: 80%;">
        <canvas id="myChart"></canvas>
    </div>
    <div style="width: 80%;">
        <canvas id="myChart1"></canvas>
    </div>
  </div>
  <div style="width: 80%;">
    <div style="width: 80%;">
        <canvas id="myChart2"></canvas>
    </div>
    <div style="width: 80%;">
        <canvas id="myChart3"></canvas>
    </div>
  </div>
</div>
    </section>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php echo "'" . implode("','", array_column($data, 'added_by')) . "'"; ?>],
            datasets: [{
                label: '€ Spent',
                data: [<?php echo implode(",", array_column($data, 'price')); ?>],
                backgroundColor: [
                    '#FFA500',
                    '#FFB973',
                    '#FFD1A9',
                    '#FFE6C4',
                    '#FFF2E0',
                    '#FFF9ED'
                ],
                borderColor: [
                    '#FFA500',
                    '#FFB973',
                    '#FFD1A9',
                    '#FFE6C4',
                    '#FFF2E0',
                    '#FFF9ED'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
 

    var ctx = document.getElementById('myChart1').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php echo "'" . implode("','", array_column($data, 'categories')) . "'"; ?>],
            datasets: [{
                label: 'Quantity in Categories',
                data: [<?php echo implode(",", array_column($data, 'quantity')); ?>],
                backgroundColor: [
                    '#FFA500',
                    '#FFB973',
                    '#FFD1A9',
                    '#FFE6C4',
                    '#FFF2E0',
                    '#FFF9ED'
                ],
                borderColor: [
                    '#FFA500',
                    '#FFB973',
                    '#FFD1A9',
                    '#FFE6C4',
                    '#FFF2E0',
                    '#FFF9ED'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    var ctx = document.getElementById('myChart2').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php echo "'" . implode("','", array_column($data, 'name')) . "'"; ?>],
            datasets: [{
                label: 'Units Bought',
                data: [<?php echo implode(",", array_column($data, 'units')); ?>],
                backgroundColor: [
                    '#FFA500',
                    '#FFB973',
                    '#FFD1A9',
                    '#FFE6C4',
                    '#FFF2E0',
                    '#FFF9ED'
                ],
                borderColor: [
                    '#FFA500',
                    '#FFB973',
                    '#FFD1A9',
                    '#FFE6C4',
                    '#FFF2E0',
                    '#FFF9ED'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    var ctx = document.getElementById('myChart3').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php echo "'" . implode("','", array_column($data, 'units')) . "'"; ?>],
            datasets: [{
                label: 'Units Bought by money Spent',
                data: [<?php echo implode(",", array_column($data, 'unit_price')); ?>],
                backgroundColor: [
                    '#FFA500',
                    '#FFB973',
                    '#FFD1A9',
                    '#FFE6C4',
                    '#FFF2E0',
                    '#FFF9ED'
                ],
                borderColor: [
                    '#FFA500',
                    '#FFB973',
                    '#FFD1A9',
                    '#FFE6C4',
                    '#FFF2E0',
                    '#FFF9ED'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    </script>


       
       







       
    <script src="dashboard.js"></script>
</body>
</html>