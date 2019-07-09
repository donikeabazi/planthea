<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planthea</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body bgcolor="#ffffff">
    <div class="header-img">
        <div class="wrapper">
            <div class="logo">
                <a href="index.html"><h>Planthea</h></a>
            </div>
        </div>
    </div>

    <div id="header">
        <div class="wrapper">
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="gallery.php">Gallery</a> </li>
                    <li><a href="articles.php">Articles</a> </li>
                    <li><a href="contactus.php">Contact us</a> </li>
                </ul>
            </nav>
            <nav class="menu-logs">
              <ul>
              <?php
               if(isset($_SESSION['userId'])){
                 echo '<li><a href="includes/logout.inc.php">Logout</a></li>';
               }else {
                 echo '<li><a href="login.php">Log in</a></li>
                 <li><a href="signup.php">Sign up</a></li>';
               }

               ?>
                </ul>
            </nav>
        </div>
    </div>
    </body>
</html>
