<!-- <?php
// include('inc/portal.php');
?> -->

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Easybuild |  Login</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
 <link href="css/font-awesome.css" rel="stylesheet">  
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
	  <!-- <div class="login100-more" style="background-image: url('image/city_02.jpg');"> -->
		<div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">

				<!-- //nav_agile_w3l -->
                <li class="second logo admin"><h1><a href="index.php"><i class="fa fa-graduation-cap" aria-hidden = "true"></i>Easybuild </a></h1></li>
					
				<li class="second w3l_search admin_login">
				</li>
				<li class="second full-screen">
					
				</li>

			</ul>
			<!-- //nav -->
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
			<div class="inner_content">
				<!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
						<div class="registration admin_agile">
								
							<div class="signin-form profile admin">
								<img src="image/logo.png" height="80px" width="200px">
									<h2> Login</h2>
									<div class="login-form">
										<input type="email" name="name" id="email"  placeholder="Enter Email" required="">
										<input type="password" name="password" id="password" placeholder="Password" required="">
											<div class="tp">
												<input type="submit" id="login" value="LOGIN">
											</div>
											<p>Don't have an account?<a href="index.php">Register</a></p>
															
											</div>
												<div class="login-social-grids admin_w3">
													<ul>
														
													</ul>
												</div>
													 
											</div>
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 EasyBuild . All Rights Reserved </p>
</div>	
<!--copy rights end here-->
<!-- js -->

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>  
	 <script src="js/login.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script> 
	<script src="js/swal.js"></script>  
			
<!-- //js -->
 <script src="js/screenfull.js"></script> 
		 <script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>  
    <script src="js/jquery.nicescroll.js"></script> 
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>  
</body>
</html>