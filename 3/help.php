<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('session.php'); ?>
<?php include ('dbconn.php'); ?>
<?php
if(!empty($_SESSION['id'])){
	$test=$_SESSION['id'];
	$test2=$_SESSION['login'];	
}
?>
	<title>Barangay Mahabang Parang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body class="animsition">

	<!-- Header -->
	<!-- Header -->
	
	<div class="container-menu-header">

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/blogo.png" alt="IMG-LOGO"></img>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
								<?php if(($login=='Resident')||($login=='Admin')||($login=='SuperAdmin')||($login=='Author')):?>
			<?php 		
  
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];

		   ?>
		   Welcome!!&nbsp;&nbsp;<?php echo $row['fname']." ".$row['lname']?>
		   <?php } ?><?php endif;?>
</a>

				

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
								

							<li>
								<a href="services.php">Services</a>
							</li>

							<li>
								<a href="about.php">Barangay</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
														<li>
								<a href="faqs.php">FAQs</a>
							</li>
			<?php if(($login=='SuperAdmin')||($login=='Admin')||($login=='Author')):?>
			
			<?php 		
  
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];

		   ?><?php } ?>
			
							<div class="header-icons">	
							
					
					<ul class="main_menu">
<li>
								<a href="dashboard/index.php">Admin Dashboard</a>
							</li><span class="linedivide1"></span>
						<li><a href="sessiondes.php">Log Out</a></li>
						</li>
			<?php else:?>
										
			<?php if($login=='Resident'):?>
			<?php 		
  
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];

		   ?>
			 <li>	<a href="myaccount.php"  class="add_to_cart">My Account</a></li>
			<li>
			<?php } ?>	
			   

			</li>
			
			</li>
						</ul>
						
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">	
							
					
					<ul class="main_menu">
							<li>

								<li>Account
								<ul class="sub_menu">
											<?php 		
  
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];

		   ?>
			<li><a href="changepassword.php<?php echo '?username='.$username; ?>">Account settings</a></li><?php }?>
									<li><a href="sessiondes.php">Log Out</a></li>

								</ul>
								</li>
	</ul>
	<div class="header-icons">
										<li><a href="help.php"> Help</a></li>
					<span class="linedivide1"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              			<?php else:?>
						<div class="header-icons">
										<li><a href="help.php">&nbsp; Help</a></li>
					<span class="linedivide1"></span>
						<li><a href="login.php">Log In</a></li>
				
			<?php endif;?>
              
			</li>
<?php endif;?>
						<!-- Header cart noti -->
	
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/blogo.png" alt="IMG-LOGO">
												<?php if(($login=='Resident')||($login=='Admin')||($login=='SuperAdmin')||($login=='Author')):?>
			<?php 		
  
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];

		   ?>
		   Welcome!!&nbsp;&nbsp;<?php echo $row['fname']." ".$row['lname']?>
		   <?php } ?><?php endif;?>
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->


					<span class="linedivide2"></span>

					<div class="header-wrapicon2">

						<!-- Header cart noti -->

					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
		
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
					
						<span class="topbar-child1">
						Welcome to Barangay Mahabang Parang Website!
						</span>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="https://www.facebook.com/MahabangParangOfficialPage/" class="topbar-social-item fa fa-facebook"></a>
														<a href="#" class="topbar-social-item fa fa-instagram"></a>
																					<a href="#" class="topbar-social-item fa fa-twitter"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="services.php">Services</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.php">Barangay</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Contact</a>
					</li>
										<li class="item-menu-mobile">
						<a href="faqs.php">FAQs</a>
					</li>
			<?php if($login=='Resident'):?>
			<?php 		
  
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];

		   ?>
			 <li  class="item-menu-mobile">	
			 <a href="myaccount.php">My Account 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
			 </li>
			 


			
			<?php } ?>	
			
			
			   <li class="item-menu-mobile">
			  <a> Account</a>	
								<ul class="sub-menu">
																			<?php 		
  
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];

		   ?>
			<li><a href="changepassword.php<?php echo '?username='.$username; ?>">Account settings</a></li><?php }?>
							<li><a href="sessiondes.php">Log Out</a></li>
							
						</ul>
							<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
								
								</li>
	
	<li class="item-menu-mobile">
	<a href="help.php"> Help</a>
	</li>
	<?php else:?>
	
	<li class="item-menu-mobile">
	<a href="help.php">Help</a>
	</li>
	
		<li class="item-menu-mobile">
		<a href="login.php">Log In</a>
		</li>
		<?php endif;?>

			
			
				</ul>
			</nav>
			
			
			
			
		</div>
		
		
	</header>
	<!-- Title Page -->
	<br>
		<h3 class="m-text5 t-center">
			Help
		</h3></br>

			<div class="row">

					<!-- Block3 -->
<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<div class="block3">	

							



						</div>
					</div>
				</div>

			</div>
	<p><b><h4>	<center>How to get an account</center></b></p></h4>
	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
						<b>Step 1</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Get the residents form to the barangay and fill it up.				
								<a href="#"></a>
								<br>
					


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 2</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Pass the filled up form to the barangay		
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 3</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Wait for the confirmation. Your account are being processed.			
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 4</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											The barangay will give you a signal if you already have an account				
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 5</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											The barangay will give you the registered account.			
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>

			

				</div>
		</div>
		
	</div>
	</section>
<br><br><br>	
<hr>
&nbsp;&nbsp;

<p><b><h4><center>How to request certificates</center></b>	</p></h4>
	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
						<b>Step 1</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Go to the barangay website		
											
								<a href="#"></a>
								<br>
					


							</li>
						</ul>

				</div>
				

				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 2</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Login to the Barangay's website. 			
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 3</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Go to 'Services' and choose the type of certificate you need.			
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 4</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Enter your purpose, then click 'Send Request'.				
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 5</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Wait for your request's approval at 'MyAccount' tab.				
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>

<br><br><br>	
				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						<div class="rightbar">
							<!-- Search -->
						

							<!-- Categories -->
													<h4 class="p-b-7">
								<b>Step 6</b>
							</h4>
							<br>
	
	
							<ul>
						
							<li class="p-t-6 p-b-8 bo7">
							
								
												Print the acknowledgement slip and bring it to the barangay				
									<a href="#"></a>
								<br>
							


								</li>
						</ul>

				</div>
				
			</div>
			</div>
		</div>
	</section>
<br> <br> <br>
<hr>
&nbsp;&nbsp;
<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<div class="block3">	

							



						</div>
					</div>
				</div>

			</div>
	<p><b><h4>	<center>How to reserve an item</center></b>	</p></h4>
	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
						<b>Step 1</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Go to the barangay website		
											
								<a href="#"></a>
								<br>
					


							</li>
						</ul>

				</div>
				

				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 2</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Login to the Barangay's website. 			
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 3</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Go to 'Services' and click the item you want to reserve.		
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 4</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Enter your purpose and the range of the date, then click 'Send Request'.				
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
												<h4 class="p-b-7">
							<b>Step 5</b>
						</h4>
						<br>


						<ul>
						
						<li class="p-t-6 p-b-8 bo7">
							
								
											Wait for your request's approval at 'MyAccount' tab.				
								<a href="#"></a>
								<br>
						


							</li>
						</ul>

				</div>
				
			</div>
			</div>

<br><br><br>	
				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						<div class="rightbar">
							<!-- Search -->
						

							<!-- Categories -->
													<h4 class="p-b-7">
								<b>Step 6</b>
							</h4>
							<br>
	
	
							<ul>
						
							<li class="p-t-6 p-b-8 bo7">
							
								
												Print the acknowledgement slip and bring it to the barangay.				
									<a href="#"></a>
								<br>
							


								</li>
						</ul>

				</div>
				
			</div>
			</div>
		</div>
	</section>
<br> <br> <br>

	<!-- Footer -->
	<div id="footer">
		<?php 
			include('footer.php');
		?>
	</div>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
