<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Raymond Burrows Home </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/animate.css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="art, art101, artist" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!--Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--//slider-script-->

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	


</head>
<body> 
<!--header-->	
<div class="header">
	<div class="header-top">

		<div class="container">

		



			<div class="header-bottom">
			<div class="container">

		
				<div class="logo">

					<h1><!--<a href="index.php">-->Raymond Burrows<!--</a>--></h1>
					
				</div>
				</div>
				<div class="top-nav">
				<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li><a  href="index.php">Home</a></li>
			
			<li class="active grid"><a  href="#">Shop</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>SHOP</h4>
								<ul>
									<li><a href="product.php">All</a></li>
									<li><a href="product.php">Prints</a></li>
									<li><a href="product.php">Collage</a></li>
									<li><a href="product.php">Paintings</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>GO TO</h4>
								<ul>
									<li><a href="account.php">Login</a></li>
									<li><a href="contact.php">Commission Ray</a></li>
									<li><a href="contact.php">Contact</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>LINKS</h4>
								<ul>
									<li><a href="https://www.facebook.com/raymond.burrows.12?fref=ts" target="_blank">FaceBook</a></li>
									<li><a href="404.php">Saatchi</a></li>
									<li><a href="404.php">Terms of Service</a></li>
									
								</ul>	
							</div>							
						</div>
						
					</div>
					
    				</div>
				</li>	
		<li ><a  href="about.php">About</a></li>				
				<li><a  href="gallery.php">Gallery</a>
				
				</li>
				
				<li><a  href="contact.php">Contact</a>
					
				</li>
		 </ul> 
		 <!---->


					<!---->
					

					<div class="cart box_1">
						<a href="cart.php">
						<h3> <div class="total">
							<span></span><span id="qty" class="qty"></span></div>
							<img src="images/14.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="empty"></a></p>
						<div class="clearfix"> </div>
					</div>

<div class="clearfix"> </div>
					<!---->
				</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>

	<div class="banner">
		<div class="banner-top">
	         <h2>Raymond Burrows 101 Art Store</h2>
	         <p>Here you will find original<span> one of a kind limited edition masterpieces to grace your home or business.</span></p>
</div>

	<div class="now">
	         <a class="morebtn" href="gallery.php">Explore</a>
	         <a class="morebtn at-in" href="product.php">Shop Now</a>
	         <div class="clearfix"> </div>
	         </div>
 	</div>	

</div>
<!---->

									 	        					 
						  </div>
						
		  	

						
			<!--RAYS CONTACT-->
			<!--<footer id="contact" class="veil">-->
		<section id="content" class="wip4-border">
        <div class="container">
            <div class="row"><br><br>
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Raymond</h2>
                    <h3 class="section-subheading text-muted">I would really love to hear from you.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div><br><br>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--</footer>-->
    <div class="fotter-logo1">
	 <div class="container">
	 <div class="ftr-logo"><h3><a class= "ray" href="about.php">Raymond Burrows</a></h3></div>
	 
	 <div class="ftr-info">
	 <p>&copy; Raymond Burrows 2016</p>
	</div>
	 <div class="clearfix"></div>
	 </div>
</div>

		<!---->

<!---->
	
</body>
</html>