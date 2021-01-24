<?php require_once('config/config.php'); ?>
<?php include('inc/header.php'); ?>
<div class="row">
			 <div class="col-md-6 mx-auto mt-3" id="failed_div">
    <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Failed!</strong>Please Enter Correct Login Details.
</div>
  </div>
 </div>
<div class="row">
	<div class="col-md-6 mx-auto">
<h2>Stacked form</h2>
  <form action="">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="button" class="btn btn-primary" id="login">Login</button>
  </form>
</div>
</div>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#login").click(function(){
			var pwd = $("#pwd").val();
			var email = $("#email").val();

			if(pwd == ""){
				return false;

			}
			if(email == ""){
				return false;

			}
			var data ={
				"pwd":pwd,
				"email":email
			}
			$.ajax({
				type:'POST',
				url:'login_sub.php',
				data:data,
				success:function(res){
					if(res == "Login"){
						window.location.href = "dashboard.php";
					}
					if(res == "Failed"){
						alert("failed");
					}

				}

			});


		});

	});
</script>