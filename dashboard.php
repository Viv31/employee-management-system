<?php include('inc/header.php'); ?>
<?php require_once('config/config.php'); ?>
<div class="row">
	<div class="col-md-6">
		<h4>Welcome,<?php echo $_SESSION['username']; ?></h4>
	</div>
	
</div>
<div class="row">
	<div class="col-md-3">
		<h2 class="text-primary">All Employee</h2>
 <a href="all_employee.php"> 
 	<div class="card">
    <div class="card-body">
    	<img src="img/all_employee.jpg" style="width: 100%;">
    </div>
  </div>
	</div>
	</a>
</div>
<?php include('inc/footer.php'); ?>