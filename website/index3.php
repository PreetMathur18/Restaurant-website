<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="style3.css">


</head>
<body>
  <!-- header section starts     -->

<section class="header">

    <a href="#" class="logo"> <i class="fas fa-utensils"></i> fattitude- A dream cafe</a>
    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#food">our specialities</a>
      <a href="#gallery">gallery</a>
      <a href="#menu">menu</a>
      <a href="#order">order</a>
      <a href="http://localhost/preet/reservation.php">reservation</a>
      
   </nav>
 
    <div id="menu-btn" class="fas fa-bars"></div>
 </section>
 
 

 <!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">
 
       <div class="swiper-wrapper">
 
          <div class="swiper-slide slide" style="background: url(home-slide-1.jpg) no-repeat;">
             <div class="content">
                <span>outstanding food</span>
                <h3>delicious cooking</h3>
                <a href="#food" class="btn">get started</a>
             </div>
          </div>
 
          <div class="swiper-slide slide" style="background: url(home-slide-2.jpg) no-repeat;">
             <div class="content">
                <span>outstanding food</span>
                <h3>mouth watering food</h3>
                <a href="#food" class="btn">get started</a>
             </div>
          </div>
 
          <div class="swiper-slide slide" style="background: url(menu-5.jpg) no-repeat;">
             <div class="content">
                <span>outstanding food</span>
                <h3>authentic kitchen</h3>
                <a href="#food" class="btn">get started</a>
             </div>
          </div>
 
       </div>
 
       <div class="swiper-button-next"></div>
       <div class="swiper-button-prev"></div>
 
    </div>
 </section>

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="about-img.png" alt="">
   </div>

   <div class="content">
      <h2 class="title">welcome to our restaurant</h2>
      <p>Serving piping hot dishes is not enough; we cook everything to order, and our ingredients are ethically sourced and organic. So, not only are the creations amazing, but it also feels good eating them! Now you know exactly why we are the top result for Best Indian Restaurant near Me.</p>
      <a href="#" class="btn">read more</a>
      <div class="icons-container">
         <div class="icons">
            <img src="about-icon-1.png" alt="">
            <h3>quality food</h3>
         </div>
         <div class="icons">
            <img src="about-icon-2.png" alt="">
            <h3>food & drinks</h3>
         </div>
         <div class="icons">
            <img src="about-icon-3.png" alt="">
            <h3>expert chefs</h3>
         </div>
      </div>
   </div>

</section>

<!-- food section starts  -->

<section class="food" id="food"></div>

   <center> <div class="heading">  
       <span>popular dishes</span>
       <h3>our delicious food</h3>
    </div></center>
    <div class="swiper food-slider">
 
       <div class="swiper-wrapper">
 
          <div class="swiper-slide slide " data-name="food-1">
             <img src="food-img-1.png" alt="">
             <h3>dal makhani</h3>
             <div class="price">$13.99</div>
          </div>
 
          <div class="swiper-slide slide" data-name="food-2">
             <img src="food-img-2.png" alt="">
             <h3>mix vegetable</h3>
             <div class="price">$13.50</div>
          </div>
 
          <div class="swiper-slide slide" data-name="food-2">
             <img src="food-img-3.png" alt="">
             <h3>palak paneer</h3>
             <div class="price">$49.99</div>
          </div>
          <div class="swiper-slide slide" data-name="food-2">
             <img src="food-img-4.png" alt="">
             <h3>paneer pizza</h3>
             <div class="price">$50.99</div>
          </div>
          <div class="swiper-slide slide" data-name="food-2">
             <img src="food-img-5.png" alt="">
             <h3>gulab jamun</h3>
             <div class="price">$49.99</div>
          </div>
       </div>
       <div class="swiper-pagination"></div>
    </section>
 </div>
 
 
 
 <!-- food preview section starts---->
 
 <section class="food-preview-container">
 
    <div id="close-preview" class="fas fa-times"></div>
 
    <div class="food-preview active" data-target="food-1">
       <img src="food-img-1.png".png alt="">
       <h3>delicious food</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
       </div>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
       <div class="price">$49.99</div>
       <a href="#" class="btn">buy now</a>
    </div> 
 
    <div class="food-preview" data-target="food-2">
       <img src="food-img-2.png".png alt="">
       <h3>delicious food</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
       </div>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
       <div class="price">$49.99</div>
       <a href="#" class="btn">buy now</a>
    </div> 
    <div class="food-preview" data-target="food-3">
       <img src="food-img-3.png".png alt="">
       <h3>delicious food</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
       </div>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
       <div class="price">$49.99</div>
       <a href="#" class="btn">buy now</a>
    </div> 
    <div class="food-preview" data-target="food-img-4">
       <img src="food-img-4.png".png alt="">
       <h3>delicious food</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
       </div>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
       <div class="price">$49.99</div>
       <a href="#" class="btn">buy now</a>
    </div> 
   </section>
 
<!---gallery section starts--->


<section class="gallery" id="gallery">

   <div class="heading">
      <center><span>our gallery</span></center>
      <h3>our untold stories</h3>
   </div>

   <div class="gallery-container">

      <a href="food-galler-img-1.jpg" class="box">
         <img src="food-galler-img-1.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="food-galler-img-2.jpg" class="box">
         <img src="food-galler-img-2.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="food-galler-img-3.jpg" class="box">
         <img src="food-galler-img-3.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="food-galler-img-4.jpg" class="box">
         <img src="food-galler-img-4.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>
      
      <a href="food-galler-img-5.jpg" class="box">
         <img src="food-galler-img-5.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="food-galler-img-6.jpg" class="box">
         <img src="food-galler-img-6.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

   </div>
</section>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src=https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.4.0/js/lightgallery.min.js></script>
<script>
   lightGallery(document.querySelector('.gallery .gallery-container'));
</script>
 
 
 <!-- menu section starts  -->
 <section class="menu" id="menu">
 
    <div class="menu">
       <center><span>our menu</span>
       <h3>our popular dishes</h3></center>
    </div>
 
    <div class="slider">
 
       <div class="w">
 
          <div class="slide">
             <h3 class="title">breakfast</h3>
             <div class="box-container">
                <div class="box">
                   <div class="info">
                      <h3>paneer pizza</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>morning breakfast</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>morning breakfast</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>morning breakfast</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>morning breakfast</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>morning breakfast</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
             </div>
          </div>
 
          <div class="slide">
             <h3 class="title">lunch</h3>
             <div class="box-container">
                <div class="box">
                   <div class="info">
                      <h3>delicious lunch</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>delicious lunch</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>delicious lunch</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>delicious lunch</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
             </div>
          </div>
 
          <div class="slide">
             <h3 class="title">dinner</h3>
             <div class="box-container">
                <div class="box">
                   <div class="info">
                      <h3>delicious dinner</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>delicious dinner</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>delicious dinner</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>delicious dinner</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>delicious dinner</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
             </div>
          </div>
 
          <div class="slide">
             <h3 class="title">drinks</h3>
             <div class="box-container">
                <div class="box">
                   <div class="info">
                      <h3>cold drinks</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>cold drinks</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>cold drinks</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>cold drinks</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>cold drinks</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>cold drinks</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
             </div>
          </div>
 
          <div class="slide">
             <h3 class="title">dessert</h3>
             <div class="box-container">
                <div class="box">
                   <div class="info">
                      <h3>sweet dessets</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>sweet dessets</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>sweet dessets</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
                <div class="box">
                   <div class="info">
                      <h3>sweet dessets</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                   </div>
                   <div class="price">$49.99</div>
                </div>
             </div>
          </div>
          </div>
 
    <div class="swipper-pagination"></div>
 
    </div>
 
 </section>
 

 <!-- order section starts  -->

 <!-- order section starts  -->

<section class="order" id="order">

   <div class="heading">
      <center><span>order now</span></center>
      <h3>fast home delivery</h3>
   </div>

   <?php
// define variables and set to empty values
$name = $food = $Odetails = $address = $mobile = $quantity = $date = $email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = test_input($_POST["name"]);
 $food = test_input($_POST["food"]);
 $Odetails = test_input($_POST["specifics"]);
 $address = test_input($_POST["address"]);
 $mobile = test_input($_POST["number"]);
 $quantity = test_input($_POST["quantity"]);
 $date = test_input($_POST["datetime"]);
 $email = test_input($_POST["email"]);
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>


   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="box-container">
         <div class="box">
            <div class="inputBox">
               <span>full name</span>
               <input type="text" placeholder="enter your name"
               name="name" required>
            </div>
            <div class="inputBox">
               <span>food name</span>
               <input type="text" placeholder="food you want"
               name="food" required>
            </div>
            <div class="inputBox">
               <span>order details</span>
               <input type="text" placeholder="specifics with food"
               name="specifics" required>
            </div>
            <div class="inputBox">
               <span>your address</span>
               <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"
               name="address" required></textarea>
            </div>
         </div>
         <div class="box">
            <div class="inputBox">
               <span>contact no.</span>
               <input type="number" placeholder="enter your contact no."
               name="number" required>
            </div>
            <div class="inputBox">
               <span>how much</span>
               <input type="number" placeholder="how many you want"
               name="quantity" required>
            </div>
            <div class="inputBox">
               <span>when you want</span>
               <input type="datetime-local"
               name="datetime" required>
            </div>
            <div class="inputBox">
               <span>email</span>
               <input type="text" placeholder="email"
               name="email" required>
            </div>
            <!--<div class="inputBox">
               <span>our address</span>
               <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60307.59083109428!2d72.840725!3d19.141651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1642222128240!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
            </div>--->
         </div>
      </div>
      <center><input type="submit" value="order now" class="btn"
      name="order now"></center>
   </form><br><br>
   <?php

echo "<h2>Your Details:</h2>";
echo $name;
echo "<br>";
echo $food;
echo "<br>";
echo $Odetails;
echo "<br>";
echo $address;
echo "<br>";
echo $mobile;
echo "<br>";
echo $quantity;
echo "<br>";
echo $date;
echo "<br>";
echo $email;
echo "<br>";

$conn = mysqli_connect("localhost","root","","fattitude - a dream cafe");

if($conn){
   echo "connected";
}

?>
</section>


<!-- footer section starts  -->

<section class="footer">

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>07:00am to 10:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         
         <p>+111-222-3333</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>preetm9535@gmail.com</p>
         <p>preet.20ejics047@jietjodhpur.ac.in</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address</h3>
         <p>Jodhpur,Rajasthan,India-342008</p>
      </div>

   </div>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
   </div>

   <div class="credit"> created by <span>Preet Mathur<br>2nd year-CSE</span> <br> all rights reserved! </div>

</section>

<!-- footer section ends  -->
















<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>




<script src="app3.js"></script>

</body>
</html>