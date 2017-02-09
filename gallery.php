<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
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

<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){
				$('#etalage').etalage({

					source_image_width: 900,
					small_thumbs: 0,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						//alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
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

<script src="js/main.js"></script> <!-- Resource jQuery -->
	
</head>
<body> 
<!--header-->	
<div class=" header-product">
	<div class="header-top com">
		<div class="container">
			<div class="header-top-in grid-1">
				<ul class="support">
					<li ><span><i > </i>info@art101.com</span></li>
					<li ><span ><i class="tele-in"> </i>0 462 261 61 61</span></li>			
				</ul>
				<ul class=" support-right">
					<li >
					<!-- Hyperlink and text are generated dynamically, depending on whether or not the
					user is logged in -->
					<a href="<?php if(isset($_SESSION['login_user'])){ echo 'logout.php?logout'; }else{echo 'account.php';
							} ?>"><i class="men"></i><?php if(isset($_SESSION['login_user']) ) { echo 'Logout'; } else { echo 'Login';}?></a>
					</li>
					<li ><a href="register.php" ><i class="tele"> </i>Create an Account</a></li>			
				</ul>
				<div class="clearfix"> </div>
			</div>
		</div>
			<div class="header-bottom bottom-com">
			<div class="container">			
				<div class="logo">
					<h1><a href="index.php">Raymond Burrows</a></h1>
				</div>
				<div class="top-nav">
				<!-- start header menu -->
		<ul class="megamenu skyblue menu-in">
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
									<li><a href="about.php">About</a></li>
									<li><a href="account.php">Login</a></li>
									<li><a href="contact.php">Commission</a></li>
									<li><a href="contact.php">Contact</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>LINKS</h4>
								<ul>
									<li><a href="https://www.facebook.com/raymond.burrows.12?fref=ts"  target="_blank">Facebook</a></li>
									<li><a href="404.php">Saatchi</a></li>
									<li><a href="404.php">Terms of Service</a></li>
									
								</ul>	
							</div>							
						</div>
						
						
					</div>
					
    				</div>
				</li>	
		<li ><a  href="about.php">About</a></li>				
				<li><a  href="#">Gallery</a>
				
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
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="empty"></a></p>
						<div class="clearfix"> </div>
					</div>
					<!---->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
		
	</div>
<!---->
<div class="container">
	<h6 class="dress"><a href="index.php">Home</a> <i> </i> Gallery </h6>
</div>
<div class="back">
	<h2>GALLERY</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				
					
			
<!---->
	
								
							<div class="clearfix"> </div>
							</div>
				</div>

				<!---->
				<div class="col-md-12 product-price1">
				<div class="col-md-8 single-top">	
						<ul id="etalage">
							<li id="custom">
								<!--<a CUSTOM DISPLAY FOR GALLERY etalage-->
									<img class="etalage_thumb_image img-responsive" src="images/13.jpg" alt="" >
									<img class="etalage_source_image img-responsive" src="images/13.jpg" title="Silk screen print 280 cm x 350cm" >
								</a>
							</li>
							<li >
								<img class="etalage_thumb_image img-responsive" src="images/29a.jpg" alt="" >
								<img class="etalage_source_image img-responsive" src="images/29a.jpg" alt="" title="Silk screen print 300cm x 500cm">
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="images/cd.jpg" alt=""  >
								<img class="etalage_source_image img-responsive" src="images/cd.jpg" alt="" title="Silk screen print 300cm x 500cm" >
							</li>
						    <li>
								<img class="etalage_thumb_image img-responsive" src="images/ab.jpg"  alt="" >
								<img class="etalage_source_image img-responsive" src="images/ab.jpg" alt="" title="Mixed Media 320cm x 480cm">
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="images/23.jpg"  alt="" >
								<img class="etalage_source_image img-responsive" src="images/23.jpg" alt="" title="Silk screen print 280cm x 420cm">
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="images/37.jpg"  alt="" >
								<img class="etalage_source_image img-responsive" src="images/37.jpg" alt="" title="Painting 280cm x 560cm">
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="images/18.jpg"  alt="" >
								<img class="etalage_source_image img-responsive" src="images/18.jpg" alt="" title="Silk screen print 300cm x 220cm" >
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="images/12b.jpg"  alt="" >
								<img class="etalage_source_image img-responsive" src="images/12b.jpg" alt="" title="Collage on Canvas 500cm x 320cm">
							</li>
								<li>
								<img class="etalage_thumb_image img-responsive" src="images/341.jpg"  alt="" >
								<img class="etalage_source_image img-responsive" src="images/341.jpg" alt="" title="Mixed media painting 420cm x 180cm">
							</li>
							
						</ul>

					</div>	
					<div class="col-md-4 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4>Gallery</h4>
						
							<h5> Hover over image for close-up view </h5>
							<p> Here you can get a closer view of my Art in my shopping gallery. Just hover over the art piece you are interested in as it comes into view to see it in greater detail along with a short description..
</p>
						
								<a href="product.php" class="purchase">Go to Shop</a>
							
						</div>
					</div>
					<div class="clearfix"> </div>

					

				<div class="clearfix"> </div>
			<!---->
					
		     
		      
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
			<!---->
			<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>HAPPY SHOPPING!</h3>
						<p>Thank you for visiting my WebStore.</p>
					</div>
				</div>

</body>
</html>