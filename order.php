<?php

	session_start();

	$SESSID = session_id();

	require_once 'mysqli_connect.php';
	
	/** If session is not set, redirect to the login page (account.php) */
	if( !isset($_SESSION['login_user']) ) {
    /** Send a raw HTTP header with the given location */
		header("Location: account.php");
		exit;
	}
	
  /** Get logged in users details from MariaDB user table  */
	$response = @mysqli_query($dbc, "SELECT * FROM orders WHERE user_id=".$_SESSION['login_user']);


	/** Extract the row data for all where order data where the user id
	is equal to the current user **/
  $rows = array();
  while($r = @mysqli_fetch_array($response)) {
    $rows[] = $r;
  }
  /**
   * JSON encoded row data - this will be used by JavaScript to extract and match items from local storage
   */
  $rows = json_encode($rows);
	

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
<script src="js/jquery.creditCardValidator.js"></script>
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
				<ul class="support-right">
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
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
		
	</div>
<!---->
<div class="container">
	<h6 class="dress"><a href="">Home</a> <i> </i>Order</h6>
</div>
<div class="back">
	<h2>PAYMENT CONFIRMATION</h2>
</div>
		<!---->
<div class="product">
	<div class="container">
		<div class="col-md-3 product-price"></div>
	</div>
			<div class="container">
		<div class="register">
		<h3>Thank you for your order</h3>
		  	  <form action="" method="post"> 
				
					
					<div class="mation">
					<div class="orderId">
						<!-- orderId is injected here -->
						
					</div>
					
					  </div>
				</form>
				

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
						<h3>THANK YOU!</h3>
						<p>I am offering FREE Shipping to All My Customers for a Limited time only</p>
					</div>
				</div>
<!---->
	<script defer>
	// A SQL query is executed at the top of this file to the rows associated
 	// the current user in the order table - those rows are retrieved and 
  // analysed in order to extract the associated order_id, which is then 
  // injected into the DOM
		var rows = '<?php echo $rows ?>';
		var sessionId = '<?php echo session_id() ?>';
		var rowsAsArray = JSON.parse(rows);
		var sessionId = sessionId;

		$.each(rowsAsArray, function(key, value){
		    if(value.sessionId == sessionId) {
		    	
		    	var orderText = value.order_id; 
		        $('div.orderId')
		        	.html("<span class='order-span'>Order no: <strong class='orderId'>&nbsp;" + orderText+'</strong></span>');
		    } 
		});
	</script>
</body>
</html>