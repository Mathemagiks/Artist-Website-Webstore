<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/animate.css"/>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="art, art101" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!--Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
 <!--<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>-->
 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		 


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/product.js"></script>


</head>
<body> 
<script>
var session_id = '<?php echo session_id();?>';
$( document ).ready(function() { 
  // Handler for .ready() called.
  $( "div.col-md-4" ).click(function() {
	var children = $(this).children();

	// console.log(this);
	 var item = product();
	 item.image = $(children).find('img').attr('src');
	 item.title = $(children).find('h4').text();
	 item.price = $(children).find('span').text();
	 item.cartId = localStorage.length;
	 var obj_key = session_id + localStorage.length;
	// console.log(obj_key);
	// console.log(document.getElementById("z").text);
	 localStorage.setItem(obj_key, JSON.stringify(item));
  console.log(localStorage.valueOf());
  console.log("Check this out:");
  console.log(session_id);
});
});
</script>

<!--header-->	
<div class=" header-product">
	<div class="header-top com">
		<div class="container">
			<div class="header-top-in grid-1">
				<ul class="support">
					<li ><!--<a href="mailto:info@example.com" >--><span><i > </i>info@art101.com<!--</a>--></span></li>
					<li ><span ><i class="tele-in"> </i>0 462 261 61 61</span></li>			
				</ul>
				<ul class=" support-right">
					<li >
					<!-- Hyperlink and text are generated dynamically, depending on whether or not the
					user is logged in -->
					<a href="<?php if(isset($_SESSION['login_user'])){ echo 'logout.php?logout'; }else{echo 'account.php';
							} ?>"><i class="men"></i><?php if(isset($_SESSION['login_user']) ) { echo 'Logout'; } else { echo 'Login';}?></a></li>
					<li ><a href="register.php" ><i class="tele"> </i>Create an Account</a></li>			
				</ul>
				<div class="clearfix"> </div>
			</div>
		</div>
			<div class="header-bottom ">
			<div class="container">			
				<div class="logo">
					<h1><a href="index.php">Raymond Burrows</a></h1>
				</div>
				<div class="top-nav">
				<!-- start header menu -->
		<ul class="megamenu skyblue menu-in">
			<li><a  href="index.php">Home</a></li>
			
			<li class="active grid"><a  href="#" >Shop</a>
				<div class="megapanel" >
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
									<li><a href="contact.php">Commission</a></li>
									<li><a href="contact.php">contact</a></li>
									<li><a href="404.php">terms of service</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>LINKS</h4>
								<ul>
									<li><a href="https://www.facebook.com/raymond.burrows.12?fref=ts" target="_blank">FaceBook</a></li>
									<li><a href="404.php">Saatchi</a></li>
									<li><a href="about.php">About</a></li>
									
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
	<h6 class="dress"><a href="index.php">Home</a> <i> </i> Art For Sale </h6>
</div>
<div class="back">
	<h2>ART FOR SALE</h2>
</div>

	<!--PRODUCTS-->
		
  
   <div class="product">
		<div class="product">
		<div class="container">
		<div class="col-md-12">
			<div class="row">

				<div class="col-md-4">

				 <div class="product-image"><a href="gallery.php"><img class="img-responsive" src="images/29a.jpg"></a>
				 </div><br>

				 <div class="product-title">
				  <h4 class="product-title">BLUE</h4>
				 </div>

				  <div class="product-price">
				  <span class="price-at-bottom">&euro; 260 </span>
				 </div>

				 <a class="add1 item_add" href="cart.php">ADD TO CART <i> </i>
				 </a><br><br>
				 </div>
				 

				<div class="col-md-4">
					<div class="product-image"><a href="gallery.php"><img class="img-responsive" src="images/13.jpg"></a>
					</div><br>
					<div class="product-title">
					<h4 class="product-title">GOLD</h4></div>
				  <div class="product-price">
				  <span class="price-at-bottom">&euro; 320 </span>
				 </div>
				 <a class="add1 item_add" href="cart.php">ADD TO CART <i> </i></a><br><br>
				</div>


				<div class="col-md-4">
					<div class="product-image"><a href="gallery.php"><img class="img-responsive" src="images/cd.jpg"></a>
					</div><br>
					<div class="product-title">
					<h4 class="product-title">WHITE</h4></div>
				  <div class="product-price">
				  <span class="price-at-bottom">&euro; 350 </span>
				 </div>
				 <a class="add1 item_add" href="cart.php">ADD TO CART <i> </i></a><br><br>
				</div>
				</div><br>

			<div class="row">
				<div class="col-md-4">
				 <div class="product-image"><a href="gallery.php"><img class="img-responsive" src="images/ab.jpg"></a>
				 </div><br>
				 <div class="product-title">
				  <h4 class="product-title">GREY</h4></div>
				  <div class="product-price">
				  <span class="price-at-bottom">&euro; 220 </span>
				 </div>
				 <a class="add1 item_add" href="cart.php">ADD TO CART <i> </i></a><br><br>
				 </div>

				<div class="col-md-4">
				 <div class="product-image"><a href="gallery.php"><img class="img-responsive" src="images/23.jpg"></a>
				 </div><br>
				 <div class="product-title">
				  <h4 class="product-title">WARM</h4></div>
				  <div class="product-price">
				  <span class="price-at-bottom">&euro; 260 </span>
				 </div>
				 <a class="add1 item_add" href="cart.php">ADD TO CART <i> </i></a><br><br>
				 </div>

				<div class="col-md-4">
				 <div class="product-image"><a href="gallery.php"><img class="img-responsive" src="images/37.jpg"></a>
				 </div><br>
				 <div class="product-title">
				  <h4 class="product-title">HAZY</h4></div>
				  <div class="product-price">
				  <span class="price-at-bottom">&euro; 395 </span>
				 </div>
				 <a class="add1 item_add" href="cart.php">ADD TO CART <i> </i></a><br><br>
				 </div>
			</div><br>

			<div class="row">
				<div class="col-md-4">
				 <div class="product-image"><a href="gallery.php"><img class="img-responsive" src="images/18.jpg"></a>
				 </div><br>
				 <div class="product-title">
				  <h4 class="product-title">LS</h4></div>
				  <div class="product-price">
				  <span class="price-at-bottom">&euro; 260 </span>
				 </div>
				 <a class="add1 item_add" href="cart.php">ADD TO CART <i> </i></a><br><br>
				 </div>

				<div class="col-md-4">
				 <div class="product-image"><a href="gallery.php"><img class="img-responsive" src="images/12b.jpg"></a>
				 </div><br>
				 <div class="product-title">
				  <h4 class="product-title">COLLAGE</h4></div>
				  <div class="product-price">
				  <span class="price-at-bottom">&euro; 380 </span>
				 </div>
				 <a class="add1 item_add" href="cart.php">ADD TO CART <i> </i></a><br><br>
				 </div>

				<div class="col-md-4">
				 <div class="product-image"><a href="gallery.php"><img class="img-responsive" src="images/341.jpg"></a>
				 </div><br>
				 <div class="product-title">
				  <h4 class="product-title">COVER</h4></div>
				  <div class="product-price">
				  <span class="price-at-bottom">&euro; 575 </span>
				 </div>
				 <a class="add1 item_add" href="cart.php">ADD TO CART <i> </i></a><br><br>
				 </div>
			</div>



		</div>
		</div>
	</div>
	</div>
	<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>HAPPY SHOPPING</h3>
						<p>Thank you for visiting my WebStore.</p>
					</div>
				</div>
	</body>
</html>

