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

<?php include("db.php"); ?>





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
        <li style="border-bottom: 0px; padding-bottom: 0px; padding-top: 0px;"><a href="gc2.php">
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







    <main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>



    



   





















          </div>
        </div>
      </div>

    </main>

    <script src="gcgc.js"></script>
</body>

</html>