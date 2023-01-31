<?php
session_start();
if(!empty($_SESSION['id'])){

$id_session=$_SESSION['id'];
$login=$_SESSION['login'];	
session_destroy();
header('location:./index.php');
}
?>