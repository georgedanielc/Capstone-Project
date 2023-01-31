<!DOCTYPE html>
<html lang="en">
<?php include ('dbconn.php'); ?>
<?php include ('session.php'); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/local.css" />
	<link rel="stylesheet" type="text/css" href="css/mine.css" />
    <script defer src="css/fontawesome-all.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
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
                           <li><a href="../sessiondes.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                       </ul>
                   </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Barangay Mahabang Parang</h1>
					
             
                </div>
            </div>
	
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
					 <div class="panel-heading">
					<h3 class="panel-title">Admin Information</h3>
                     </div>
                        <div class="panel-body">
                            <div id="shieldui-grid1">
					
							<div class="products-add-info">
							
<form method="POST" enctype="multipart/form-data" action="">
			
							     	<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">Username
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="username" class="form-control"  placeholder="Enter Username">
								    </div>
									</div>
									<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">First Name
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="fname" class="form-control"  placeholder="Enter First Name">
								    </div>
									</div>
									<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">Middle Name
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="mname" class="form-control"  placeholder="Enter Middle Name">
								    </div>
									</div>
								
									
									<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">Last Name
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
								    </div>
									</div>
									
											<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name" >Password
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="password" class="form-control" placeholder="Enter Password">
								    </div>
									</div>
									
														<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name" >Address 
									   </label>
									 <div class="form-padding-correction">
							         <input type="text" name="address" class="form-control" placeholder="Enter Address">
								    </div>
									</div>
									
														<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name" >Contact Number
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="contact" class="form-control" placeholder="Enter Contact Number">
								    </div>
									</div>
									
									<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name" >Email 
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="email" class="form-control" placeholder="Enter Price">
								    </div>
									</div>
									
									<!--<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name" >Position 
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="price" class="form-control" placeholder="Enter Price">
								    </div>
									</div>
									-->
	
					                <div class="form-group">
                                   <label>File input</label>
                                    <input type="file" name="image">
                                    </div>
									
						
						
						            <div class="btn-addproducts">
									 <a href="inventory.php"> <button type="button" class="btn btn-primary">Cancel</button></a>
									</div>
									
								  <div class="btn-cancel">
								  <button type="Submit" class="btn btn-success">Add User</button>
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


							
			$file=$_FILES['image']['tmp_name'];
			$image = $_FILES["image"] ["name"];
			$image_name= addslashes($_FILES['image']['name']);
			$size = $_FILES["image"] ["size"];
			$error = $_FILES["image"] ["error"];
			
				if($size > 10000000) //conditions for the file
						{
						die("Format is not allowed or file size is too big!");
						}
						
						else{
							
					move_uploaded_file($_FILES["image"]["tmp_name"],"userimage/" . $_FILES["image"]["name"]);			
$book_image=$_FILES["image"]["name"];
$username = $_POST['username'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
                    $result=mysqli_query($conn,"select * from users WHERE username='$username' ") or die (mySQL_error());
					$row=mysqli_num_rows($result);
					if ($row > 0)
					{
				    echo "<script>alert('Username Already active!'); window.location='adduser.php'</script>";

					}
					else
					{		
                   
						$sql="insert into users (username, fname , mname , lname , password , address , contact ,email ,position , uimage 	)
						values ('$username','$fname','$mname', '$lname', '$password', '$address', '$contact','$email','Admin','$book_image')";
						if ($conn->query($sql) === TRUE) {
                   		echo "<script>alert('User successfully added!'); window.location='Admin.php'</script>";
                        } else {
          
                        }

					}
					
							
							
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
