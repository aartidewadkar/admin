<!DOCTYPE html>

<style>
.col-md-3,.col-md-9{
		padding:10px 0 10px 0;
}
.col-md-9 input[type="password"]{
	width:50%;
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
    if (!empty($_FILES["photo"]["name"])) 
  {
        date_default_timezone_set("Asia/Kolkata");
        $photo_updated_on=date("Y-m-d h:i:sa");  

        $file_name=$_FILES["photo"]["name"];
        $temp_name=$_FILES["photo"]["tmp_name"];
        $filetype=$_FILES["photo"]["type"];
        $a=explode('.',$_FILES['photo']['name']);
        $b=end($a);
        $ext= strtolower($b);
        $filename=date("d-m-Y")."-".time().".".$ext;
        $target_path= "../recruiter/profiles/".$filename;
        if(move_uploaded_file($_FILES["photo"]["tmp_name"],$target_path))            
        {
          $str=$row['photo'];
          $r=strcmp($str,"../recruiter/profiles/default.jpg");

            if($r!=0)
            {
              unlink($str);
            }
            $query="update recruiter_tbl set photo='".$target_path."', modified_on='".$photo_updated_on."' where recruiter_id='".$recruiter_id."'";
            $result = $conn->query($query);
            if($result===TRUE) 
            {
                $message = "Profile photo updated successfully. "; 
                header('Location:dashboard.php?message='.$message);
            }
            else
            {
                 $message = "Problem in upload. Try Again!";  
            }
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
            <a href="">Change Profile Photo</a>
          </li>
        </ol>
	
        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
		  <b></b> [ Recruiter ID:  ] 
		  <span style="float:right;">Last Modified: </span>
                </div>
				

	<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
        <div class="col-lg-12">
         	
					<div class="col-md-10">
						<div class="col-md-3">
							<b>Select New Photo</b>
						</div>
						<div class="col-md-9">
							<input type="file" class="form-control" name="photo"  required="required"/> 
						</div>
						<div >
							<input type="submit" style="width:200px;" name="update_submit" class="btn btn-lg btn-success btn-block" value="Upload"/>
						</div>
					</div>
			</div>
		</div>
	</div>
	
</div>

	
