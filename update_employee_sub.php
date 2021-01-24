<?php require_once('config/config.php'); ?>
<?php
$user_id = $_POST['user_id'];
//echo $user_id;
$fullname =$_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$course = $_POST['course'];
$updated_at = date('Y-m-d h:i:s');

$update_data = "UPDATE registration SET
 `fullname`='".$fullname."',
 `email`='".$email."',
 `gender`='".$gender."',
 `city`='".$city."',
 `course`='".$course."',
 `updated_at`='".$updated_at."' WHERE id = '".$user_id."'";
 $res = mysqli_query($conn,$update_data);
 if($res){
 	echo "Updated";
}
else{
	echo "Failed";
}

?>