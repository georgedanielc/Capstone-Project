
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
								   <div class="button-addproducts">
								  
								  
								  <a href="addnews.php"><button type="button" class="btn btn-primary">Add News </button></a>
								  
								  </div>
								  
								      <div class="button-print">
									    <a href="reports/userreport.php" target="_blank">
								  <button type="button" class="btn btn-success">Print Information</button>
								  </a>
								  </div>
								  
							     <div class="button-search">
								<form method="POST">
                             

								
                                 </span>
                                 </div>
								  
							<!--Here starts the Table for the products-->
	




<table>
  <tr>
    <th>Image</th>
    <th>Name</th>
	<th>Info</th>
	<th>Action</th>	
  </tr>
  <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
	
    $txtsearch=$_POST['search-user'];
								$result= mysqli_query($conn,"select * from news where news_id LIKE '%$txtsearch%'") or die (mysql_error());
	
	}
else{
		
											$result= mysqli_query($conn,"select * from news order by news_id ASC ") or die (mysql_error());
		
	}

			while ($row= mysqli_fetch_array ($result) ){
				$news_id=$row['news_id'];
		
			?>


			
			
			
  <tr>
    <td><img src="banners/<?php echo $row['nimage']; ?>" width="75px" height="50px"></td>
	<td><?php echo $row['nname']; ?></td>
	<td><?php echo $row['info']; ?></td>

	<td>

	 <a href="deletenews.php<?php echo '?news_id='.$news_id; ?>"><button type="button" class="btn btn-primary btn-sm">Delete</button></a>

	 <a href="editnews.php<?php echo '?news_id='.$news_id; ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
	</td>
  </tr>
  		<?php } ?>
</table>

							
							
							
							
							<!--Here ends the Table for the products-->
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    
</body>
</html>
