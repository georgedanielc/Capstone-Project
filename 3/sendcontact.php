<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
include('dbconn.php');

$email = $_GET['email'];

$to = $email;
$headers = "From: georgedanielcavas@gmail.com";
	$mail_Subject = "Message Sended to Barangay Mahabang Parang";
	$mail_Body = "We successfully received your message we will get in touch with you soon";
	if (mail($to, $mail_Subject, $mail_Body,$headers)){
    echo "<script>alert('Email Sent Successfully'); window.location='index.php'</script>";
} else {
    die('Failure: Email was not sent!');

						
						
						
			
						
echo "<script>alert('Wrong email'); window.location='forgot.php'</script>";

}
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

