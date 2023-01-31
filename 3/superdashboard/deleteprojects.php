<?php
include ('dbconn.php');

$pname=$_GET['pname'];


mysqli_query($conn,"Delete from projects where pname ='$pname'") or die(mysql_error());	
echo "<script>alert('Successfully Deleted Banner!'); window.location='inventory.php'</script>";	

?>