<?php
include ('session.php');
include ('dbconn.php');
?>
<?php
	/*$formatArrival = $_POST['date'];
	
	$var = $formatArrival;
	$date = str_replace('/', '-', $var);
	$formatArrival =  date('Y-m-d', strtotime($date));
	*/?>
<?php	
	
    $clear_id=$_GET['clear_id'];
	
		    $result= mysqli_query($conn,"select * from clearances where clear_id='$clear_id'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			}
			
				
	    $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];
			$user_id=$row['user_id'];

			}
	
	
	
	$result=mysqli_query($conn,"select * from reservation_request where clear_id='$clear_id' and user_id='$user_id'") or die (mySQL_error());
					$row=mysqli_num_rows($result);
					$details=mysqli_fetch_array($result);
					if ($row > 20)
					{
						
						echo "<script>alert('Reservation Already Exist'); window.location='products.php'</script>";
						
						
					}else{
						
						

	        $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['username'];
			$user_id=$row['user_id'];	
			}

		
		
		    $result= mysqli_query($conn,"select * from clearances where clear_id='$clear_id'") or die (mysql_error());
			
			

			
			while ($row= mysqli_fetch_array ($result) ){
				$iname=$row['iname'];
				$purpose=$row['purpose'];
				
			}
			
				
		
			
			$timezone = "Asia/Manila";
			if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
			$cur_date = date("Y-m-d H:i:s");
			
			$d=strtotime("+1 Day");
			$due_date= date("Y-m-d H:i:s",$d);


			
			$sql="INSERT INTO reservation_request(clear_id,username,iname,datereserved,purpose,type,stats,user_id)
			VALUES('$clear_id','$username','$iname','".$_POST['date']."','$purpose','document','Pending','$user_id')";
			
			if (mysqli_query($conn, $sql)) {
           echo "<script>alert('Product Added to Shopping Cart'); window.location='shoppingcart.php'</script>";
            } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
			
			
						
						
						
					
	
	
				
				
				
			}
	
	
	
	
	
				
		
		
			
			
			
			
			
	      
		     	
		
		   



?>