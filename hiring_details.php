<!DOCTYPE html>
<html lang="en">
<style>
	form{
		margin: 25px;
	}
	.row{
		line-height: 2;

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
$query="SELECT * FROM hire where id=".$_GET['id'];
$result=$conn->query($query);
if($result->num_rows>0)
{ 
	$row = $result->fetch_assoc();
}
}
?>

  <div id="content-wrapper">
	<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Hiring Details</h2>  
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
            <div class="panel-heading" style="background-color:gray";>
             <b>Sr.</b> <?php echo $row['id'];?> <a href="editstatus.php?id=<?php echo $row['id'];?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </div>
						<form role="form" action="" method="post" >
                        <div class="panel-body">
                        	<div class="row">
								<div class="col-lg-3" id="form-group1">
                                  	<label > Name :</label>
								</div>
								<div class="col-lg-3" id="form-group1">	
									<div id="txt"><?php echo $row['name'];?>	</div>								
								</div>
								<div class="col-lg-3" id="form-group1">
                                 	<label >D.O.I :</label>
								</div>
								<div class="col-lg-3" id="form-group1">
									<div id="txt"><?php echo $row['doi'];?>	</div>
								</div>
							</div>
							<div class="row">	
                                <div class="col-lg-3" id="form-group1">
                                 	<label >Phone :</label>
								</div>
								<div class="col-lg-3" id="form-group1">
                                   	<div id="txt"><?php echo $row['phone'];?>	</div>
                                </div>
								
								<div class="col-lg-3" id="form-group1">
                                 	<label >client :</label>
								</div>
								<div class="col-lg-3" id="form-group1">
                                   	<div id="txt"><?php echo $row['client'];?>	</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-lg-3" id="form-group1">
                                 	<label >HR :</label>
								</div>
								<div class="col-lg-3" id="form-group1">
                                   	<div id="txt"><?php echo $row['hr'];?>	</div>
								</div>
							
							<div class="col-lg-3" id="form-group1">
                                 	<label >D.O.J :</label>
							</div>
								<div class="col-lg-3" id="form-group1">
                                   	<div id="txt"><?php echo $row['doj'];?>	</div>
							</div>
							</div>

							<div class="row">
								<div class="col-lg-3" id="form-group1">
									<label >Status :</label>
								</div>
								<div class="col-lg-3" id="form-group1">
									<div id="txt"><?php echo $row['status'];?>	</div>
								</div>
								
							<div class="col-lg-3" id="form-group1">
									<label >Recruiter :</label>
							</div>	
							<div class="col-lg-3" id="form-group1">
								<div id="txt"><?php echo $row['recruiter'];?>	</div>
							</div>
							</div>

							<div class="row">
							<div class="col-lg-3" id="form-group1">
									<label >Center :</label>
							</div>
								<div class="col-lg-3" id="form-group1">
									<div id="txt"><?php echo $row['center'];?>	</div>
							</div>
							<div class="col-lg-3" id="form-group1">
									<label >Department :</label>
							</div>
								<div class="col-lg-3" id="form-group1">
									<div id="txt"><?php echo $row['department'];?>	</div>
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