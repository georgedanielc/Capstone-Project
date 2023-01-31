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
			My Account
		</h3></br>


	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<div class="pagination flex-m flex-w p-r-50">
	<h4 class="p-b-7">
			Pending Request/s:
		</h4></div>

			<!-- Cart item -->


			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bg6">
					<table class="table-shopping-cart">
						<tr class="table-head">

							<th class="column-1">Request ID</th>
							<th class="column-2 ">Resident Name</th>
							<th class="column-3 ">Document</th>
							<th class="column-5">Status</th>
							<th class="column-7">				</th>
							<th class="column-7">			Remarks	</th>
							
						</tr>
				<?php 		
				     
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);
	
			while ($row= mysqli_fetch_array ($result) ){
					$username=$row['fname']." ".$row['lname'];
		    }
		     
		    $result= mysqli_query($conn,"select * from document_request where username ='$username' and type = 'document' order by request_id DESC") or die (mysql_error());
			$row=mysqli_num_rows($result);
	
			while ($row= mysqli_fetch_array ($result) ){
				$request_id=$row['request_id'];
				$stats=$row['stats'];
				

		?>
						<tr class="table-row">

							<td class="column-1"><?php echo $row['request_id']?></td>
							<td class="column-2"><?php echo $row['username']?></td>
							<td class="column-3"><?php echo $row['iname']?></td>
							<td class="column-5"><?php echo $row['stats']?></td>
							<td class="column-7">
							<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button --><?php if($stats=='Approve'):?>
						<a href = "invoice/reqinvoice.php<?php echo '?request_id='.$request_id; ?>" target="_blank"><button class="flex-c-s sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" >
							Acknowledgement Slip
						</button></a>	<?php endif;?>
					</div>
					<td class="column-7">
												<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button --><?php if($stats=='Disapprove'):?>
						<?php echo $row['remarks']?>
							<?php endif;?></td>
					</div>
	</tr><?php } ?>
					
					</tr>
	
					</table>
				</div>
			</div>
			
			
<br><br>
<div class="pagination flex-m flex-w p-r-50">
	<h4 class="p-b-7">
			Pending Reservation/s:
		</h4></div>

			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bg6">
					<table class="table-shopping-cart">
						<tr class="table-head">

							<th class="column-1">Request ID</th>
							<th class="column-2 ">Resident Name</th>
							<th class="column-3 ">Reservable</th>
							<th class="column-5">Quantity</th>
							<th class="column-5">Status</th>
							<th class="column-7">				</th>
								<th class="column-7">			Remarks	</th>
							
						</tr>
				<?php 		
				     
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);
	
			while ($row= mysqli_fetch_array ($result) ){
					$username=$row['fname']." ".$row['lname'];
		    }
		     
		    $result= mysqli_query($conn,"select * from reservation_request where username ='$username' and type = 'reservable' order by reservation_id DESC") or die (mysql_error());
			$row=mysqli_num_rows($result);
	
			while ($row= mysqli_fetch_array ($result) ){
				$reservation_id=$row['reservation_id'];
				$stats=$row['stats'];
				

		?>
						<tr class="table-row">

							<td class="column-1"><?php echo $row['reservation_id']?></td>
							<td class="column-2"><?php echo $row['username']?></td>
							<td class="column-3"><?php echo $row['iname']?></td>
							<td class="column-5"><?php echo $row['quantity']?></td>
							<td class="column-5"><?php echo $row['stats']?></td>
							<td class="column-7">
							<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button --><?php if($stats=='Approve'):?>
						<a href = "invoice/resinvoice.php<?php echo '?reservation_id='.$reservation_id; ?>" target="_blank" ><button class="flex-c-s sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Acknowledgement Slip
						</button></a>	<?php endif;?>
					</div>
					<td class="column-7">
												<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button --><?php if($stats=='Disapprove'):?>
						<?php echo $row['remarks']?>
							<?php endif;?></td>
					</div>
	</tr><?php } ?>
					</table>
				</div>
			</div>
			
			</div>
			


	<!-- content page -->
	
						<!-- Featured Products -->
						
			</div>
			
		
		
	</section>
<br><br><br>	

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
