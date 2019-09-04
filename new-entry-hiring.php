
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
            <a>Dashboard</a>
          </li>
		   <li class="breadcrumb-item active">Hiring</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
		   <i class="fa fa-user"></i>
		  <b></b> Add New Entry Here
		  <span style="float:right;"> </span>
          </div>
				
				<form role="form" action="registers.php" method="post"> 
					<div class="row" style="margin-left:0px; margin-right:0px;">
						<div class="col-md-3">
							<b>Name</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="name" value="" placeholder="Enter Full Name" required /> 
						</div>
						<div class="col-md-3">
							<b>D.O.I</b>
						</div>
						<div class="col-md-3">
							<input type="date" class="form-control" name="doi" value="" required />
						</div>						
						<div class="col-md-3">
							<b>phone No</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="phone" value="" placeholder="Enter Phone no" required />
						</div>
						<div class="col-md-3">
							<b>Client</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="client" value="" placeholder="Company Name" required />
						</div>
						<div class="col-md-3">
							<b>HR</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="hr" value="" placeholder="Enter HR Name" required />
						</div>
						<div class="col-md-3">
							<b>D.O.J</b>
						</div>
						<div class="col-md-3">
							<input type="date" class="form-control" name="doj" value=" "  required />
						</div>
						<div class="col-md-3">
							<b>Status</b>
						</div>
						<div class="col-md-3">
							<select class="form-control" name="status" required="required">
											<option value="">Select Center</option>
											<option value="To Joined" selected="selected">To Joined</option>
											<option value="Joined" selected="selected" >Joined</option>
											<option value="Declined" selected="selected" >Declined</option>
									</select>
						</div>
						<div class="col-md-3">
							<b>Recruiter</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="recruiter" value="" placeholder="Enter Recruiter Name" required /> 
						</div>
						
						<div class="col-md-3">
							<b>Center</b>
						</div>
						<div class="col-md-3">
							<select class="form-control" name="center" required>
											<option value="">Select Center</option>
											<option value="Phase 1" >Phase 1</option>
											<option value="Phase 2" >Phase 2</option>
											<option value="Phase3" >Phase3</option>
									</select>
						</div>
						<div class="col-md-3">
							<b>Department</b>
						</div>
						<div class="col-md-3">
							<select class="form-control" name="department" required>
											<option value="">Select Department</option>
											<option value="FNA/BPO">FNA/BPO</option>
											<option value="IT">IT</option>
											
										</select>
						</div>
						
						
						<div style="float:right;">
									<input type="submit" style="width:180px;" name="submit" class="btn btn-lg btn-success btn-block" value="Submit"/>
						</div>
					</div>
				
				
				</form>
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
