<?php
include ('dbconn.php');
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
$item_id=$_GET['item_id'];
$purpose= $_POST['purpose'];
$date = $_POST['date'];


		    $result= mysqli_query($conn,"select * from items where item_id='$item_id'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$quantity=$row['quantity'];

			}
			
			if ($quantity < 0 ){
				
				
				           echo "<script>alert('Sorry Product Is out Of Stock'); window.location='products.php'</script>";
						   
						   
				
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
						
						echo "<script>alert('Reservation Already Exist'); window.location='products.php'</script>";
						
						
					}else{
						
						

	        $result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
			$row=mysqli_num_rows($result);

			while ($row= mysqli_fetch_array ($result) ){
			$username=$row['fname']." ".$row['lname'];
				
			$user_id=$row['user_id'];
			}

		
		   $result= mysqli_query($conn,"select * from items where item_id='$item_id'") or die (mysql_error());

							while ($row= mysqli_fetch_array ($result) ){
								
								$rname=$row['rname'];
								$quantity=$row['quantity'];

		
							}
				
			$quantitytotal=$quantity-1;
			
			$timezone = "Asia/Manila";
			if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
			$cur_date = date("Y-m-d H:i:s");
			
			

			  
			mysqli_query($conn,"update items set quantity='$quantitytotal' where item_id='$item_id'")or die(mysql_error());

			
			$sql="INSERT INTO reservation_request(item_id,iname,quantity,purpose,stats,datereserved,type,username,user_id,datereq)
			VALUES('$item_id','$rname','1','$purpose','Pending','$cur_date','reservable','$username','$user_id','$date')";
			
			if (mysqli_query($conn, $sql)) {
         
            } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
			
			
						
						
						
					
	
	
				
				
				
			}
	
	
	
	
	
				
		
		
			
			
			}
			
			
	      
		     	
		
			}

?>