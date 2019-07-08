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
            <div class="right-menu">
                <ul>
                    <li><a href="login.php">Log In</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="header">
        <div class="wrapper">
            <nav class="menu">
                <?php include 'includes/menu.php'; ?>
            </nav>
        </div>
    </div>

<div id="content" >
    
    <div class="wrap">
    <div id="arrow-left" class="arrow"></div>
    <div id="slider">
        <div class="slide slide1">
            <div class="slide-content">
                <span> Image One</span>
            </div>
        </div>
        <div class="slide slide2">
            <div class="slide-content">
                <span> Image Two</span>
            </div>
        </div>
        <div class="slide slide3">
            <div class="slide-content">
                <span> Image Three</span>
            </div>
        </div>
    </div>
    <div id="arrow-right" class="arrow"></div>
    </div>
    <script type="text/javascript" src="javascript/slider.js"></script>
        
</div>



    <div class="wrapper">
        <div id="footer">
            <div class="footer-menu">
                <?php include 'includes/footer-menu.php'; ?>          
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © 2019 Planthea - All Rights Reserved</p>
        </div>
</div>
    
</body>
</html>