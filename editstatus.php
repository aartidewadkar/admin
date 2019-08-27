<!DOCTYPE html>

<style>
[type="submit"]:not(:disabled)
 {
    margin: 15px;
}
.col-md-3{
		padding:10px 0 10px 0;
}
.col-md-3 input[type="text"],
.col-md-3 input[type="date"],
.col-md-3 select{
	width:100%;
}

</
</style>
<html lang="en">
<?php
include 'head.php'
?>
<body id="page-top">

 <?php 
 include 'navbar.php'
 ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
		  <i class="fa fa-user"></i>
            <a href="">Edit Profile</a>
          </li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
		  <b></b> [ Recruiter ID:  ] 
		  <span style="float:right;">Last Modified: </span>
          </div>
				
						
						
						<div class="col-md-3">
							<b>Status</b>
						</div>
						<div class="col-md-3">
							<select class="form-control" name="designation" required="required">
											<option value="">Select Status</option>
											<option value="" >To Joined</option>
											<option value="">Joined</option>
											
									</select>
						</div>
						
						<div style="float:right;">
									<input type="submit" style="width:200px;" name="update_submit" class="btn btn-lg btn-success btn-block" value="Update"/>
						</div>
					</div>
				
				
				
		</div>
	  </div>
	</div>	   
         

	</div>
      <!-- /.container-fluid -->
<?php 
include 'footer.php'
?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->


<?php 
include 'script.php'
?>
</body>

</html>
