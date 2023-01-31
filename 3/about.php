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


	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
			<br><h3 class="m-text5 t-center">
			The Barangay
		</h3><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="images/barangay halls.png" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Barangay Mahabang Parang
					</h3>

					<p class="p-b-28">
						Muli sa paglipas ng taon, sa pangunguna ng ating magiting na Alkalde Paulino Luciano at Kgg. Gob. Ignacio Santiago bilang tugon na rin sa pagiging mabuting mamamayan ng mga taga-Mahabang Parang, ang ispaltong daan na bagama't makapal ay hindi nakayang makipagtagisan sa panahon. Muli itong inayos at ginawang sementado. Ang buong kahabaan ng daan mula bayan pauwi ng Mahabang Parang 'gang hangganan ng Sta. Rosa, Marilao. Maging ang mga iskinita ay sementado sa pamamatnubay ng kasalukuyang Brgy. Captain Rogelio Santos at pagtutulungan na rin at ambagan ng mga taga-Mahabang Parang, ang sementadong daan na kung iyong mamalasin ay tila baga gayumang nag-aanyaya upang damahin ang kasaganaang tinatamasa, hindi lang ng mga taga-Mahabang Parang kundi, maging ng kalapit baryo na rin.
    </p><p>At ngayon, pagkalipas ng apat na taon, muli itong magdiriwang ng pista, bilang pasasalamat sa Mahal na Patrong San Miguel Arkanghel. Ating saksihan at makiisa tayong lahat sa kaunlaran ng kay haba't parang gunitang kasaysayan ng Mahabang Parang.					</p>

					
				</div>
			</div>
		</div>
			<br>

	</section>
<h3 class="m-text5 t-center">
			Barangay Officials
		</h3>
<section class="blog bgwhite p-t-94 p-b-65">
	<div class="container">


			<div class="row">
						<?php 		
		
		     
							$result= mysqli_query($conn,"SELECT * FROM bofficial ") or die (mysql_error());
							$row=mysqli_num_rows($result);
							$ctr=1;
							while ($row= mysqli_fetch_array ($result) ){
							$bofficial_id=$row['bofficial_id'];
				

							?>
							<?php if(($ctr % 5)==0): ?>		<?php else: ?>						
				<?php endif; ?>
					<!-- Block3 -->
<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<div class="block3">	

							
						<a href="#"class="block3-img dis-block hov-img-zoom">
						
							<img src="dashboard/bofficial/<?php echo $row['oimage']; ?>  " width=300 height=400 alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="projectdetail.php<?php echo '?bofficial_id='.$bofficial_id; ?>" class="m-text11">
									<?php echo $row['oname']; ?>
								</a>
							</h4>
														 <span class="s-text7"><?php echo $row['position']; ?></span>
														 <br>
							 <span class="s-text7">Birthdate: </span><span class="s-text7"><?php echo $row['bdate']; ?></span>
							<p class="s-text8 p-t-16">
								Address: <?php echo $row['address']; ?>
							</p>
						</div>
					</div>
				</div><?php } ?>

			</div>
		</div>
	</section>

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
