<?php 
session_start();
require_once('config/config.php');
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$pwd = md5($_POST['pwd']);
$gender = $_POST['gender'];
$city = $_POST['city'];
$course = $_POST['course'];
$created_at = date('Y-m-d h:i:s');
$updated_at = date('Y-m-d h:i:s');
$is_admin = 0;
$is_active = 1;

 $insert_employee = "INSERT INTO registration(`fullname`,`email`,`pwd`,`gender`,`city`,`course`,`is_admin`,`created_at`,`updated_at`,`is_active`)VALUES('".$fullname."','".$email."','".$pwd."','".$gender."','".$city."','".$course."','".$is_admin."','".$created_at."','".$updated_at."','".$is_active."')";

$res = mysqli_query($conn,$insert_employee);
if($res){
	echo "Inserted";

}
else{
	echo "Failed";
}



?>