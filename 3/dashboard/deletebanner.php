<?php
include ('session.php');
include ('dbconn.php');
$b_id=$_GET['b_id'];

			$result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['fname']." ".$row['lname'];

			}
							

		
		
		   $result= mysqli_query($conn,"select * from archbanner where b_id='$b_id'") or die (mysql_error());

							while ($row= mysqli_fetch_array ($result) ){
								
								$bname=$row['bname'];
								$bimage=$row['bimage'];
								$author=$row['author'];

							}
			
				
			$timezone = "Asia/Manila";
			if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
			$cur_date = date("Y-m-d H:i:s");


			  
			mysqli_query($conn,"delete  from archbanner where b_id='$b_id'")or die(mysql_error());
			
			$sql="INSERT INTO audittrail(adminname,action,task,date)VALUES('$username','Permanent Delete','Banner $bname','$cur_date')";
			
			if (mysqli_query($conn, $sql)) {
           echo "<script>alert('Permanently Deleted Banner!'); window.location='banners.php'</script>";
            } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
			
			
						
						
						
					
	
	
				
				
				
			




					
?>