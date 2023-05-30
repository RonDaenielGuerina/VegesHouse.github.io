<?php
session_start();
$_SESSION;

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>



<!DOCTYPE html>

 <html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant</title>
  <link rel="stylesheet" href="res.css" />        
</head>
<nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#production staff">Production Staff</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
          <h1 class="logo">VH</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Vege House </h1>
            <p>Eat Healty, it is good for our health.</p>
            <a href="#food-menu" class="btn btn-primary">Menu</a>
        </div>
    </section> 
<section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We've beem making healthy food last for 5 years</h2>
                <p>
    The food we serve our restaurant is very delicios authentic
                </p>
            </div>
                <div class="about-img">
                <img src="vegeta.jpg" alt="food" />
            </div>
        </div>
    </section>
    <section id="food">
        <h2>Types of food</h2>
        <div class="food-container container">
            <div class="food-type FRUITE">
                <div class="img-container">
                    <img src="fruit.jpg" alt="error" />
                    <div class="img-content">
                        <h3>FRUITE</h3>
                       
                    </div>
                </div>
            </div>
            <div class="food-type vegetable">
                <div class="img-container">
                    <img src="12345.jpg" alt="error" />
                    <div class="img-content">
                        <h3>VEGETABLE</h3>
                        
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <section id="food-menu">
        <h2 class="food-menu-heading">Food Menu</h2>
        <div class="food-menu-container container">
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="Lumpiang.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 1</h2>
                    <p>
                  Lumpiang-Sariwa
                    </p>
                    <p class="food-price">Price: ₱:250</p>                  
                <a href="Thankyou-page.html" class="btn btn-primary">Order</a>
       
                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-img">
                  <img src="vegetable salad.jpg"/>
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 2</h2>
                    <p>
                  Vegetable Salad
                    </p>
                    <p class="food-price">Price ₱:250</p>
                  <a href="Thankyou-page.html" class="btn btn-primary">Order</a>     
       
                </div>
              
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="vegetable burger.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 3</h2>
                    <p>
                      Veges Burger
                    </p>
                  <p class="food-price">Price ₱:250</p>
                  <a href="Thankyou-page.html" class="btn btn-primary">Order</a>
       
                </div>
          
            
            
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="mixed.jpg">
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 4u</h2>
                    <p>
                        Mixed Vegetable                
                    </p>
                    <p class="food-price">Price ₱:250</p>
                  <a href="Thankyou-page.html" class="btn btn-primary">Order</a>
       
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="Warm bacon.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 5</h2>
                    <p>
                        Warm Bacon Mushroom
                    </p>
                  <p class="food-price">Price ₱:250</p>                   
                <a href="Thankyou-page.html" class="btn btn-primary">Order</a>       
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="lumpia.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile"> Food Menu Item 6</h2>
                    <p>
                        Lumpiang Togue
                    </p>
                  <p class="food-price">Price ₱:250</p>                   
                <a href="Thankyou-page.html" class="btn btn-primary">Order</a>       
                </div>
            </div>
        </div>
    </section>
    <section id="production staff">
        <h2 class="production staff-title">Production Staff</h2>
        <div class="production staff-container container">
            <div class="production staff-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="Bryan.jpg" alt="" />
                        <p class="customer-name">Bryan Villanueva</p>
                    </div>
                </div>
                  
                <p class="production staff-text">
                    Branch Manager
                </p>

            </div>
            <div class="production staff-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="jimp.jpg" alt="" />
                        <p class="customer-name">Jimp Murphy Dela Cruz</p>
                    </div>
                
                </div>
                <p class="production staff-text">
                    BRANCH CHEF
                </p>

            </div>
            <div class="production staff-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="Celada.jpg" alt="" />
                        <p class="customer-name">Ms. Nicole Celada</p>
                    </div>
                
                </div>
                <p class="production staff-text">
                    CEO
                </p>

            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact-container container">
            <div class="contact-img">
                <img src="Vege house.jpg" alt="" />
            </div>
                  <div class="form-container">
                <h2>Contact Us</h2>
                <input type="text" placeholder="Your Name" />
                <input type="email" placeholder="E-Mail" />
                <textarea cols="30" rows="6" placeholder="Type Your Message"></textarea>
                <a href="Contactpage.html" class="btn btn-primary">Submit</a>
         </div>
        </div>
    </section>
    <footer id="footer">
        <h2>Restraunt &copy; all rights reserved</h2>
    </footer>
    <!-- .................../ JS Code for smooth scrolling /...................... -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="app.js"></script>

                  
</body>
</html>
