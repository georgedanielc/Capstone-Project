<?php
include ('dbconn.php');

$username=$_GET['username'];

mysqli_query($conn,"Delete from users WHERE username ='$username'") or die(mysql_error());	
echo "<script>alert('Successfully Deleted User!'); window.location='admin.php'</script>";	

?>