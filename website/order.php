<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.4.0/js/lightgallery.min.js">
    <!---<link rel="stylesheet" href="order.css">--->


<style>
   @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600&display=swap');

:root{
    --peru:#cd9452;
    --black:#222;
    --white:#fff;
    --light-black:#666;
    --light-white:#ccc;
    --light-bg:#f5f5f5;
    --dark-bg:rgba(0,0,0,.7);
    --border:.1rem solid #aaa;
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
 }
 
 


*{
    font-family: 'Dosis', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    transition: all 0.4s cubic-bezier(.43,1.1,.62,1.08);
    text-transform: capitalize;
 }
 * > img{
    user-select: none;
    pointer-events: none;
 }
 
 html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
 }
 
 html::-webkit-scrollbar{
    width: 1rem;
 }
 
 html::-webkit-scrollbar-track{
    background-color: var(--white);
 }
 
 html::-webkit-scrollbar-thumb{
    background-color: var(--peru);
 }
 
 section{
    padding:5rem 10%;
 }

.order{
    background: var(--peru);
 }
 
 .heading span{
    text-align: center;
    color: rgb(255, 255, 255);
    font-size: 4.5rem;
    background: var(rgb(127, 46, 46));
 }
 .btn{
    margin-top: 1rem;
    display: inline-block;
    background: var(--peru);
    color:var(--white);
    font-size: 2rem;
    cursor: pointer;
    padding:1rem 3rem;
 }
 .btn:hover{
    letter-spacing: .2rem;
 }
 
 .order .heading h3{
    text-align: center;
    color: rgb(255, 255, 255);
    font-size: 3.5rem;
 }
 
 .order form{
    padding:2rem;
    background: var(--white);
    box-shadow: var(--box-shadow);
 }
 
 .order form .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:2rem;
 }
 
 .order form .box-container .box{
    flex:1 1 41rem;
 }
 
 .order form .box-container .box .inputBox input,
 .order form .box-container .box .inputBox textarea{
    width: 100%;
    margin:1rem 0;
    padding:1.2rem 1.4rem;
    font-size: 1.7rem;
    color:var(--light-black);
    border:var(--border);
    text-transform: none;
 }
 
 .order form .box-container .box .inputBox input::placeholder,
 .order form .box-container .box .inputBox textarea::placeholder{
    text-transform: capitalize;
 }
 
 .order form .box-container .box .inputBox input:focus,
 .order form .box-container .box .inputBox textarea:focus{
    background: var(--black);
    color:var(--white);
 }
 
 .order form .box-container .box .inputBox input:focus::placeholder,
 .order form .box-container .box .inputBox textarea:focus::placeholder{
    color:var(--light-white);
 }
 
 .order form .box-container .box .inputBox textarea{
    height: 20rem;
    resize: none;
 }
 
 .order form .box-container .box .inputBox .map{
    height: 20rem;
    width: 100%;
    margin:1rem 0;
 }
 
 .order form .box-container .box .inputBox span{
    color:var(--light-black);
    font-size: 2rem;
 }
 </style>




</head>
<body>
  <!-- order section starts  -->

<section class="order" id="order">

    <div class="heading">
       <center><span>order now</span></center>
       <h3>fast home delivery</h3>
    </div>
 
    <form action="">
       <div class="box-container">
          <div class="box">
             <div class="inputBox">
                <span>full name</span>
                <input type="text" placeholder="enter your name">
             </div>
             <div class="inputBox">
                <span>food name</span>
                <input type="text" placeholder="food you want">
             </div>
             <div class="inputBox">
                <span>order details</span>
                <input type="text" placeholder="specifics with food">
             </div>
             <div class="inputBox">
                <span>your address</span>
                <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
             </div>
          </div>
          <div class="box">
             <div class="inputBox">
                <span>number</span>
                <input type="number" placeholder="enter your number">
             </div>
             <div class="inputBox">
                <span>how much</span>
                <input type="number" placeholder="how many you want">
             </div>
             <div class="inputBox">
                <span>when you want</span>
                <input type="datetime-local">
             </div>
             <div class="inputBox">
                <span>our address</span>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60307.59083109428!2d72.840725!3d19.141651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1642222128240!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
             </div>
          </div>
       </div>
       <center><input type="submit" value="order now" class="btn"></center>
    </form>
    
 </section>  

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
</body>
</html>