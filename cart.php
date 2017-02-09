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
<title>Checkout</title>
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
<!--<script type="text/javascript" src="js/jquery.shop.js"></script>-->
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
<script>

//Calculate cart total
function calculateTotal(collection, session_id){
	// array to store prices

	var prices = [];

	//get individual prices of item from localStorage

	for(var key in localStorage){

		if (key.match(session_id)){

			//item parsed from string into object
			var parsedObject = JSON.parse(localStorage.getItem(key));

			
			//remove euro symbol from price
			price = parsedObject.price.split("€ ").pop();
			
			//add numerical price to prices array
			prices.push(parseFloat(price));
		}
	}
  /*sum all prices in prices array with reduce  method applying a fuction accumulator
  for each value of the array to 'reduce' it to a single value. A really cool function!*/
  if(prices.length == 0){
  	return 0;
  }
  else {
  	return prices.reduce(function(a, b){return a+b;});
  }
	
}

var session_id = '<?php echo session_id();?>';

// calculate total value assigned to total
var total = calculateTotal(localStorage, session_id); 

$( document ).ready(function() {
  // Handler for .ready() called.
  function populatePage(){
  	//building html string for rows and columns
	var newContent = '';//"<table>";
	//loop through localStorage for session_id match
		for( var key in localStorage){
			if(key.match(session_id)){
				//if object matches then get it and parse it
				var parsedObject = JSON.parse(localStorage.getItem(key));
		
		//build new content html string with key valued pair properties

     newContent += '<tr>';
		 newContent += '<td><img img-responsive src="' + parsedObject.image.replace(".jpg", "_tn.jpg") + '" /></td>';
		 newContent += '<td>'+ parsedObject.title + '</td>';
		 newContent += '<td class="clearfix">' + '<span>'+parsedObject.price+'</span>' + '<button data-cart-id="' + parsedObject.cartId +'" class="close" onclick="removeFromCart()">Remove</button></td></tr>';

			}
		}
    //add inner html to table body to populate 
		var el = document.getElementById("cartItems");

	 el.innerHTML = newContent;
	 /*Total appended  to html span with id of total in cart
	 with unicode euro symbol*/
	 $("#total").text('\u20ac'+total);
	 
	 
	 function removeFromCart(){

	 	// get the button
  	var target = event.target;//button

  	// get the data-cart-id attribute value from the button in the DOM
  	var dataCartId = $(target).attr('data-cart-id');

  	// remove the cart row
  	target.parentElement.parentElement.remove();

  	// loop over localStorage and remove any item with a matching price and sessionId
  	for( var key in localStorage){
  		if(key.match(session_id)){
  			//if object matches then get it and parse it
  			var parsedObject = JSON.parse(localStorage.getItem(key));
  			// if the locally stored item cartId property matches the
  			// corresponding cartId property on the button that was 
  			// clicked, remove the record from localStorage and 
  			// recalculate the cart total
  			if(parsedObject.cartId == dataCartId ){
  				localStorage.removeItem(key);
  				$("#total").text('\u20ac'+calculateTotal());
  			}
  			else {
  				// recalculate cart total
  				$("#total").text('\u20ac'+calculateTotal());
  			}
  		}
  	}
  }
var el = document.getElementById('cartItems');
el.addEventListener('click',removeFromCart,false);
}

	
  populatePage();
});


</script>
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
	

					<!--to implement update cart qty/leaving it for now-->
					<div class="cart box_1">
						<a href="cart.php">
						<h3> <div class="total">
							<span></span><span id="qty" class="qty"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<!--<p><a href="javascript:;" class="empty" onclick="localStorage.clear()">Empty Cart</a></p>-->
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
	<h6 class="dress"><a href="index.php">Home</a> <i> </i>My Shopping Cart</h6>
</div>
<div class="back">
	<h2>MY SHOPPING CART</h2>
</div>
		<!---->
<div class="product">
	<div class="container">
		<div class="col-md-3 product-price"></div>
	</div>
				<!---->
		<div class="col-md-12 product-price1">
		<div class="check-out">	 
		 <div class=" cart-items">
		<div id="content" class="in-check" >
				  
		  <table  class="unit shopping-cart clearfix table table-responsive">
		   <thead>
		    <tr>
			    <th>Item</th>
			    <th>Art Title</th>		
			 <!--<th>Stock Status</th>-->
			    <th>Price</th>
			 <!--<th>Update</th>-->
			  </tr>
			 </thead>
			 
			 <tbody id="cartItems" ></tbody>
			</table>
			
			<!--<div class="clearfix"> </div>-->
		  <!--</ul>-->
		  <p id="sub-total"><strong>Total</strong>:<span id="total">&euro;</span>
		  </p>
		   <a href="product.php" class="morebtn INS">Continue Shopping</a><a href="payment.php" class="morebtn2 INS">Go to Checkout</a>
		  
		  
			<div class="clearfix"> </div>
			<!--</ul>-->
		<!--</form>-->
	 </div>
 
		</div>
			 </div>
					  
		 </div>
		 

				</div>
				<div class="clearfix"> </div>
				<footer></footer>
			
				<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>FREE SHIPPING!</h3>
						<p>I am offering FREE Shipping to All My Customers for a Limited time only</p>
					</div>
				</div>
<!---->
	
</body>
</html>