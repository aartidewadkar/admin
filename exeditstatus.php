<!DOCTYPE html>
<html lang="en">
<?php
  require_once("database.php");
?>

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

</style>

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
$id=$_GET['id'];	
$q="SELECT * FROM admin_profile where id=".$id;
$r=$conn->query($q);
if($r->num_rows>0)
{ 
	$rw = $r->fetch_assoc();
}
}

if(isset($_POST["update"]))
{
	
	$name = $_POST["name"];
  $email= $_POST["email"];
  $contact = $_POST["contact"];
  $emergency_contact= $_POST["emergency_contact"];
   $dob= $_POST["dob"];
    $doj= $_POST["doj"];
  $local_address= $_POST["local_address"];
  $permanant_address= $_POST["permanant_address"];
  $gender= $_POST["gender"];
  $education= $_POST["education"];
  $position= $_POST["position"];
  $department= $_POST["department"];
  $center= $_POST["center"];
  $reporting_to= $_POST["reporting_to"];
  
	
	
$query="UPDATE `admin_profile` SET name='".$name."', `email`='".$email."',`contact`='".$contact."',`emergency_contact`='".$emergency_contact."',
`dob`='".$dob."',`doj`='".$doj."',`local_address`='".$local_address."',`permanant_address`='".$permanant_address."',`gender`='".$gender."',
`education`='".$education."',`position`='".$position."',`department`='".$department."',`center`='".$center."',`reporting_to`=".$reporting_to."' WHERE id=".$id;
				
	$result = $conn->query($query);
	if($result===TRUE) 
	{
		$message = " Updated Successfully"; 
		header('Location:profile1.php?message='.$message);
	}
    else
	{
		$message = "Error!!!!"; 
	}
} 


?>
 
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
		  <i class="fa fa-user"></i>
            <a href="">Edit Hiring</a>
          </li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
		   <b><?php echo $row['name']; ?></b> [ Recruiter ID: <?php echo $row['id']; ?> ] <span style="float:right;">Last Modified: <?php echo $row['modified_on']; ?></span>
		 
          </div>
				
				
					<div class="row" style="margin-left:0px; margin-right:0px;">
						<div class="col-md-3">
							<b>Name</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" /> 
						</div>
						<div class="col-md-3">
							<b>Email</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>"/>
						</div>						
						<div class="col-md-3">
							<b>Contact</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>"/>
						</div>
						<div class="col-md-3">
							<b>Emergency Contact</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="emergency_contact" value="<?php echo $row['emergency_contact']; ?>"/>
						</div>
						<div class="col-md-3">
							<b>Date of Birth</b>
						</div>
						<div class="col-md-3">
							<input type="date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>"/>
						</div>
						<div class="col-md-3">
							<b>Date of Joining</b>
						</div>
						<div class="col-md-3">
							<input type="date" class="form-control" name="doj" value="<?php echo $row['doj']; ?>"/>
						</div>
						<div class="col-md-3">
							<b>Local Address</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="local_address" value="<?php echo $row['local_address']; ?>"/>
						</div>
						<div class="col-md-3">
							<b>Permanent Address</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="permanent_address" value="<?php echo $row['permanant_address']; ?>"/>
						</div>
						<div class="col-md-3">
							<b>Gender</b>
						</div>
						<div class="col-md-3">
							<select class="form-control" name="gender" required="required">
											<option value="">Select Gender</option>
											<option value="Male" <?php if($row['gender']=='Male'){ ?>selected="selected" <?php }?>>Male</option>
											<option value="Female" <?php if($row['gender']=='Female'){ ?>selected="selected" <?php }?>>Female</option>
										</select>
							
						</div>
						<div class="col-md-3">
							<b>Education</b>
						</div>
						<div class="col-md-3">
							<select class="form-control"  name="education" required="required">
											<option value="">Select Education</option>
                                        <option value="Not Pursuing Graduation" <?php if($row['education']=='Not Pursuing Graduation'){ ?>selected="selected" <?php }?>>Not Pursuing Graduation</option>
<option value="Compulsory Education" <?php if($row['education']=='Compulsory Education'){ ?>selected="selected" <?php }?>>Compulsory Education</option>
<option value="Diploma" <?php if($row['education']=='Diploma'){ ?>selected="selected" <?php }?>>Diploma</option>
<option value="B.A" <?php if($row['education']=='B.A'){ ?>selected="selected" <?php }?>>B.A</option>
<option value="B.Arch" <?php if($row['education']=='B.Arch'){ ?>selected="selected" <?php }?>>B.Arch</option>
<option value="BCA" <?php if($row['education']=='BCA'){ ?>selected="selected" <?php }?>>BCA</option>
<option value="B.B.A" <?php if($row['education']=='B.B.A'){ ?>selected="selected" <?php }?>>B.B.A</option>
<option value="B.Com" <?php if($row['education']=='B.Com'){ ?>selected="selected" <?php }?>>B.Com</option>
<option value="B.Ed" <?php if($row['education']=='B.Ed'){ ?>selected="selected" <?php }?>>B.Ed</option>
<option value="BDS" <?php if($row['education']=='BDS'){ ?>selected="selected" <?php }?>>BDS</option>
<option value="BHM" <?php if($row['education']=='BHM'){ ?>selected="selected" <?php }?>>BHM</option>
<option value="B.Pharma" <?php if($row['education']=='B.Pharma'){ ?>selected="selected" <?php }?>>B.Pharma</option>
<option value="B.Sc" <?php if($row['education']=='B.Sc'){ ?>selected="selected" <?php }?>>B.Sc</option>
<option value="B.Tech/B.E." <?php if($row['education']=='B.Tech/B.E.'){ ?>selected="selected" <?php }?>>B.Tech/B.E.</option>
<option value="LLB" <?php if($row['education']=='LLB'){ ?>selected="selected" <?php }?>>LLB</option>
<option value="MBBS" <?php if($row['education']=='MBBS'){ ?>selected="selected" <?php }?>>MBBS</option>
<option value="BVSC" <?php if($row['education']=='BVSC'){ ?>selected="selected" <?php }?>>BVSC</option>
<option value="CA" <?php if($row['education']=='CA'){ ?>selected="selected" <?php }?>>CA</option>
<option value="CS" <?php if($row['education']=='CS'){ ?>selected="selected" <?php }?>>CS</option>
<option value="ICWA" <?php if($row['education']=='ICWA'){ ?>selected="selected" <?php }?>>ICWA</option>
<option value="Integrated PG" <?php if($row['education']=='Integrated PG'){ ?>selected="selected" <?php }?>>Integrated PG</option>
<option value="LLM" <?php if($row['education']=='LLM'){ ?>selected="selected" <?php }?>>LLM</option>
<option value="M.A" <?php if($row['education']=='M.A'){ ?>selected="selected" <?php }?>>M.A</option>
<option value="M.Arch" <?php if($row['education']=='M.Arch'){ ?>selected="selected" <?php }?>>M.Arch</option>
<option value="M.Com" <?php if($row['education']=='M.Com'){ ?>selected="selected" <?php }?>>M.Com</option>
<option value="M.Ed" <?php if($row['education']=='M.Ed'){ ?>selected="selected" <?php }?>>M.Ed</option>
<option value="M.Pharma" <?php if($row['education']=='M.Pharma'){ ?>selected="selected" <?php }?>>M.Pharma</option>
<option value="M.Sc" <?php if($row['education']=='M.Sc'){ ?>selected="selected" <?php }?>>M.Sc</option>
<option value="M.Tech" <?php if($row['education']=='M.Tech'){ ?>selected="selected" <?php }?>>M.Tech</option>
<option value="MBA/PGDM" <?php if($row['education']=='MBA/PGDM'){ ?>selected="selected" <?php }?>>MBA/PGDM</option>
<option value="MCA" <?php if($row['education']=='MCA'){ ?>selected="selected" <?php }?>>MCA</option>
<option value="MS" <?php if($row['education']=='MS'){ ?>selected="selected" <?php }?>>MS</option>
<option value="PG Diploma" <?php if($row['education']=='PG Diploma'){ ?>selected="selected" <?php }?>>PG Diploma</option>
<option value="MVSC" <?php if($row['education']=='MVSC'){ ?>selected="selected" <?php }?>>MVSC</option>
<option value="Ph.D/Doctorate" <?php if($row['education']=='Ph.D/Doctorate'){ ?>selected="selected" <?php }?>>Ph.D/Doctorate</option>
<option value="MPHIL" <?php if($row['education']=='MPHIL'){ ?>selected="selected" <?php }?>>MPHIL</option>
										</select>
						</div>
						<div class="col-md-3">
							<b>Position</b>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="position" value="<?php echo $row['position']; ?>"/>
						</div>
						<div class="col-md-3">
							<b>Department</b>
						</div>
						<div class="col-md-3">
							<select class="form-control" name="department" required="required">
											<option value="">Select Department</option>
											<option value="IT Recruitment" <?php if($row['department']=='IT Recruitment'){ ?>selected="selected" <?php }?>>IT Recruitment</option>
											<option value="Financial Recruitment" <?php if($row['department']=='Financial Recruitment'){ ?>selected="selected" <?php }?>>Financial Recruitment</option>
											<option value="BPO Recruitment" <?php if($row['department']=='BPO Recruitment'){ ?>selected="selected" <?php }?>>BPO Recruitment</option>
											<option value="Admin" <?php if($row['department']=='Admin'){ ?>selected="selected" <?php }?>>Admin</option>
										</select>
						</div>
						<div class="col-md-3">
							<b>Center</b>
						</div>
						<div class="col-md-3">
							<select class="form-control" name="designation" required="required">
											<option value="">Select Center</option>
											<option value="phase1" <?php if($row['center']=='phase 1'){ ?>selected="selected" <?php }?>>Phase 1</option>
											<option value="phase2" <?php if($row['center']=='phase 2'){ ?>selected="selected" <?php }?>>Phase 2</option>
											<option value="phase 3" <?php if($row['center']=='phase 3'){ ?>selected="selected" <?php }?>>Phase 3</option>
									</select>
						</div>
						<div class="col-md-3">
							<b>Reporting To</b>
						</div>
						<div class="col-md-3">
							<select class="form-control" name="reporting_to" required="required">
											<option value="">Select </option>
											<option value="Team Leader" <?php if($row['reporting_to']=='Team Leader'){ ?>selected="selected" <?php }?>>Team Leader</option>
											<option value="Manager" <?php if($row['reporting_to']=='Manager'){ ?>selected="selected" <?php }?>>Manager</option>
											<option value="Sr. Manager" <?php if($row['reporting_to']=='Sr. Manager'){ ?>selected="selected" <?php }?>>Sr. Manager</option>
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
