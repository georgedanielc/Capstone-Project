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
	<br>
		<h3 class="m-text5 t-center">
			Services
		</h3>


		</br>


	<!-- content page -->
		<section class="bgwhite p-t-66 p-b-38">
		
				<?php
				include ('dbconn.php');
				
				if (isset($_GET['item_id']))
				$item_id=$_GET['item_id'];
				$result= mysqli_query($conn,"select * from items where item_id='$item_id'") or die (mysql_error());

			
				while ($row= mysqli_fetch_array ($result) ){
			
					?>
		<div class="container">
			
				

		<div class="row">

				<div class="col-md-4 p-b-30">

					<div class="hov-img-zoom">
						<img src="dashboard/reservables/<?php echo $row['iimage']; ?>" alt="IMG-ABOUT">
						
					</div>
				</div>
				
				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						<?php echo $row['rname']; ?>
					</h3>

					<p class="p-b-28"><?php echo $row['itemdesc']; ?></p>
						
						<h4 class="m-text26 p-b-36 p-t-15">
							Requirements
						</h4>
						<p class="p-b-28"><?php echo $row['requirements']; ?></p>
						<h4 class="m-text26 p-b-36 p-t-15">
							Quantity
						</h4>
						<p class="p-b-28"><?php echo $row['quantity']; ?></p>
					
						<?php if($login=='Resident'):?>
						
						<form method="POST" enctype="multipart/form-data" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }" >
						
						<h4 class="m-text26 p-b-36 p-t-15">
							Purpose
						</h4>

									 
									 <select type="text" name="purpose" class="form-control" required>
									   <option value="">--</option>
  <option value="Birthday">Birthday</option>
  <option value="Wedding">Wedding</option>
    <option value="Meeting">Meeting</option>
	  <option value="Baptism">Baptism</option>
	    <option value="Sports">Sports</option>
		  <option value="Burial">Burial</option>0
		  	    <option value="Home Use">Home Use</option>

								

</select>
<br><br>
  <label class="control-label .col-lg-2" for="first-name">Quantity
                                    </label>
									<br>
  								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="quantitys" value="1"/>

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
								<br>
	

        <label class="control-label" for="date">Requested Date:</label>
						<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text " autocomplete="off"/>
						<input type="hidden" name="result" id="result" />
								<br>
																        <label class="control-label" for="date">Time:</label>
																	 <select type="text" name="time" class="form-control" required  onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;">
  <option value="8:00 AM">8:00 AM</option>
  <option value="9:00 AM">9:00 AM</option>
    <option value="10:00 AM">10:00 AM</option>
	  <option value="11:00 AM">11:00 AM</option>
	    <option value="12:00 PM">12:00 AM</option>
		  <option value="1:00 PM">1:00 PM</option>
		  	    <option value="2:00 PM">2:00 PM</option>
				<option value="3:00 PM">3:00 PM</option>
				<option value="4:00 PM">4:00 PM</option>
				<option value="5:00 PM">5:00 PM</option>
				<option value="6:00 PM">6:00 PM</option>
				<option value="7:00 PM">7:00 PM</option>
				<option value="8:00 PM">8:00 PM</option>
				<option value="9:00 PM">9:00 PM</option>
				<option value="10:00 PM">10:00 PM</option>
				<option value="11:00 PM">11:00 PM</option>
				<option value="12:00 AM">12:00 AM</option>
								

</select>

									<br>
																									        <label class="control-label" for="date">End Time:</label>
																	 <select type="text" name="endtime" class="form-control" required  onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;">
  <option value="8:00 AM">8:00 AM</option>
  <option value="9:00 AM">9:00 AM</option>
    <option value="10:00 AM">10:00 AM</option>
	  <option value="11:00 AM">11:00 AM</option>
	    <option value="12:00 PM">12:00 AM</option>
		  <option value="1:00 PM">1:00 PM</option>0
		  	    <option value="2:00 PM">2:00 PM</option>
				<option value="3:00 PM">3:00 PM</option>
				<option value="4:00 PM">4:00 PM</option>
				<option value="5:00 PM">5:00 PM</option>
				<option value="6:00 PM">6:00 PM</option>
				<option value="7:00 PM">7:00 PM</option>
				<option value="8:00 PM">8:00 PM</option>
				<option value="9:00 PM">9:00 PM</option>
				<option value="10:00 PM">10:00 PM</option>
				<option value="11:00 PM">11:00 PM</option>
				<option value="12:00 AM">12:00 AM</option>
								

</select>	<br>
									<input type="checkbox" required name="checkbox" value="check" id="agree" />&nbsp; I have read and agree to the <u><a href = "#"  data-toggle="modal" data-target="#myModal">Terms and Conditions and Privacy Policy </a></u>of the Barangay

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel">Terms, Conditions and Privacy Policy</h4>

            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="row">
                        <label for="idTourDateDetails">Terms and Conditions and Privacy Policy of the barangay</label>
                        <div class="form-group">
                            <div class="input-group">
                               <textarea class="dis-block s-text7 size20 bo4 p-l-10 p-r-22 p-t-13 m-b-20" style= "height: 256px; width: 456px;" disabled>
							   		<?php 
			include('terms.php');
		?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="size10 trans-0-4 m-t-10 m-b-10">
					 <button type="Submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Continue</button>
					 </div>
                </div>
				
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal --> 
	</div>

									<br>
						<div class="size10 trans-0-4 m-t-10 m-b-10">
							<!-- Button -->
							
							
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"<?php echo '?item_id='.$item_id; ?>> 
						Send Request
					</button>
								<?php else:?>
			
								<?php endif;?>
			 
						
			

						</div>
						            
					
					<?php } ?>


			
					
				</div>
				
				</div>
				
			</div>
		
	</section>

<?php
include ('dbconn.php');
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
$item_id=$_GET['item_id'];
$purpose= $_POST['purpose'];
$quantitys = $_POST['quantitys'];
$time = $_POST['time'];
$endtime = $_POST['endtime'];
$date=strtotime($_POST['date']); 
$date=date("Y-m-d",$date);


		    $result= mysqli_query($conn,"select * from items where item_id='$item_id'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$quantity=$row['quantity'];

			}
			
			if ($quantity < 0 ){
				
				
				           echo "<script>alert('Sorry the reservable Is out Of Stock'); window.location='reserveinfo.php'</script>";
						   
						   
				
			}
			else{
				
	    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['fname']." ".$row['lname'];
			$user_id=$row['user_id'];

			}
	
	
	
	$result=mysqli_query($conn,"select * from reservation_request where item_id='$item_id' and username='$username'") or die (mySQL_error());
					$row=mysqli_num_rows($result);
					$details=mysqli_fetch_array($result);
					if ($row > 0)
					{
						
						echo "<script>alert('Reservation Already Exist'); window.location='services.php'</script>";
						
						
					}else{
						
						

	        $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['fname']." ".$row['lname'];
				
			$user_id=$row['user_id'];
			$fname=$row['fname'];
			$mname=$row['mname'];
			$lname=$row['lname'];
			$address=$row['address'];
			$contact=$row['contact'];
			}

		
		   $result= mysqli_query($conn,"select * from items where item_id='$item_id'") or die (mysql_error());

							while ($row= mysqli_fetch_array ($result) ){
								
								$rname=$row['rname'];
								$quantity=$row['quantity'];

		
							}
				
			$quantitytotal=$quantity-$quantitys;
			
			$timezone = "Asia/Manila";
			if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
			$cur_date = date("Y-m-d H:i:s");
			
			

			  
			mysqli_query($conn,"update items set quantity='$quantitytotal' where item_id='$item_id'")or die(mysql_error());

			
			$sql="INSERT INTO reservation_request(item_id,iname,quantity,purpose,stats,datereserved,type,username,contact,address,fname,mname,lname,datereq,time,endtime)
			VALUES('$item_id','$rname','$quantitys','$purpose','Pending','$cur_date','reservable','$username','$contact','$address','$fname','$mname','$lname','$date','$time','$endtime')";
			
			if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Thank you for using our services please wait for approval'); window.location='services.php'</script>";
            } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
			
			
						
						
						
					
	
	
				
				
				
			}
	
	
	
	
	
				
		
		
			
			
			}
			
			
	      
		     	
		
			}

?>
						<!-- Featured Products -->
						
			</div>
			
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


<!--  jQuery -->

<script type="text/javascript">
var array = ["2014-07-14","2014-07-15","2014-07-16"]

$('datetimepicker').datepicker({
    minDate: 1,
    beforeShowDay: function(date){
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [ array.indexOf(string) == -1 ]
        
    }

});
  </script>
  <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
	  var today = new Date();
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
		startDate : today
      };
      date_input.datepicker(options);
	  
    })
</script>
</body>
</html>

