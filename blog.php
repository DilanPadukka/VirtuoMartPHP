<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <title>E- CommerceWebsite</title>
	 <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  
  <body>
  <section id="header">
    <a href="#"><img src="img/logo.jpg" class="logo" alt="logo"></a>
	<div>
	 <ul id="navbar">
	    <li><a href="index.php">Home</a></li>
		<li><a href="shop.php">Shop</a></li>
		<li><a class="active" href="blog.php">Blog</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
		<a href="#" id="close"><i class="fa fa-times"></i></a>
		
	 </ul>
	</div>
	<div id="mobile">
	   <a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
	   <i id="bar" class="fa fa-outdent"></i>
	</div>
  </section>
  
    <section id="page-header" class="blog-header container">
    
	<h2>#readmore</h2>
	
	<p>Read all case studies about our products!</p>
	
  </section>
  
  <section id="blog">
    <div class="blog-box">
	 <div class="blog-img">
	    <img src="img/blog/b1.jpg" alt="">
	 </div>
	 <div class="blog-details container-md">
	    <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
		<p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies yr wolf
		chartreuse hexagon irony, godard..</p>
		<a href="#">CONTINUE READING</a>
	 </div>
	 <h1>13/01</h1>
	</div>
	<div class="blog-box">
	 <div class="blog-img container">
	    <img src="img/blog/b2.jpg" alt="">
	 </div>
	 <div class="blog-details">
	    <h4>How to Style a Quiff</h4>
		<p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies yr wolf
		chartreuse hexagon irony, godard..</p>
		<a href="#">CONTINUE READING</a>
	 </div>
	 <h1>13/01</h1>
	</div>
	<div class="blog-box">
	 <div class="blog-img">
	    <img src="img/blog/b3.jpg" alt="">
	 </div>
	 <div class="blog-details">
	    <h4>Must-Have Skater Girl Items</h4>
		<p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies yr wolf
		chartreuse hexagon irony, godard..</p>
		<a href="#">CONTINUE READING</a>
	 </div>
	 <h1>13/01</h1>
	</div>
	<div class="blog-box">
	 <div class="blog-img">
	    <img src="img/blog/b4.jpg" alt="">
	 </div>
	 <div class="blog-details">
	    <h4>Runway-Inspired Trends</h4>
		<p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies yr wolf
		chartreuse hexagon irony, godard..</p>
		<a href="#">CONTINUE READING</a>
	 </div>
	 <h1>13/01</h1>
	</div>
	<div class="blog-box">
	 <div class="blog-img">
	    <img src="img/blog/b6.jpg" alt="">
	 </div>
	 <div class="blog-details">
	    <h4>AW20 Menswear Trends</h4>
		<p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies yr wolf
		chartreuse hexagon irony, godard..</p>
		<a href="#">CONTINUE READING</a>
	 </div>
	 <h1>13/01</h1>
	</div>
  </section>
  <section id="pagination" class="section-p1">
    <a href="#">1</a>
	<a href="#">2</a>
	<a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
  </section>
  
  <section id="newsletter" class="section-p1  section-m1">
    <div class="newstext">
	    <h4>Sign Up For Newsletters</h4>
		<p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
	</div>
	<div class="form">
	   <input type="text" placeholder="Your email address">
	   <button class="normal">Sign Up</button>
	</div>
  </section>
  
  <footer class="section-p1">
    <div class="col">
	    <img src="img/logo.jpg" class="logo1" alt="logo">
		<h4>Contact</h4>
		<p><strong>Address:</strong> No.11/1, Batawala,Padukka, Sri Lanka.</p>
		<p><strong>Phones: </strong> +94 716276085</p>
		<p><strong>Hours:</strong> 24 H</p>
		<div class="follow">
		  <h4>Follow us</h4>
		  <div class="icon">
		    <i class="fa fa-facebook-f"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
			<i class="fa fa-pinterest-p"></i>
			<i class="fa fa-youtube"></i>
		  </div>
		</div>
	</div>
	
	<div class="col">
	    <h4>About</h4>
		<a href="#">About us</a>
		<a href="#">Delivery Information</a>
		<a href="#">Privacy Policy</a>
		<a href="#">Terms & Conditions</a>
		<a href="#">Contact Us</a>
	</div>
	
	<div class="col">
	    <h4>My Account</h4>
		<a href="#">Sign In</a>
		<a href="#">View Cart</a>
		<a href="#">My Whishlist</a>
		<a href="#">Track My Order</a>
		<a href="#">Help</a>
	</div>
	
	<div class="col  install container">
	   <h4>Install App</h4>
	   <p>From App Store or Google Play</p>
	   <div class="row">
	   <div class="col">
	    <img src="img/pay/app.jpg" alt="">
		<img src="img/pay/play.jpg" alt="">
	   </div>
	   </div>
	   <p>Secured Payment Gateways</p>
	   <img src="img/pay/pay.png" alt="">
	</div>
	<div class="copyright">
	<p>&copy;2024 VirtuoMart</p>
	</div>
  </footer>
  <script src="script.js"></script>
  </body>
</html>

