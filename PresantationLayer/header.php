<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EJob</title>
    <link rel="icon" href="images/logo3.png">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="js/login.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    
  </head>

  <body>
    <div class="header">
    <img src="images/thth.jpg" />
      <ul class="headerList">
        <li><a href="home.php">Home</a></li>
        <li><a href="job.php">Job Lists</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['role']==1){?>
          <li><a href="dashboardjob.php">Dashboard Jobs</a></li>
        <?php } ?>
        <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['role']==1){?>
          <li><a href="dashboard.php">Dashboard</a></li>
        <?php } ?>
        
        <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1){ ?> 
          <li><a href="logout.php">Log Out</a></li>
        <?php }else { ?>
          <li><a href="logini.php">Log In</a></li>
        <?php } ?> 
         
      </ul>
    </div>
