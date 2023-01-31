<?php
include ('dbconn.php');

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];	

	
										
						$sql="insert into messages (fullname,phone,email,message)
						values ('$fullname','$phone','$email','$message')";
if ($conn->query($sql) === TRUE) {
                   		echo "<script>alert('Message successfully sent!'); window.location='index.php'</script>";
}else{
}
					echo "<script>alert('NO'); window.location='index.php'</script>";		
							
						
			
					

			

			
			?>