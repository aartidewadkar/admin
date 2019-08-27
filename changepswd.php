<!DOCTYPE html>

<style>
[type="submit"]:not(:disabled)
 {
    margin: 15px;
}
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
if(isset($_POST["update_submit"]))
{
    $old=$_POST["old"];
	$new1=$_POST["new1"];
	$new2=$_POST["new2"];
	
	if(strcmp($new1,$new2)!=0)
	{
		$message = "New password and confirm password must be same."; 
        unset($_POST);
	}
	else
	{	
	$query = "select * from recruiter_tbl where recruiter_id = '".$recruiter_id."' and password='".$old."'";
    $result=$conn->query($query);
    if($result->num_rows>0)
    {
		$query = "UPDATE `recruiter_tbl` SET `password`='".$new1."' where recruiter_id='".$recruiter_id."'";
        $result = $conn->query($query);
		if($result===TRUE) 
		{
		
			$message = "Password changed successfully!"; 
			header('Location:profile.php?message='.$message);
		}	 
		else 
		{
			$message = "Problem in updation. Try Again!";    
		}    
    }
    else
    {
		$message = "Incorrect old password."; 
        unset($_POST);
	}
	}
}

?>

 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
		  <i class="fa fa-user"></i>
            <a href="">Change Password</a>
          </li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
		  <b></b> [ Recruiter ID:  ] 
		  <span style="float:right;">Last Modified: </span>
                </div>

<div class="container-fluid">
   	<form action="" method="post">
		<div class="row">
			<div class="col-md-10">
				<div class="col-md-3">
					<b>Old Password</b>
				</div>
				<div class="col-md-9">
					<input type="password" class="form-control" name="old"  required="required"/> 
				</div>
				<div class="col-md-3">
					<b>New Password</b>
				</div>
				<div class="col-md-9">
					<input type="password" class="form-control" name="new1"  required="required"/> 
				</div>
				<div class="col-md-3">
					<b>Confirm Password</b>
				</div>
				<div class="col-md-9">
					<input type="password" class="form-control" name="new2"  required="required"/> 
				</div>
				<div >
					<input type="submit" style="width:200px;" name="update_submit" class="btn btn-lg btn-success btn-block" value="Save Changes"/>
				</div>
			</div>
		</div>
	</form>
</div>
			



		