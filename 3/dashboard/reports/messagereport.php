<html>
<?php include('../dbconn.php'); ?>
<?php include('../session.php'); ?>	

<head>
		<title>Barangay Mahabang Parang</title>
		<link href="images/favicon.jpg" rel="icon">
		<style>
		
		
.container {
	width:100%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}
		
@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}
		</style>
		
<script>

function printPage() {
    window.print();
}

</script>
		
</head>


<body>
	<div class = "container">
		<div id = "header">
		<br/>
				<center><img src = "image/header.png" style = " margin-top:px; float:center; margin-:10px; width:1000px; height:350px;" ></center>
				
			<button type="submit" id="print" onclick="printPage()">Print</button>	
			
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">Messages&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('currentdate.php'); ?>
        </div>			
		<br/>
						<table class="table table-striped">
						  <thead>
								<tr>
								<tr>
									<th>Fullname</th>
									<th>Contact Number</th>
									<th>Email</th>
									<th>Message</th>
							
									
								</tr>
								</tr>
						  </thead>   
						  <tbody>
						  
<?php

		    $result= mysqli_query($conn,"select * from messages") or die (mysql_error());
			$row=mysqli_num_rows($result);
			while ($row= mysqli_fetch_array ($result) ){
				


?>
							<tr>
							
								<td style="text-align:center;"><?php echo $row['fullname']; ?></td> 
								<td style="text-align:center;"><?php echo $row['phone']; ?></td> 
								<td style="text-align:center;"><?php echo $row['email']; ?></td> 
								<td style="text-align:center;"><?php echo $row['message']; ?></td> 

							
								
							</tr>
			<?php } ?>
				
						  </tbody> 
					  </table> 

<br />
<br />
							<?php
							$result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
							$row=mysqli_num_rows($result);
							while ($row= mysqli_fetch_array ($result) ){
									
							?>
                               <h2><i class="glyphicon glyphicon-user"></i> <?php echo '<span style="color:blue; font-size:15px;">Prepared by:'."<br /><br /> ".$row['fname']." ".$row['lname']." ".'</span>';?></h2>
	                        <?php } ?>


			</div>
	
	
	
	

	</div>
</body>


</html>