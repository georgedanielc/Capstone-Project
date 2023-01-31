
<?php include ('session.php'); ?>
<?php include ('dbconn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
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
					<img src="images/icons/blogo.png" alt="IMG-LOGO">
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

										
			<?php if($login=='Resident'):?>
			<?php 		
  
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];

		   ?>
			 <li>	<a href="myaccount.php"  class="add_to_cart">My Account</a></li>
			<li><?php echo $row['fname']." ".$row['lname']?>
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
									<li><a href="settings.php">Account settings</a></li>
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


					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/blogo.png" alt="IMG-LOGO">
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
			<?php if($login=='Resident'):?>
			<?php 		
  
		    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];

		   ?>
			 <li  class="item-menu-mobile">	
			 <a href="myaccount.php">My Account 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['fname']." ".$row['lname']?></a>
			 </li>
			 


			
			<?php } ?>	
			
			   <li class="item-menu-mobile"><a href = "#">
			   Account</a>	
								<ul class="sub-menu" style="display: block;">
							<li><a href="settings.php">Account settings</a></li>
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
						<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-r-50">

						<br><br><br><br><br><br><br>
						<h4 class="p-b-7">
			Forgot Password
		</h4>

					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
						<form method = "POST" action= "sendemail.php" >
									
									User Name 
								<br><br>
							<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="user" required placeholder="User Name">
						</div>


						<br>
									Email
								<br><br>
							<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="email" required placeholder="Email">
						</div>
							<div class="w-size25"><br>
							<!-- Button -->
<br>
							<button class="flex-c-sm size0 bg1 bo-rad-23 hov1 m-text3 trans-0-4" name= "login" value="Sign In" id="signin" class="signin">
								Recover Account
							</button>
						</div>

					</form>
					<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 

            </div>
            <div class="modal-body">
               <form method="post" action="sendemail.php">
                        Enter Username
                        
                                 <div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="user" required placeholder="User Name">
						</div>
						Enter Email
                        
                                 <div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" required placeholder="Email">
						</div>

                            </div>
                       
                    
                <div class="modal-footer">
                    
					 <button type="Submit" class="btn btn-success">Send Email</button>
					 
                </div>
				
            </div>	<!-- Featured Products -->
						
			</div>
		</div>
	</section>
<?php
include ('dbconn.php');

if (!empty($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$login_query=mysqli_query($conn,"select * from users where username='$username' and password='$password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
$position=$row['position'];


if ($count > 0){
	
	if($position=='Admin'){
		$_SESSION['id']=$row['username'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='dashboard/index.php'</script>";
	}
	elseif($position=='SuperAdmin'){
		$_SESSION['id']=$row['username'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='dashboard/index.php'</script>";
	}
	elseif($position=='Resident'){
		$_SESSION['id']=$row['username'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='index.php'</script>";
	}


	

else{ 
	
echo "<script>alert('Invalid Username and Password! Try again.'); window.location='login.php'</script>";

}
}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$username=$_POST['username'];
$password=$_POST['password'];

$login_query=mysqli_query($conn,"select * from users where username='$username' and password='$password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
$position=$row['position'];


if ($count > 0){

	if($position=='Admin'){
		$_SESSION['id']=$row['username'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='index.php'</script>";
	}
	elseif($position=='Resident'){
		$_SESSION['id']=$row['username'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='index.php'</script>";
	}
		elseif($position=='SuperAdmin'){
		$_SESSION['id']=$row['username'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='dashboard/index.php'</script>";
	}

	
}
else{ 
	
echo "<script>alert('Invalid Username and Password! Try again.'); window.location='login.php'</script>";

}
}
?>
	<!-- Banner -->
	

	<!-- New Product -->
	

	<!-- Banner2 -->
	

	<!-- Blog -->
	

	<!-- Instagram -->


	<!-- Shipping -->
	


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
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
