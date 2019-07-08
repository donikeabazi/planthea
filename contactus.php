<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Planthea</title>
    <link rel="stylesheet" href="css/contactus-style.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".btn").click(function(){
               $("input[type='text'], textarea").val(""); 
            });              
        });
    </script>
</head>
<body>

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
    <div class="wrapper">
        <div class = "content">
            <h1>CONTACT FORM</h1>
            <p>Connect with us by sendin your views.</p>
        </div>
        <div class = "form">
            <div class = "top-form">
                <div class = "inner-form">
                    <div class = "label">Name</div>
                    <input type = "text" placeholder = "John">
                </div>
                <div class = "inner-form">
                    <div class = "label">Email</div>
                    <input type = "text" placeholder = "example@gmail.com">
                </div>
                <div class = "inner-form">
                    <div class = "label">Phone</div>
                    <input type = "text" placeholder = "0123456789">
                </div>
            </div>
            <div class = "middle-form">
                <div class = "inner-form">
                    <div class = "label">Subject</div>
                    <input type = "text" placeholder = "Subject">
                </div>
            </div>
            <div class = "bottom-form">
                <div class = "inner-form">
                    <div class = "label">Your message</div>
                    <textarea placeholder="Write something to us!"></textarea>
                </div>
            </div>
            <div class= "btn">send form</div>
        </div>
    </div>
            
</body>    
</html>