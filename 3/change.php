<?php 	
 include ('session.php'); 
include ('dbconn.php'); 
			
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
$username=$_GET['username'];
$password=$_POST['password'];
$password1= $_POST['password1'];



                    $result=mysqli_query($conn,"select * from users WHERE username='$username' and password='$password' ") or die (mySQL_error());
					$row=mysqli_num_rows($result);
					if ($row > 0)
					{
				    echo "<script>alert('Wrong Password!'); window.location='changepassword.php'</script>";

					}
					else
					{		
				$result= mysqli_query($conn,"select * from users where username='$id_session'") or die (mysql_error());
				$row=mysqli_num_rows($result);

				while ($row= mysqli_fetch_array ($result) ){
				$username=$row['fname']." ".$row['lname'];
		
				}
				
					
			$timezone = "Asia/Manila";
			if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
			$cur_date = date("Y-m-d H:i:s");

                   
mysqli_query($conn,"update users set password='$password1' where username='$username'")or die(mysql_error());
						if ($conn->query($sql) === TRUE) { 
                   		echo "<script>alert('Banner successfully added!'); window.location='changepassword.php'</script>";
                        } else {
							echo "<script>alert('Banner sad!'); window.location='changepassword.php'</script>";
                        }

					}
					
							
							
						}
			
				

			
			
			
			?>