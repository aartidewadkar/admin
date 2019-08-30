<!DOCTYPE html>
<?php
 
  require_once("database.php");
 
?>
<style>
.col-md-3{
		padding:10px 0 10px 0;
}
</style>
<html lang="en">
<?php
include 'head.php'
?>
<body id="page-top">

 <?php 
 include 'navbar.php'
 ?>
 
 <?php
if(isset($_GET['id']))
{	
$query="SELECT * FROM admin_profile where id=".$_GET['id'];
$result=$conn->query($query);
if($result->num_rows>0)
{ 
	$row = $result->fetch_assoc();
}
}
?>
 
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
		  <i class="fa fa-user"></i>
            <a href="">Profile</a>
          </li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
		  <b><?php echo $row['name']; ?></b> [ Recruiter ID: <?php echo $row['id']; ?> ] <a href="exeditstatus.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><span 
		  style="float:right;">Last Modified: <?php echo $row['modified_on']; ?></span>
                </div>
				
				<div class="row">
					<div class="col-md-3">
						<img src="<?php echo $row['photo']; ?>" height="150px" width="150px;" />
						<p><a href="changephoto.php">Change Photo</a></p>
					</div>
					<div class="col-md-9">
					<div class="row">
					
						<div class="col-md-3">
							<b>Name</b>
						</div>
						<div class="col-md-3">
							<?php echo $row['name']; ?>
						</div>
						<div class="col-md-3">
							<b>Email</b>
						</div>
						<div class="col-md-3">
							<?php echo $row['email']; ?>
						</div>						
						<div class="col-md-3">
							<b>Contact</b>
						</div>
						<div class="col-md-3">
						<?php echo $row['contact']; ?>
						</div>
						<div class="col-md-3">
							<b>Emergency Contact</b>
						</div>
						<div class="col-md-3">
						<?php echo $row['emergency_contact']; ?>
						</div>
						<div class="col-md-3">
							<b>Date of Birth</b>
						</div>
						<div class="col-md-3">
							<?php echo $row['dob']; ?>
						</div>
						<div class="col-md-3">
							<b>Date of Joining</b>
						</div>
						<div class="col-md-3">
							<?php echo $row['doj']; ?>
						</div>
						<div class="col-md-3">
							<b>Local Address</b>
						</div>
						<div class="col-md-3">
								<?php echo $row['local_address']; ?>
						</div>
						<div class="col-md-3">
							<b>Permanent Address</b>
						</div>
						<div class="col-md-3">
								<?php echo $row['permanant_address']; ?>
						</div>
						<div class="col-md-3">
							<b>Gender</b>
						</div>
						<div class="col-md-3">
								<?php echo $row['gender']; ?>
						</div>
						<div class="col-md-3">
							<b>Education</b>
						</div>
						<div class="col-md-3">
							<?php echo $row['education']; ?>
						</div>
						<div class="col-md-3">
							<b>Position</b>
						</div>
						<div class="col-md-3">
							<?php echo $row['position']; ?>
						</div>
						<div class="col-md-3">
							<b>Department</b>
						</div>
						<div class="col-md-3">
							<?php echo $row['department']; ?>
						</div>
						<div class="col-md-3">
							<b>Center</b>
						</div>
						<div class="col-md-3">
							<?php echo $row['center']; ?>
						</div>
						<div class="col-md-3">
							<b>Reporting To</b>
						</div>
						<div class="col-md-3">
							<?php echo $row['reporting_to']; ?>
						</div>
						
						
					</div>
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
