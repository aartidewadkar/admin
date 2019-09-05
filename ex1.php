<!DOCTYPE html>
<html lang="en">
<style>
 .col-lg-4{
  margin: 15px;
 }
</style>

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
	
	
  $doj= $_POST["doj"];
  $status= $_POST["status"];
  
	
	 $query=" UPDATE `hire` SET doj='".$doj."',`status`='".$status."' WHERE id=".$id;



				
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
                    	<div class="panel-heading" style="background-color: gray; padding: 5px;">
                                <b>SR.</b> <?php echo $rw['id'];?>
                        </div>

                        
						<form role="form" action="" method="post" >
               <div class="row">
								<div class="col-lg-4" id="form-group">
                                    <label >D.O.J</label>
                
                 
                                  <input class="form-control" required="required"  type="date" name="doj" value="<?php echo $rw['doj'];?>"> 
                                </div>
                             

								<div class="col-lg-4" id="form-group">
                                  <label >Status</label>
                               
                  <select class="form-control" required="required" name="status" id="status">
                      <option  value="<?php echo $rw['status'];?>" <?php if($rw['status']!=""){ ?> selected="selected" <?php }  ?> ><?php echo $rw['status'];?></option>  
                                          <option value="To Joined" <?php if($rw['status']=="To Joined"){ ?> selected="selected" <?php }  ?>>To Joined</option>
                                          <option value="Joined" <?php if($rw['status']=="Joined"){ ?> selected="selected" <?php }  ?>>Joined</option>
                                          
                    </select>
                </div>

								<div class="col-lg-12" id="form-group">
                                  	<input type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin: 15px">
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








