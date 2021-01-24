<?php 
session_start();
require_once('config/config.php');

$email = $_POST['email'];
$pwd = md5($_POST['pwd']);

$login_query = "SELECT email,pwd,is_admin FROM registration WHERE email= '".$email."' AND pwd = '".$pwd."' AND is_admin = 1";
$res = mysqli_query($conn,$login_query);
$row = mysqli_fetch_assoc($res);
$_SESSION['username'] = $row['email'];
if($res){
	echo "Login";
}
else{
	echo "Failed";
}

 ?>