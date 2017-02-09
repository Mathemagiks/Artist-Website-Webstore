<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Raymond Burrows 404 </title>
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
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />

<!--Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
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
<div class=" header-product">
	<div class="header-top com">
		<div class="container">
			<div class="header-top-in grid-1">
				<ul class="support">
					<li ><span ><i > </i>info@art101.com</span></li>
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
								   <li><a href="gallery.php">Art for Sale</a></li>
									<li><a href="account.php">Login</a></li>
									<li><a href="contact.php">Commission</a></li>
									<li><a href="404.php">Terms of Service</a></li>
									
								</ul>	
							</div>							
						</div>
							<div class="col1">
							<div class="h_nav">
								<h4>LINKS</h4>
								<ul>
									<li><a href="https://www.facebook.com/raymond.burrows.12?fref=ts" target="_blank">FaceBook</a></li>
									<li><a href="404.php">Saatchi</a></li>
									<li><a href="contact.php">Contact</a></li>
									
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
	<h6 class="dress"><a href="index.php">Home</a> <i> </i> 404 </h6>
</div>
<div class="back">
	<h2>404</h2>
</div>
		<!---->
		<div class="four wip3-border">
				<h3>404</h3>
				<p>The page you're looking for could not be found.</p>
					<a href="index.php" class="more ">Go back</a>
				
			</div>
			<!---->
				<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>OOOPS</h3>
						<p>Sorry about this, please go home.</p>
					</div>
				</div>
<!---->
	
<!---->
</body>
</html>