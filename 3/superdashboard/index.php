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
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
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
                    <li class="active"><a href="index.php"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="request.php"><i class="fa fa-tasks"></i> Pending Requests</a></li>                    
                    <li><a href="reservation.php"><i class="fa fa-globe"></i> Pending Reservations</a></li>
					<li><a href="message.php"><i class="fa fa-globe"></i> Message</a></li>
					<li style=" margin-left: 10px;"><p style="color:gray; cursor:context-menu;">____________________________</p></li>
					<li><a href="reservables.php"><i class="fa fa-globe"></i> Reservables</a></li>
					<li style=" margin-left: 10px;"><p style="color:gray; cursor:context-menu;">____________________________</p></li>

						<li><a href="banners.php"><i class="fa fa-globe"></i> Banners</a></li>
						<li><a href="news.php"><i class="fa fa-globe"></i> News And Announcements</a></li>
						<li><a href="projects.php"><i class="fa fa-globe"></i> Ongoing Projects</a></li>
						<li style=" margin-left: 10px;"><p style="color:gray; cursor:context-menu;">____________________________</p></li>
						<li><a href="resident.php"><i class="fa fa-bullseye"></i>Resident</a></li>
					<li><a href="users.php"><i class="fa fa-bullseye"></i>Resident Users</a></li>
					<li><a href="admin.php"><i class="fa fa-bullseye"></i>Admin Information</a></li>
                               
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
						        <?php
					        $result= mysqli_query($conn,"select * from messages") or die (mysql_error());
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
                    
					<?php
						$user_query=mysqli_query($conn,"select * from users where username='$id_session'")or die(mysql_error());
	                    $row=mysqli_fetch_array($user_query); {
					
					?>
					
					
                    <li class="dropdown user-dropdown">
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
                    <h1>Barangay Mahabang Parang <small>Dashboard Home</small></h1>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Welcome to Barangay Mahabang Parang Online Reservation and Monitoring System.
                        <br />
                        This System monitors your inventory and reservation of records in a real-time aspect.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Monitoring</h3>
                        </div>
                        <div class="panel-body">

                            <div class="row alert-success">
                                <div class="col-xs-5">
                                    <a href="message.php"> <i class="fa fa-comment fa-5x"></i></a>
                                </div>
                                <div class="col-xs-5 text-right">
											<?php
							$result = mysqli_query($conn,"SELECT * FROM messages");
							$num_rows = mysqli_num_rows($result);
							?>
                                    <p class="alerts-heading"><?php echo $num_rows; ?></p>
                                    <p class="alerts-text">Message/s</p>
                                </div>
                            </div>
                            <div class="row alert-success">
                                <div class="col-xs-5">
                                   <a href="users.php"> <i class="fa fa-user-circle fa-5x"></i></a>
                                </div>
                                <div class="col-xs-5 text-right">
											<?php
							$result = mysqli_query($conn,"SELECT * FROM users");
							$num_rows = mysqli_num_rows($result);
							?>
                                    <p class="alerts-heading"><?php echo $num_rows; ?></p>
                                    <p class="alerts-text">Users</p>
                                </div>
                            </div>
							    <div class="row alert-success">
                                <div class="col-xs-5">
                                    <a href="resident.php"> <i class="fa fa-users fa-5x"></i></a>
                                </div>
								
                                <div class="col-xs-5 text-right">
											<?php
							$result = mysqli_query($conn,"SELECT * FROM resident");
							$num_rows = mysqli_num_rows($result);
							?>
                                    <p class="alerts-heading"><?php echo $num_rows; ?></p>
                                    <p class="alerts-text">Residents</p>
                                </div>
                            </div>
                            <div class="row alert-danger">
                                <div class="col-xs-5">
                                    <a href="reservation.php"> <i class="	fa fa-sticky-note 	 fa-5x"></i></a>
                                </div>
                                <div class="col-xs-5 text-right">
							<?php
							$result = mysqli_query($conn,"SELECT * FROM reservation_request");
							$num_rows = mysqli_num_rows($result);
							?>
                                    <p class="alerts-heading"><?php echo $num_rows; ?></p>
                                    <p class="alerts-text">Reservation Requests</p>
                                </div>
                            </div>
							 <div class="row alert-danger">
                                <div class="col-xs-5">
                                    <a href="request.php"> <i class="fa fa-sticky-note fa-5x"></i></a>
                                </div>
                                <div class="col-xs-5 text-right">
							<?php
							$result = mysqli_query($conn,"SELECT * FROM document_request");
							$num_rows = mysqli_num_rows($result);
							?>
                                    <p class="alerts-heading"><?php echo $num_rows; ?></p>
                                    <p class="alerts-text">Document Requests</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="col-lg-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recent Reservation By The Residents.</h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-chart1">
							
							
<style>

table{
	border-collapse: collapse;
    width: 100%;
	border: solid 1px #DDEEEE;

}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f8f6ff}

th {
    background-color: #6c7ae0;
    color: white;

}
th:first-child{
	 border-radius: 7px 0 0 0;
}
th:last-child{
	 border-radius: 0 7px 0 0;
}

</style>


<table>
  <tr>
    <th>Name</th>
    <th>Product Reserved</th>
    <th>Date Reserved</th>
	<th>Quantity</th>
    <th>Price</th>
	
  </tr>
  <?php

$result= mysqli_query($conn,"select * from reservation_request order by datereserved ASC ") or die (mysql_error());
							while ($row= mysqli_fetch_array ($result) ){
		
							?>
  <tr>
    <td><?php echo $row['iname']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['datereserved']; ?></td>
	<td><?php echo $row['quantity']; ?></td>
  </tr>
  		<?php } ?>
</table>

							
							
							
								
							
							
							</div>
                        </div>
                    </div>
                </div>
				
            </div>
            <div class="row">

                        <div class="panel-body">
                            <div id="shieldui-grid1"></div>
                        </div>
                    </div>
                </div>
            </div>
  
        </div>
  
    </div>
   
	
</body>
</html>
