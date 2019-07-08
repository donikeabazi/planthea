<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Planthea</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    </head>
    <body bgcolor="#ffffff">
        <div class="header-img">
            <div class="wrapper">
                    <div class="logo">
                        <h>Planthea</h>
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
        <div class="slide slide-1">
            <div class="slide-content">
                <span> Image One</span>
            </div>
        </div>
        <div class="slide slide-2">
            <div class="slide-content">
                <span> Image Two</span>
            </div>
        </div>
        <div class="slide slide-3">
            <div class="slide-content">
                <span> Image Three</span>
            </div>
        </div>
    </div>
    <div id="arrow-right" class="arrow"></div>
    </div>
    <script type="text/javascript" >
        let sliderImages = document.querySelectorAll('.slide'),
    arrowLeft = document.querySelector('#arrow-left'),
    arrowRight = document.querySelector('#arrow-right'),
    current = 0;

// clear all images
function reset(){
    for(let i=0; i < sliderImages.length; i++){
        sliderImages[i].style.display = 'none';
    }
}

// init slider
function startSlide(){
    reset();
    sliderImages[0].style.display = 'block';
}

//show prev 
function slideLeft(){
    reset();
    sliderImages[current-1].style.display = 'block';
    current--;
}

// show next 
function slideRight(){
    reset();
    sliderImages[current+1].style.display = 'block';
    current++;
}

// left arrow click
arrowLeft.addEventListener('click', function(){
   if(current === 0){
      current = sliderImages.length;
      }
    slideLeft();
});


// right arrow click
arrowRight.addEventListener('click', function(){
   if(current === sliderImages.length-1){
      current = -1;
      }
    slideRight();
});

startSlide();
    </script>
        
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