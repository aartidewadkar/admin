<?php
  require_once("database.php");
?>

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
$query="SELECT * FROM hire where id=".$id;
$result =$conn->query($query);
if($result ->num_rows>0)
{ 
	$rw = $result ->fetch_assoc();
}
}

if(isset($_POST["submit"]))
{
	
	$name = $_POST["name"];
  $doi= $_POST["doi"];
  $phone = $_POST["phone"];
  $client= $_POST["client"];
  $hr= $_POST["hr"];
  $doj= $_POST["doj"];
  $status= $_POST["status"];
  $recruiter= $_POST["recruiter"];
  $center= $_POST["center"];
  $department= $_POST["department"];
  
	
	 $query=" UPDATE `hire` SET name='".$name."',`doi`='".$doi."',`phone`='".$phone."',`client`='".$client."',`hr`='".$hr."',`doj`='".$doj."',`status`='".$status."',`recruiter`='".$recruiter."',`center`='".$center."',`department`='".$department."' WHERE id=".$id;


// $query=" UPDATE `hire` SET name='".$name."', `doi`='".$doi."',`phone`='".$phone."',`client`='".$client."',`hr`='".$hr."',`doj`='".$doj."',`status`='".$status."',`recruiter`='".$recruiter."',`center`='".$center."',`department`=".$department."' WHERE id=".$id;
				
	$result = $conn->query($query);
	if($result===TRUE) 
	{
		$message = " Updated Successfully"; 
		// header('Location:hiring.php?message='.$message);

    // header('Location:hiring.php');

	}
    else
	{
		$message = "Error!!!!"; 
	}
} 


?>

<div id="page-wrapper">
	<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Edit hiring Details</h2>  
        </div>
    </div>
		<?php 
        if(isset($message))
        {
    ?>
    <div class="row" style="text-align:center;color:#337ab7;"> 
    <?php 
        echo $message;
    ?>
    </div>
    <?php
        }
    ?>	
	
	<div class="row">
            	<div class="col-lg-12">
                	<div class="panel panel-default">
                    	<div class="panel-heading">
                                <b>SR.</b> <?php echo $rw['id'];?>
                        </div>
						<form role="form" action="" method="post" >
                        <div class="panel-body">
                        	<div class="row">
							
								<div class="col-lg-6" id="form-group">
                                  	<label >Name</label>
                                  <input class="form-control" required="required"  type="text" name="name" value="<?php echo $rw['name'];?>"> 
                                </div>
								<div class="col-lg-6" id="form-group">
                                  	<label >D.O.I</label>
                                  <input class="form-control" required="required"  type="text" name="doi" value="<?php echo $rw['doi'];?>"> 
                                </div>
								<div class="col-lg-6" id="form-group">
                                  	<label >Phone</label>
                                  <input class="form-control" required="required"  type="text" name="phone" value="<?php echo $rw['phone'];?>"> 
                                </div>
								<div class="col-lg-6" id="form-group">
                                  	<label >Client</label>
                                  <input class="form-control" required="required"  type="text" name="client" value="<?php echo $rw['client'];?>"> 
                                </div>
								<div class="col-lg-6" id="form-group">
                                  	<label >HR</label>
                                  <input class="form-control" required="required"  type="text" name="hr" value="<?php echo $rw['hr'];?>"> 
                                </div>
								<div class="col-lg-6" id="form-group">
                                  	<label >D.O.J</label>
                                  <input class="form-control" required="required"  type="text" name="doj" value="<?php echo $rw['doj'];?>"> 
                                </div>
								
								<div class="col-lg-6" id="form-group">
                                 	<label >Status</label>
									<select class="form-control" required="required" name="status" id="status">
											<option  value="<?php echo $rw['status'];?>" <?php if($rw['status']!=""){ ?> selected="selected" <?php }  ?> ><?php echo $rw['status'];?></option>	
                                       		<option value="To Joined" <?php if($rw['status']=="To Joined"){ ?> selected="selected" <?php }  ?>>To Joined</option>
                                       		<option value="Joined" <?php if($rw['status']=="Joined"){ ?> selected="selected" <?php }  ?>>Joined</option>
                                       		
										</select>
								</div>
								
								<div class="col-lg-6" id="form-group">
                                  	<label >Recruiter</label>
                                  <input class="form-control" required="required"  type="text" name="recruiter" value="<?php echo $rw['recruiter'];?>"> 
                                </div>
								
								
								<div class="col-lg-6" id="form-group">
                                 	<label >Center</label>
									<select class="form-control" required="required" name="center" id="center">
											<option  value="<?php echo $rw['center'];?>" <?php if($rw['center']!=""){ ?> selected="selected" <?php }  ?> ><?php echo $rw['center'];?></option>	
                                       		<option value="Phase 1" <?php if($rw['center']=="Phase 1"){ ?> selected="selected" <?php }  ?>>Phase 1</option>
                                       		<option value="Phase 2" <?php if($rw['center']=="Phase 2"){ ?> selected="selected" <?php }  ?>>Phase 2</option>
											<option value="Phase 3" <?php if($rw['center']=="Phase 3"){ ?> selected="selected" <?php }  ?>>Phase 3</option>
                                       		
										</select>
								</div>
								
								<div class="col-lg-6" id="form-group">
                                 	<label >Department</label>
									<select class="form-control" required="required" name="department" id="department">
											<option  value="<?php echo $rw['department'];?>" <?php if($rw['department']!=""){ ?> selected="selected" <?php }  ?> ><?php echo $rw['department'];?></option>	
                                       		<option value="FNA/BPO" <?php if($rw['department']=="FNA/BPO"){ ?> selected="selected" <?php }  ?>>FNA/BPO</option>
                                       		<option value="IT" <?php if($rw['department']=="IT"){ ?> selected="selected" <?php }  ?>>IT</option>
                                       		
										</select>
								</div>
								
							
							<div class="col-lg-12" id="form-group">
                                  	<input type="submit" class="btn btn-primary" name="submit" value="Submit" style="float:right;">
                            </div>
							</div>
					</div>
					</form>
				</div>
	</div>
	
	</div>
</div>

	
</body>
</html>








