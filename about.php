<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>About Raymond Burrows</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/animate.css"/>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
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
					<li ><!--<a href="mailto:info@example.com" >--><span><i > </i>info@art101.com<!--</a>--></span></li>
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
									
									<li><a href="404.php">Terms of service</a></li>
									
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
					<!--To come back to functionality-->
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
	<h6 class="dress"><a href="index.php">Home</a> <i> </i> About </h6>
</div>
<div class="back">
	<h2>ABOUT</h2>
</div>

          	<!--ADD About ray-->
          	<section id = "about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About the Artist</h2>
                    <h3 class="section-subheading text-muted2">Click on View below for Gallery.</h3>
                </div>
            </div>
            </div>
            <div class ="container">
            <div class = "row">
                <div class="col-md-4 animated slideInDown">
                    <div class="wip-border">
                        <h3>Biography</h3>
                        <p>Raymond Burrows is an Irish artist who specializes in the medium of print and collage. His work is a cacophony of imagery influenced by contemporary media, the urban environment and the interaction between the image and architecture.

Originally from Kilkenny, Raymond has been based in Galway and New York City. NYC with its many layers of cultures, styles, personalities and social classes have influenced his artwork.
 His collages draw source material from the mass media world of advertising, TV, the movie industry and photojournalism. He combines them in a way that transforms their meaning and context by creating a uniform image where Icons bleed over Architecture, Adverts cover Landscapes, Pornography touches Patterns and Headlines meet the gutter.</p>
                    </div>
                </div>

                
                 <div class="col-md-4">
                 <div class="wip-border animated slideInDown">
                    
                   
                        <h3>Exhibition</h3>
                        <p>Raymond Burrows body of work, SMARTART 101 took five years to create......</p> 
                        <p><i>"In April 2011 we were delighted to host an exhibition of original art from Galway based artist, Raymond Burrows, which was unique and impressive in both scale and content. Entitled SmartArt 101, comprised of 101 individual canvases that combined to present one powerful piece of commentary on modern life, spanning the gammut of popular and political culture since the time of the artist's birth up until the present day."</i></p>

<p>-Breandán O hEaghra </p>

                        <button type="button" class="btn btn-x btn-lg" h data-toggle="modal" data-target="#exhibitModal"><a href="gallery.php">View</a></button>


                    </div>
                </div>

             <div class = "col-md-4 animated slideInDown">
                <div class="wip-border">
                    <h3>Techniques</h3>
                    <p>The main areas of Raymond’s work are the art of Collage and Screenprint.
                    Raymond’s screenprints are drawn from his interest in stencil work and how graffiti in a public space can alter its appearance. Sometimes this alteration is dramatic but he is also drawn to the seemingly innocuous and often overlooked aspect of street culture. These elements include signposts, tightly cropped views of poster and tag covered street corners, snapshots of everyday life in an urban environment, distorted architectural forms and advertising. Through using stencils he presents them in a stylized and graphic form.

The variant and repetitive nature of screen-printing and collage allows the artist to use the same elements over again, almost in a self referencing ironic way. Ray is also a Master draftsman and skilled painter.</p> 
                </div>
                   
            </div>
            
            </div>
        </div>
    </section>

			<!---->
				<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>HAPPY SHOPPING!</h3>
						<p>Thank you for visiting my WebStore.</p>
					</div>
				</div>
<!---->
	
</body>
</html>