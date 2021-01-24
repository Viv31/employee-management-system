<?php require_once('config/config.php'); ?>
<?php include('inc/header.php'); ?>
<div class="row">
			 <div class="col-md-6 mx-auto mt-3" id="failed_div">
    <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Failed!</strong>Unable Insert data.
</div>
  </div>
 </div>
<div class="row" id="loader">
	<div class="col-md-6 mx-auto" style="background-color: rgba(0,0,0,0.8);padding: 10px;color:white;">
		<form>
			<div class="form-group">
				<label>Full Name:</label>
				<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Full Name">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="text" name="pwd" id="pwd" class="form-control" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<label>Confirm Password:</label>
				<input type="text" name="conf_pass" id="conf_pass" class="form-control" placeholder="Re-Enter Password">
			</div>
			<div class="form-group">
				<label>Gender:</label>
				<input type="radio" name="gender" id="gender" value="Male">Male
				<input type="radio" name="gender" id="gender" value="Female">Female
			</div>
			<div class="form-group">
				<label>City:</label>
				<select class="form-control" name="city" id="city">
					<option value="">---SELECT CITY---</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Pune">Pune</option>
					<option value="Delhi">Delhi</option>
					<option value="Bhopal">Bhopal</option>
					<option value="Ujjain">Ujjain</option>
					<option value="Punjab">Punjab</option>
				</select>
			</div>
			<div class="form-group">
				<label>Courses:</label>
				<input type="checkbox" name="course[]" class="course" id="course" value="it">BE(IT)
				<input type="checkbox" name="course[]"  class="course" id="course" value="civil">BE(civil)
				<input type="checkbox" name="course[]" class="course" id="course" value="mech">BE(MECH)
				<input type="checkbox" name="course[]" class="course" id="course" value="ec">BE(EC)
				<input type="checkbox" name="course[]" class="course" id="course" value="cs">BE(CS)
			</div>
			<button type="button" class="btn btn-primary" id="insert">Add Employee</button>
		</form>
	</div>
</div>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#failed_div").hide();
		$("#insert").click(function(){
			var fullname = $("#fullname").val();
			var email = $("#email").val();
			var pwd = $("#pwd").val();
			var conf_pass = $("#conf_pass").val();
			var gender = $("#gender").val();
			var city = $("#city").val();
			var course = [];
			$(".course").each(function(){
				if($(this).is(":checked")){
					course.push($(this).val());
				}
			});
			course = course.toString();
				//console.log(course);
			

			if(fullname == "" || email == "" || pwd == "" || conf_pass == "" || gender == "" || city == "" || course == ""){
				alert("All fields are required");
				return false;

			} 

			var data = {
				"fullname":fullname,
				"email":email,
				"pwd":pwd,
				"gender":gender,
				"city":city,
				"course":course
				}
				$.ajax({
					type:'POST',
					url:'add_employee_sub.php',
					data:data,
					beforeSend: function() {
    					$('#loader').text('Processing...');
  					},
					success:function(res){
						if(res=="Inserted"){
							
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