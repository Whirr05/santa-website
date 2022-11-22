<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Sants</title>
    <link rel="stylesheet" href="practice.css">
    <link rel="stylesheet" href="nav.css">
    
</head>
<body>
    
    <center>
    <div id="menulinks" class="topnav" id="myLinks" style="visibility: visable;">
        <a id="menulinks" href="index.html" >Home</a>
        <a id="menulinks"href="contact.php">Write Your Wishlist</a>
        <a id="menulinks"href="https://santatracker.google.com">Santa Tracker</a>
           <!-- <input id="font_switch" name="font_switch" type="button"/>
            <label for="font_switch" id="special">For Special Children</label><br>-->
            
    </div>
    </center>
    
    <center>
    <form name = "test" class = "form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="fn" placeholder="First Name" class="input">
    <input type="text" name="sn" placeholder="Surname" class="input"><br>
    <textarea rows="13" cols="60" name="letter" placeholder="Write your letter here..." class="largeTextBox"></textarea><br>
    <input class="submit" type="submit" name="submit" value="Send"> 
</form>
<table class='info'>
    <tr>
        <td>
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $fn = $_POST['fn'];
                $fn = ucwords($fn);
                $sn = $_POST['sn'];
                $sn = ucwords($sn);
                $letter = $_POST['letter'];
                
                if (empty($fn) || empty($sn)){
                    echo "<p style='color:red;'>Name is empty</p>";
                }
                else if (empty($letter)){
                    echo "<p style='color:red;'>Letter is empty</p>";
                }
                else{
                    echo "<p>$fn $sn your letter has been sent to Mr Claus!<br>";
                    

                }
            }



            ?>
<center>
<div class="slideshow-container fade">

  <div class="Containers">
    <div class="MessageInfo">1 / 3</div>
    <img src="santa.jfif" style="width:25%">
    <div class="Info">Mr Claus</div>
  </div>

  <div class="Containers">
    <div class="MessageInfo">2 / 3</div>
    <img src="mrsclaus.jpg" style="width:25%">
    <div class="Info">Mrs Claus</div>
  </div>

  <div class="Containers">
    <div class="MessageInfo">3 / 3</div>
    <img src="elf.jfif" style="width:25%">
    <div class="Info">Buddy the Elf</div>
  </div>

  <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
  <a class="forward" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dots" onclick="currentSlide(1)"></span>
  <span class="dots" onclick="currentSlide(2)"></span>
  <span class="dots" onclick="currentSlide(3)"></span>
</div>
</body>
<script>
    var slidePosition = 1;
SlideShow(slidePosition);

function plusSlides(n) {
  SlideShow(slidePosition += n);
}

function currentSlide(n) {
  SlideShow(slidePosition = n);
}

function SlideShow(n) {
  var i;
  var slides = document.getElementsByClassName("Containers");
  var circles = document.getElementsByClassName("dots");
  if (n > slides.length) {slidePosition = 1}
  if (n < 1) {slidePosition = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < circles.length; i++) {
      circles[i].className = circles[i].className.replace(" enable", "");
  }
  slides[slidePosition-1].style.display = "block";
  circles[slidePosition-1].className += " enable";
} 
</script>
</html>