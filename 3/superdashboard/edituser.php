
<!DOCTYPE html>
<html lang="en">
<?php include ('dbconn.php'); ?>
<?php include ('session.php'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/local.css" />
	<link rel="stylesheet" type="text/css" href="css/mine.css" />
    <script defer src="css/fontawesome-all.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                      <li><a href="index.php"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="inventory.php"><i class="fa fa-tasks"></i> Products</a></li>                    
                        <li><a href="reserveproducts.php"><i class="fa fa-globe"></i> Reservations</a></li> 

<li style=" margin-left: 10px;"><p style="color:gray; cursor:context-menu;">____________________________</p></li>
						
						<li><a href="users.php"><i class="fa fa-bullseye"></i>Registered Costumers</a></li>		
			<li><a href="admin.php"><i class="fa fa-bullseye"></i>Admin Information</a></li>
<li><a href="sold.php"><i class="fa fa-bullseye"></i>Sold Products</a></li>							
                                    
									
									
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge"></span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                             <li class="message-preview">
                                <a href="reserveproducts.php">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Reservations Pending</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
     		<?php
						$user_query=mysqli_query($conn,"select * from users where username='$id_session'")or die(mysql_error());
	                    $row=mysqli_fetch_array($user_query); {
					
					?>
					
					
                    
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?><b class="caret"></b></a>
					<?php } ?>
                       <ul class="dropdown-menu">
                           <li class="divider"></li>
                           <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                       </ul>
                   </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Rifa Motor Shop <small>Edit Customer Information</small></h1>
					
             
                </div>
            </div>
	
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Customer Information</h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-grid1">
							<?php
							$username=$_GET['username'];
							
							$result= mysqli_query($conn,"select * from users where username='$username'") or die (mysql_error());
										
			                while ($row= mysqli_fetch_array ($result)){
				            $username=$_GET['username'];
							$imagenochange=$row['uimage'];
							
							?>
									
							<form method="POST" enctype="multipart/form-data">
							<div class="picture">
					         	 <label> Image
                                    </label>
							   <a href=""><?php if($row['uimage'] != ""): ?>
										<img src="pimage/<?php echo $row['uimage']; ?>" width="200px" height="150px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php else: ?>
										<img src="pimage/noimage.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php endif; ?>
										</a>	
                                    <input type="file" style="height:44px; margin-top:10px;" name="image" id="last-name2" value=<?php echo $row['uimage']; ?>/>

							</div>
							
						
							<div class="products-add-info">
							
					
					
					   
						
							     	<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">Full Name:
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="barcode" class="form-control"  placeholder="Enter Barcode" value="<?php echo $row['fname']." ".$row['lname']; ?>" >
								    </div>
									</div>
								
									
									<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">Adress:
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="address" class="form-control" placeholder="Enter Brand Name" value="<?php echo $row['address']; ?>" >
								    </div>
									</div>
									
									
														<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name" >Contact Number:
									   </label>
									 <div class="form-padding-correction">
							         <input type="text" name="contact" class="form-control" placeholder="Enter Motor Part" value="<?php echo $row['contact']; ?>">
								    </div>
									</div>
									
														<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name" >Email
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="email" class="form-control" placeholder="Enter Model Number" value="<?php echo $row['email']; ?>">
								    </div>
									</div>
									
														<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name" >Username:
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="username" class="form-control" placeholder="Enter Quantity" value="<?php echo $row['username']; ?>"disabled>
								    </div>
									</div>
									
									<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name" >Password 
                                    </label>
									 <div class="form-padding-correction">
							         <input type="password" name="password" class="form-control" placeholder="Enter Price" value="<?php echo $row['password']; ?>">
								    </div>
									</div>
									
							<?php } ?>
					         
						
						            <div class="btn-addproducts">
									<?php 
									if(!empty($_GET['user'])){
										$position=$_GET['user'];
									
									}
									else{
										
										$position="";
									}
							
									?>
									<?php if($position=='Admin'): ?>
									
									 <a href="admin.php"> <button type="button" class="btn btn-primary">Cancel</button></a>
									<?php else: ?>
									 <a href="users.php"> <button type="button" class="btn btn-primary">Cancel</button></a>
									 
									 <?php endif; ?>
									 
									 
									</div>
									
									  <div class="btn-cancel">
								  <button type="Submit" class="btn btn-success">Update Customer Information</button>
									</div>
						         </form>
								 
                                  </div>
							

							
							  
				
							</div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- PHP for adding the products -->
			<?php 
			
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				  $user_id=$_GET['username'];
				
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];
							
									if ($error > 0){
										
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$still_profile1 = $imagenochange;
mysqli_query($conn,"update users set address='$address',contact='$contact',email='$email',password='$password',username='$username',uimage='$still_profile1' where username='$username'")or die(mysql_error());

			if(!empty($_GET['user'])){
										$position=$_GET['user'];
									
									}
									else{
										
										$position="";
									}
							
if($position=='admin'):
echo "<script>alert('Successfully Updated Info!'); window.location='admin.php'</script>";	
else:
echo "<script>alert('Successfully Updated Info!'); window.location='users.php'</script>";	
endif;


										
										
										
									}
									
									else{
										
move_uploaded_file($_FILES["image"]["tmp_name"],"pimage/" . $_FILES["image"]["name"]);			
$profile=$_FILES["image"]["name"];								
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];							
								
mysqli_query($conn,"update users set address='$address',contact='$contact',email='$email',password='$password',username='$username',uimage='$profile' where username='$username'")or die(mysql_error());	

			
			if(!empty($_GET['user'])){
										$position=$_GET['user'];
									
									}
									else{
										
										$position="";
									}
							
if($position=='admin'):
echo "<script>alert('Successfully Updated Info!'); window.location='admin.php'</script>";	
else:
echo "<script>alert('Successfully Updated Info!'); window.location='users.php'</script>";	
endif;

								
									}


			}
			
			
			?>
			
			
			
			
			
			
			<!-- PHP for adding the products -->
			
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    
</body>
</html>
