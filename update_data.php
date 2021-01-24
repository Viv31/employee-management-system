<?php require_once('config/config.php'); ?>
<?php include('inc/header.php'); ?>
<?php 
$id = $_GET['id'];
//echo $id; die;

$get_data = "SELECT * FROM registration WHERE id ='".$id."'";
$res = mysqli_query($conn,$get_data);
$row = mysqli_fetch_assoc($res);
$course_data = $row['course'];
//print_r($course_data);



?>
<div class="row">
			 <div class="col-md-6 mx-auto mt-3" id="failed_div">
    <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Failed!</strong>Unable Update data.
</div>
  </div>
 </div>
<div class="row">
	<div class="col-md-6 mx-auto" style="background-color: rgba(0,0,0,0.8);padding: 10px;color:white;">
		<form>
			<div class="form-group">
				<label>Full Name:</label>
				<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Full Name" value="<?php echo $row['fullname'] ?>">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" value="<?php echo $row['email'] ?>">
			</div>
			<!-- <div class="form-group">
				<label>Password:</label>
				<input type="text" name="pwd" id="pwd" class="form-control" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<label>Confirm Password:</label>
				<input type="text" name="conf_pass" id="conf_pass" class="form-control" placeholder="Re-Enter Password" >
			</div> -->
			<div class="form-group">
				<label>Gender:</label>
					<input type="radio" name="gender" id="gender" value="Male"<?php if($row['gender']=="Male"){echo "checked";}else{} ?>>Male
					<input type="radio" name="gender" id="gender" value="Female" <?php if($row['gender']=="Female"){echo "checked";}else{} ?>>Female
			</div>
			<div class="form-group">
				<label>City:</label>
				<select class="form-control" name="city" id="city">
					<option value="">---SELECT CITY---</option>
					<option value="Mumbai"<?php if($row['city']=="Mumbai"){ echo "selected";} ?>>Mumbai</option>
					<option value="Pune"<?php if($row['city']=="Pune"){ echo "selected";} ?>>Pune</option>
					<option value="Delhi"<?php if($row['city']=="Delhi"){ echo "selected";} ?>>Delhi</option>
					<option value="Bhopal"<?php if($row['city']=="Bhopal"){ echo "selected";} ?>>Bhopal</option>
					<option value="Ujjain"<?php if($row['city']=="Ujjain"){ echo "selected";} ?>>Ujjain</option>
					<option value="Punjab"<?php if($row['city']=="Punjab"){ echo "selected";} ?>>Punjab</option>
				</select>
			</div>
			<div class="form-group">
				<label>Courses:</label>
				<input type="checkbox" name="course[]" id="course" value="it"<?php if($row['course']=="it"){ echo "checked";} ?>>BE(IT)
				<input type="checkbox" name="course[]" id="course" value="civil"<?php if($row['course']=="civil"){ echo "checked";} ?>>BE(civil)
				<input type="checkbox" name="course[]" id="course" value="mech"<?php if($row['course']=="mech"){ echo "checked";} ?>>BE(MECH)
				<input type="checkbox" name="course[]" id="course" value="ec"<?php if($row['course']=="ec"){ echo "checked";} ?>>BE(EC)
				<input type="checkbox" name="course[]" id="course" value="cs"<?php if($row['course']=="cs"){ echo "checked";} ?>>BE(CS)
			</div>
			<input type="hidden" name="user_id" id="user_id" value="<?php echo $id ?>">
			<button type="button" class="btn btn-primary" id="update">Update Employee</button>
		</form>
	</div>
</div>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#failed_div").hide();
		$("#update").click(function(){
			var fullname = $("#fullname").val();
			var email = $("#email").val();
			var pwd = $("#pwd").val();
			var conf_pass = $("#conf_pass").val();
			var gender = $("#gender").val();

			var city = $("#city").val();
			var course = $("#course").val();
			var user_id = $("#user_id").val();
			/*var course = new Array();
			$('#course input:checked').each(function() {
			    course.push($(this).attr('name'));
			});*/

			if(fullname == "" || email == "" || pwd == "" || conf_pass == "" || gender == "" || city == "" || course == ""){
				alert("All fields are required");
				return false;

			} 

			var data ={
				"user_id":user_id,
				"fullname":fullname,
				"email":email,
				"pwd":pwd,
				"gender":gender,
				"city":city,
				"course":course
				}
				$.ajax({
					type:'POST',
					url:'update_employee_sub.php',
					data:data,
					beforeSend: function() {
                        $("#update").html('Processing...');
                    },
					success:function(res){
						if(res == "Updated"){

						window.location.href = "all_employee.php";
						}
						if(res== "Failed" ){

							$("#failed_div").show();
						}

					}



				});

		});

	});
</script>

