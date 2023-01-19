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
    <title>My Supermarket</title>
    <link rel="stylesheet" href="mysuper.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui-css@2.4.1/semantic.min.css">


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


    

    <!-- Create Form -->
    <h2>Create Product</h2>
    <form action="create.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="categories">Categories:</label>
        <input type="text" id="categories" name="categories"><br>
        <label for="added_by">Added by:</label>
        <input type="text" id="added_by" name="added_by"><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity"><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price"><br>
        <input type="submit" name="create" value="Create">
    </form>




   
    <tbody>
        <?php
            include 'read.php';
            while ($row = mysqli_fetch_array($result)) {
              echo "<tr class='new-row'>";
              echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['categories'] . "</td>";
                echo "<td>" . $row['added_by'] . "</td>";
                echo "<td>" . $row['added'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>
                        <form action='update.php' method='post'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='submit' name='edit' value='Edit'>
                        </form>
                        <form action='delete.php' method='get'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='submit' name='delete' value='Delete'>
                        </form>
                      </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>



   












    <script src="mysuper.js"></script>


    
</body>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui-css@2.4.1/semantic.min.js"></script>

</html>