<?php require_once('config/config.php'); ?>
<?php include('inc/header.php'); ?>
<div class="row">
	<div class="col-md-10" style="background-color: rgba(0,0,0,0.5);padding: 10px;">
		<a href="add_employee.php" class="btn btn-primary pull-right mb-5">Add Employee</a>
		<table class="table table-striped">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>City</th>
        <th>Course</th>
        <th>Created At</th>
        <th colspan="2" style="text-align: center;">Action</th>

      </tr>
    </thead>
    <tbody id="response_data">
        <?php 
    	$get_all_employee = "SELECT * FROM registration WHERE is_admin!=1";
    	$res = mysqli_query($conn,$get_all_employee);
    	if(mysqli_num_rows($res) > 0){
    		$sno=1;
    		while ($rs = mysqli_fetch_assoc($res)) { ?>
    			<tr id="response_data<?php echo $rs['id']; ?>">
			        <td><?php echo $sno; ?></td>
			        <td><?php echo $rs['fullname']; ?></td>
			        <td><?php echo $rs['email']; ?></td>
			        <td><?php echo $rs['gender']; ?></td>
			        <td><?php echo $rs['city']; ?></td>
			        <td><?php echo $rs['course']; ?></td>
			        <td><?php echo $rs['created_at']; ?></td>
                    <td><a href="update_data.php?id=<?php echo $rs['id']; ?>" class="btn btn-success">Update</a></td>
                    <td><button id="delete_btn<?php echo $rs['id']; ?>" class="btn btn-danger" onclick="return del(<?php echo $rs['id']; ?>);">Delete</button></td>
      			</tr>
    			
    		<?php $sno++; }

    	}
    	?>
      
     
    </tbody>
  </table>
	</div>
</div>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
    function del($id){
         //alert($id);
         var id = $id;
         var data = {
            "id":id
         }

       var conf = confirm("Do you want to delete this ?");
       if(conf == true){
        $.ajax({
            type:'POST',
            url:'delete_data.php',
            data:data,
            beforeSend: function() {
                        $("#delete_btn"+id).html('Processing...');
                    },
            success:function(res){
                if(res=="DELETED"){
                   //alert(res);
                    $("#response_data"+id).hide('slow');

                }
                if(res == "Failed"){
                    alert();
                }

            }


        });
        return true;

       }
       else {
        return false;
       }
        

    }
</script>