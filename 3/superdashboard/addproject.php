
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
		  <link href="images/icons/blogo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
 <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
    <script defer src="css/fontawesome-all.js"></script>
    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
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
                    <li><a href="request.php"><i class="fa fa-tasks"></i> Pending Requests</a></li>                    
                        <li><a href="reservation.php"><i class="fa fa-globe"></i> Pending Reservations</a></li>
						
											<li style=" margin-left: 10px;"><p style="color:gray; cursor:context-menu;">____________________________</p></li>
						<li><a href="banners.php"><i class="fa fa-bullseye"></i>Banners</a></li>
						<li class="active"><a href="news.php"><i class="fa fa-globe"></i> News And Announcements</a></li
						<li style=" margin-left: 10px;"><p style="color:gray; cursor:context-menu;">____________________________</p></li>
						<li><a href="resident.php"><i class="fa fa-bullseye"></i>Resident</a></li>
					<li><a href="users.php"><i class="fa fa-bullseye"></i>Resident Users</a></li>
						<li><a href="admin.php"><i class="fa fa-bullseye"></i>Admin Information</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
						        <?php
					        $result= mysqli_query($conn,"select * from reservation_request") or die (mysql_error());
							$count=mysqli_num_rows($result);
		
							?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge"><?php echo $count; ?></span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header"><?php echo $count; ?> Reservations Pending</li>
                            <li class="message-preview">
                                <a href="reserveproducts.php">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Reservations Pending</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            
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
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                                         <h1>Barangay Mahabang Parang <small>News And Announcements</small></h1>
					
             
                </div>
            </div>
	
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">News And Announcements Information</h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-grid1">
					
							<div class="products-add-info">
							
							<form method="POST" enctype="multipart/form-data" action="">
			
							     	<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">Project name
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="pname" class="form-control"  placeholder="Enter Name" required>
								    </div>
									</div>
																     	<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">Information
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="info" class="form-control"  placeholder="Enter Information" required>
								    </div>
									</div>
									
									<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">Person Involved
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="person" class="form-control"  placeholder="Enter Person" required>
								    </div>
									
									</div>
									<div class="form-padding">
									<label class="control-label .col-lg-2" for="first-name">Date
                                    </label>
									 <div class="form-padding-correction">
							         <input type="text" name="date" class="form-control"  placeholder="Enter Date" required>
								    </div>
									</div>
									
					                <div class="form-group">
                                   <label>File input</label>
                                    <input type="file" name="image" required>
                                    </div>
									
						
						
						            <div class="btn-addproducts">
									 <a href="projects.php"> <button type="button" class="btn btn-primary">Cancel</button></a>
									</div>
									
								  <div class="btn-cancel">
								  <button type="Submit" class="btn btn-success">Add Project</button>
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
			
				if($size > 10000000000000) //conditions for the file
						{
						die("Format is not allowed or file size is too big!");
						}
						
						else{
							
					move_uploaded_file($_FILES["image"]["tmp_name"],"projects/" . $_FILES["image"]["name"]);	
					
$book_image=$_FILES["image"]["name"];
$pname = $_POST['pname'];
$info = $_POST['info'];
$person = $_POST['person'];
$date = $_POST['date'];

                    $result=mysqli_query($conn,"select * from projects WHERE pname='$pname' ") or die (mySQL_error());
					$row=mysqli_num_rows($result);
					if ($row > 0)
					{
				    echo "<script>alert('Project Already active!'); window.location='addproject.php'</script>";

					}
					else
					{		
                   
						$sql="insert into projects (pname, info, person, date, pimage) values ('$nname','$info', '$person', '$date', '$book_image')";
						if ($conn->query($sql) === TRUE) { 
                   		echo "<script>alert('Project successfully added!'); window.location='projects.php'</script>";
                        } else {
							echo "<script>alert('News sad!'); window.location='addproject.php'</script>";
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
