<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
<meta name="description" content="" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					


					<div class="container-login100-form-btn">
						<button class="login100-form-btn name="login" value="Sign In" id="signin" class="signin"">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
<?php
include ('dbconn.php');
session_start();
if (!empty($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$login_query=mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
$position=$row['position'];


if ($count > 0){
	if($position=='Admin'){
		$_SESSION['id']=$row['user_id'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='dashboard/index.php'</script>";
	}
	elseif($position=='Resident'){
		$_SESSION['id']=$row['user_id'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='try.php'</script>";
	}

	
}


}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$username=$_POST['username'];
$password=$_POST['password'];

$login_query=mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
$position=$row['position'];


if ($count > 0){

	if($position=='Admin'){
		$_SESSION['id']=$row['user_id'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='dashboard/index.php'</script>";
	}
	elseif($position=='Costumer'){
		$_SESSION['id']=$row['user_id'];
		$_SESSION['login']=$row['position'];
		echo "<script>alert('Successfully Login!'); window.location='index.php'</script>";
	}

	
}
else{ 
	
echo "<script>alert('Invalid Username and Password! Try again.'); window.location='signin.php'</script>";

}
}
?>	

	<div id="dropDownSelect1"></div>
	

</body>
</html>