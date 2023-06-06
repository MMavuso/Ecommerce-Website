<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Apple Store</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style_home.css">
        <link rel="stylesheet" href="./footer.css">
        <link rel="stylesheet" href="./styleSlider.css">
        <meta http-equiv="" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    
    <?php require_once ("php/header.php"); ?>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/1.jpg" style=" width:100%; height:700px;object-fit: fill;">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/2.jpg" style=" width:100%; height:700px;object-fit: fill;">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/3.jpg" style="width:100%; height:700px;object-fit: fill;">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!-- partial:index.partial.html -->


<!-- partial -->
 <!-- <script src='js/three.min.js'></script>
<script  src="./script.js"></script> -->
 <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>



<div class="landingP">
    <p class="banner-text">Store. The best way to buy the <br> products you love.</p>
    <div class="imagine">
     <div class="imagine-item">
        <div class="imagine-logo"><img src="images/mac.jpg" width="200" height="200"/></div>
        <div class="imagine-name"><a href="index.php?category=0">Laptops</a></div>    
     </div>

     <div class="imagine-item">
        <div class="imagine-logo"><img src="images/iphone.jpg" width="200" height="200"/></div>
        <div class="imagine-name"><a href="index.php?category=1">Phones</a></div>    
     </div>

     <div class="imagine-item">
        <div class="imagine-logo"><img src="images/ipad.jpg" width="200" height="200"/></div>
        <div class="imagine-name"><a href="index.php?category=2">Tablets</a></div>    
     </div>

     <div class="imagine-item">
        <div class="imagine-logo"><img src="images/watch.jpeg" width="200" height="200"/></div>
        <div class="imagine-name"><a href="index.php?category=3">Smart Watches</a></div>    
     </div>

     <div class="imagine-item">
        <div class="imagine-logo"><img src="images/airpods.jpg" width="200" height="200"/></div>
        <div class="imagine-name"><a href="index.php?category=4">Earphones</a></div>    
     </div>

     <div class="imagine-item">
        <div class="imagine-logo"><img src="images/itv.jpg" width="200" height="200"/></div>
        <div class="imagine-name"><a href="index.php?category=5">Accessories</a></div>    
     </div>

     <div class="imagine-item">
        <div class="imagine-logo"><img src="images/homepod.jpg" width="200" height="200"/></div>
        <div class="imagine-name"><a href="index.php?category=6">Speakers</a></div>    
     </div>

     <div class="imagine-item">
        <div class="imagine-logo"></div>
        <div class="imagine-name">Accessories</div>    
     </div>

     
    </div>
</div>


<div class="conte">
    <p class="banner-text1">The latest. take a look at what is new, right now</p>
    <div class="landingP">
        <div class="new-item">
            <p class="p1">PS4 CONTROLLER</p>
            <p class="p2">Wonderful.</p>
            <p class="p3">From E14 000 or E 1200/mo. for 24 mo. before trade-in</p>
            <div class="new-item-pic"><img src="images/joystick1.jpg" width="470" height="500"/></div>
        </div>
        <div class="new-item">
            <p class="p1">IPAD PRO</p>
            <p class="p2">Wonderful.</p>
            <p class="p3">From E14 000 or E 1200/mo. for 24 mo. before trade-in</p>
            <div class="new-item-pic"><img src="images/ipadpro.jpeg" width="470" height="500"/></div>
        </div>

        <div class="new-item">
            <p class="p1">GAMING LAPTOPS</p>
            <p class="p2">Powerful.</p>
            <p class="p3">From E14 000 or E 1200/mo. for 24 mo. before trade-in</p>
            <div class="new-item-pic"><img src="images/dell1.jpg" width="470" height="500"/></div>
        </div>

        
    </div>
</div>

<div style="height: 1000px; width:100%; margin-top: 40px; padding:80px;  position:relative;">

<center>
<h2><b>Stand a chance to win the new iPhone 14</b> </h2>
<img src="backgoundsz.jpg" style=" width:700px; height:700px;object-fit: fill;"/>
<h4 style="color: teal;"><b>Spent over E 10 000.00 on our store and your reciept voucher will be added to raffle!!!<b></4>
</center>
</div>


<?php require_once ("php/footer.php"); ?>



    </body>
</html>