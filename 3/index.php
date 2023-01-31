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

	<!-- Slide1 -->
	<section class="slide1">

		<div class="wrap-slick1">
		
			<?php 		
		
		     
							$result= mysqli_query($conn,"SELECT * FROM banner") or die (mysql_error());
							$row=mysqli_num_rows($result);
							$ctr=1;
							while ($row= mysqli_fetch_array ($result) ){
							$b_id=$row['b_id'];
				

							?>
							<?php if(($ctr % 5)==0): ?>
							
<?php else: ?>
			<div class="slick1">
			<?php endif; ?>
				<div class="item-slick1 item1-slick1" style="background-image: url(dashboard/banners/<?php echo $row['bimage']; ?>)"></img>
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					
					
					
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">

							<!-- Button -->
							
							
						</div>
					</div>
				</div><?php } ?>


			</div>
		</div>
		
	</section>

	<!-- Banner -->
	<br><br>

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="row">
		<div class="container">
			
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					News And Announcements
				</h3>
			</div>

			<div class="wrap-slick2">
				<div class="slick2">

			<!-- Slide2 -->
			
<?php 		
		
		     
							$result= mysqli_query($conn,"SELECT * FROM news ") or die (mysql_error());
							$row=mysqli_num_rows($result);
							$ctr=1;
							while ($row= mysqli_fetch_array ($result) ){
							$news_id=$row['news_id'];
				

							?>
							<?php if(($ctr % 5)==0): ?>							
				<?php else: ?>	<?php endif; ?>
					<div class="item-slick2 p-l-15 p-r-15">
									
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<a href="newsdetail.php<?php echo '?news_id='.$news_id; ?>" class="block3-img dis-block hov-img-zoom">
								<img src="dashboard/news/<?php echo $row['nimage']; ?>" width=300 height=300 alt="IMG-PRODUCT">
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $row['info']; ?>
								</a>

							</div>
						</div>
						
					</div><?php } ?>
					
					</div>
					
						
					
					</div>

				<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Ongoing Projects
				</h3>
			</div>

			<div class="wrap-slick2">
									
			<!-- Slide2 -->
				<div class="slick2">
						<?php 		
		
		     
							$result= mysqli_query($conn,"SELECT * FROM projects ") or die (mysql_error());
							$row=mysqli_num_rows($result);
							$ctr=1;
							while ($row= mysqli_fetch_array ($result) ){
							$project_id=$row['project_id'];
				

							?>
							<?php if(($ctr % 2)==0): ?>		<?php else: ?>						
				<?php endif; ?>
<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block3 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">		
						<a href="projectdetail.php<?php echo '?project_id='.$project_id; ?>"class="block3-img dis-block hov-img-zoom">
						<img src="dashboard/projects/<?php echo $row['pimage']; ?>" width=300 height=300 alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="projectdetail.php<?php echo '?project_id='.$project_id; ?>" class="m-text11">
									<?php echo $row['pname']; ?>
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7"><?php echo $row['person']; ?></span>
							<span class="s-text6">on</span> <span class="s-text7"><?php echo $row['date']; ?></span>

							<p class="s-text8 p-t-16">
								<?php echo $row['info']; ?>
							</p>
						</div>
				
						</div>
						
					</div>
				</div>	<?php } ?>
					
				</div>
			</div>
			
			</div>
	
					
<div class="col-md-4 col-lg-3 p-b-80">
<div class="rightbar">
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="https://www.inquirer.net/fullfeed";  
rssfeed_frame_width="400"; 
rssfeed_frame_height="800"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url=""; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "9971f38ef858718bffc44da0ac91866f"; 
//--> 
</script> 
</li>
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="color:#ccc;font-size:10px; text-align:right; width:500px;"> </a></div> 
<!-- end sw-rss-feed code -->
</div>
</div>
</div>
</div>
</div>
	</div>				</section>

	<!-- Banner2 -->
	

	<!-- Blog -->

				

	<!-- Instagram -->
	<section class="instagram p-t-20">
					<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					gallery	
				</h3>

			</div>

		<div class="flex-w">
		
								<?php 		
		
		     
							$result= mysqli_query($conn,"SELECT * FROM gallery ") or die (mysql_error());
							$row=mysqli_num_rows($result);
							$ctr=1;
							while ($row= mysqli_fetch_array ($result) ){
							$galno=$row['galno'];
				

							?>
							<?php if(($ctr % 2)==0): ?>		<?php else: ?>						
				<?php endif; ?>
			<!-- Block4 -->
			<div class="block4 wrap-pic-w">
				<img src="dashboard/gallery/<?php echo $row['image']; ?>" width=150 height=300 alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							<?php echo $row['info']; ?>
						</p>

						<span class="s-text9">
							<?php echo $row['person']; ?>
						</span>
					</div>
				</a>
			</div>
<?php } ?>

		</div>
		
	</section>
	
	
	
	<!-- Shipping -->
<!-- start sw-rss-feed code --> 



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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



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
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>


<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>