<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
include('dbconn.php');

$email = $_POST['email'];
$user = $_POST['user'];
$result = mysqli_query($conn,"SELECT * FROM logic where username='$user'")or die (mysql_error());



if (false === $result) 
    echo mysqli_error();

$result = mysqli_query($conn,"SELECT * FROM logic where username='$user'")or die (mysql_error());
while ($row = mysqli_fetch_array ($result) ){
$emails=$row['email'];
$password=$row['password'];
					if ($email == $emails)
					{
						$to = $email;
$headers = "From: admin@brgymahabangparang.com";
	$mail_Subject = "Recovered Password from Barangay";
	$mail_Body = "Password: $password";
	if (mail($to, $mail_Subject, $mail_Body,$headers)){
    echo "<script>alert('Email Sent Successfully'); window.location='login.php'</script>";
} else {
    die('Failure: Email was not sent!');
}
						
						
						
					}else{
						
						
echo "<script>alert('Wrong email'); window.location='forgot.php'</script>";

}}
?>


			<!--
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
include('dbconn.php');



$email = $_POST['email'];
$user = isset($_POST['user']) ? $_POST['user'] : '';
$result = mysqli_query($conn,"SELECT * FROM users where username='$user'")or die (mysql_error());
while ($row= mysqli_fetch_array ($result) ) {
$password=$row['password'];
}
$to = $email;
$headers = "From: georgedanielcavas@gmail.com";

	$mail_Subject = "Recovered Password from BRGY";
	$mail_Body = "Password: $password";
	if (mail($to, $mail_Subject, $mail_Body,$headers)){
    echo 'Email sent successfully!';
} else {
    die('Failure: Email was not sent!');
}

?>

