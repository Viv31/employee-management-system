<?php 
session_start();
require_once('config/config.php');

$id = $_POST['id'];
//echo "ID".$id;

$delete_data = "DELETE FROM `registration` WHERE id = '".$id."'";
$res = mysqli_query($conn,$delete_data);
if($res)
{
	echo "DELETED";
}else
	 	{
	 	 echo "Failed"; 
	 	}

?>