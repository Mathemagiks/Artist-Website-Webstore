<?php

	session_start();

	require_once 'mysqli_connect.php';
	
	/** If session is not set, redirect to the login page (account.php) */
	if( !isset($_SESSION['login_user']) ) {
    /** Send a raw HTTP header with the given location */
		header("Location: account.php");
		exit;
	}
	
  /** Get logged in users details from MariaDB user table  */
	$response = @mysqli_query("SELECT * FROM user WHERE user_id=".$_SESSION['login_user']);

  /** Get the result row */
	$userRow = @mysqli_fetch_array($response);

?>
<!DOCTYPE html>
<html>
<head>
<title>Payment</title>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
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

<script src="js/jqueryCreditCardValidator/jqueryCreditCardValidator.js"></script>
<script src="js/validateCreditCard.js"></script>

<script>
	/* Get user id from PHP session and expose on Window object*/
	var id = '<?php echo $_SESSION["login_user"] ?>';
	
	/** Get session id from PHP and expose on Window object */
	var sessionId = '<?php echo session_id();?>';

	window.user = {
		user_id: id, 
		sessionId: sessionId
	}; 

</script>
<script src="js/commitOrder.js" defer></script>
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
									<li><a href="product.php">Painting</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>GO TO</h4>
								<ul>
									<li><a href="account.php">Login</a></li>
									<li><a href="commission.php">Commission Ray</a></li>
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
									<li><a href="product.php">Terms of Service</a></li>
									
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
	<h6 class="dress"><a href="index.php">Home</a> <i> </i>Payment</h6>
</div>
<div class="back">
	<h2>PAYMENT</h2>
</div>
		<!---->

  <style type="text/css" media="screen">
    .has-error input {
      border-width: 2px;
    }

    .validation.text-danger:after {
      content: 'Validation failed';
    }

    .validation.text-success:after {
      content: 'Validation passed';
    }
  </style>

  <script>
    
  </script>
<div class="product">
	<div class="container">
		<div class="col-md-3 product-price"></div>
	</div>
			<div class="container">
		<div class="register">
		<h3>PAYMENT DETAILS</h3>
		  	<form autocomplete="on" action="" method=""> 
				
					
					<div class="mation">
					<div>
						<span>First Name</span>
						<input type="text" name="first_name" value=""/> 
					</div>
					<div>
						<span>Last Name</span>
						<input type="text" name="last_name" value="" /> 
					 </div>
					 <div>
						 <span>Address Line1</span>
						 <input type="text" name="email_address" value="" />
						</div>
						<div>
							<span>Address Line2</span>
								<input type="password" name="password" value="" />						 
					   </div>
					   <div>
						  <span>County</span>
						    <input type="text" name="first_name" value=""/> 
					   </div>
					   <div>
						  <span>City</span>
						   <input type="text" name="first_name" value=""/> 
					  </div>
					  <div>
						 <span>Country</span>
						  <input type="text" name="first_name" value=""/> 
					  </div>

					  <div>
						 <span>Credit Card Number</span>
						  <input id="cc-number" class="cc-number" type="text" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required/> 
						  <p id="numberWarning" class="warning">Please enter a valid credit card number!</p>
					  </div>
					  <div>
						 <span>CVC</span>
						  <input id="cc-cvc" class="cc-cvc" type="text" autocomplete="off" placeholder="•••" required>
						  <p id="cvcWarning" class="warning">The number you entered is not valid!</p>
					  </div>
					    <div>
					  	 <span>Card Expiry Date</span>
					  	  <input id="cc-exp" class="cc-exp" type="text" autocomplete="cc-exp" placeholder="•• / ••" required>
					  	  <p id="expiryWarning" class="warning">The number you entered is not valid!</p>
					    </div>

					    

					  </div>
				     <input id="proceed" type="submit" name="submit" value="Proceed"/>
				     <p class="warning" id="disabledProceedButtonWarning">Proceed button is disabled. Please enter a valid credit card number to enable!</p>
				</form>
				<script>
					
				</script>

		   </div>
			</div>
				<!---->
		
		  
		  
			<div class="clearfix"> </div>
			<!--</ul>-->
		<!--</form>-->
	 </div>
 
		</div>
			 </div>
					  
		 </div>
		 

				</div>
				<div class="clearfix"> </div>
				
			<!---->
				<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>FREE SHIPPING!</h3>
						<p>I am offering FREE Shipping to All My Customers for a Limited time only</p>
					</div>
				</div>

</body>
</html>