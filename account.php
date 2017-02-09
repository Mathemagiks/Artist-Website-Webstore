<?php

session_start();//starting session

// This will be visible in the DOM if the username and password
// don't match those on file
$loginError = false;

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(isset($_POST['register'])){
	  
	  header( "Location: register.php" );
	  exit();
	}
	require ('mysqli_connect.php'); // Connect to the db. Credentials in a file outside of web root. Makes it more secure. Users won't be able to see this file.
		
	$errors = array(); // Initialize an error array.
	 
	
	// Check for a username:
	if (empty($_POST['email_address'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email_address']));
	}

	// Check for the current password:
	if (empty($_POST['password'])) {
		$errors[] = 'You forgot to enter your current password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($_POST['password']));
	}
	
	if (empty($errors)) { // If everything's OK.

		// Check that they've entered the right username/password combination:
		$q = "SELECT user_id FROM user WHERE email_address='$e' AND password=SHA1('$p' )";
		$r = @mysqli_query($dbc, $q);
		$num = @mysqli_num_rows($r);
		$rArray = mysqli_fetch_array($r);
		
		if ($num == 1) { // Match was made.
			//Initializing session
			$_SESSION['login_user']=$rArray['user_id'];

			

			mysqli_close($dbc); // Close the database connection.
			//redirect to shop/product page
			header('Location: product.php');
			exit();
				
		} else { // Invalid username/password combination.
			$loginError = '<h1 class="warning">Error!</h1>
			<p class=" warning">The username and password do not match those on file. <br>Please click CREATE AN ACCOUNT to register as a new customer!</p>';
		}
		
	} else { // Report the errors.

		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
	
	} // End of if (empty($errors)) IF.

	mysqli_close($dbc); // Close the database connection.
		
} // End of the main Submit conditional.
//include ('includes/footer.php'); 
 //LOGIN/LOGOUT

?>
<!DOCTYPE html>
<html>
<head>
<title>Raymond Burrows Account</title>
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

<!--Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
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
					<a href="<?php if(isset($_SESSION['login_user'])){ echo 'logout.php?logout';}else{echo "account.php";} ?>"><i class="men"></i><?php if(isset($_SESSION['login_user']) ) { echo 'Logout'; } else { echo '&nbsp;';}?></a>
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
									<li><a href="contact.php">Commissions</a></li>
									<li><a href="about.php">About</a></li>
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
		<li ><a href="about.php">About</a></li>				
				<li><a href="gallery.php">Gallery</a>
				
				</li>
				
				<li><a href="contact.php">Contact</a>
					
				</li>
		 </ul> 
		 <!---->
		 

					<!---->
					<!--to implement functionality hide for now-->
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
	<h6 class="dress"><a href="index.php">Home</a> <i> </i> Account </h6>
</div>
<div class="back">
	<h2>ACCOUNT</h2>
</div>
		<!---->
		<div class="container">
		<div class="account_grid">
			   <div class=" login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form action="account.php" method="post">
				  <div>
				  <span><?php if($loginError){echo $loginError;}else{ echo '&nbsp;';} ?></span>
					<span>Email Address</span>
					<input type="text" name="email_address" value="<?php if (isset($_POST['email_address'])) echo $_POST['email_address']; ?>" /> 
				  </div>
				  <div>
					<span>Password</span>
					<input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"> 
					</div>
					<div>
					<input type="submit" name="submit" value="Login"/>
				  </div>
			
			    </form>
			   </div>	
			    <div class=" login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with my store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
				 
			   
			   </div>
			
			 </div>
		
			</div>
			<!---->
				<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>WELCOME</h3>
						<p>Thank you for visiting my WebStore</p>
					</div>
				</div>
<!---->
	
</body>
</html>