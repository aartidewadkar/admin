<?php
 session_cache_limiter(FALSE);
  session_start(); 
  if(!isset($_SESSION['user_id']))
  {
    header("Location: ../login.php");
  }

  require_once("db_config.php");
 ?>

<html>
<style>
#txt{
  padding-top:7px;
}
.col-md-3{
    padding:10px 0 10px 0;
}
#menu-block{
  width:140px; height:140px;background-color:rgba(0,0,0,0.1);
}
#menu-icon{
  padding:10px 0 0 0; text-align:center; font-size:3.9em;
  color:#ffffff;
}
#menu-icon h3{
  font-family:Trebuchet MS, Helvetica, sans-serif;
}
#menu-footer{
  vertical-align:bottom;  background-color:rgba(0,0,0,0.3);text-align:center;color:#ffffff;
}
#menu-footer:hover{
   background-color:rgba(0,0,0,0.5);
   cursor:pointer;
}
#form-group1 label {
    float: left;
    width: 100%;
    padding-top: 7px;
}
</style>

<?php
include 'head.php';
?>

<body>
<?php
include 'navbar.php';

if(isset($_GET['id']))
{
$query="SELECT * FROM recruiter_tbl where id=".$_GET['id'];
$result=$conn->query($query);
if($result->num_rows>0)
{ 
  $row = $result->fetch_assoc();
}
}
?>

<!-- <div class="content-wrapper"> -->
  <div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Recruiter Details</h2>  
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
                  <div class="panel panel-default" style="border: 1px solid #eee; margin:7px 30px 0px 30px;">
                      <div class="panel-heading" style="padding: 5px; background-color: lightblue; border-bottom: : 1px solid gray;">
                                <b><?php echo $row['name'];?></b> 
                <?php 
                  if($row['status']==0)
                  {
                ?>
                <form action="change_action.php"  method="post" style="float:right;">
                <input type="hidden" name="recruiter_id" value="<?php echo $row['recruiter_id'] ;?>"/> 
                <select  name="status" onchange="this.form.submit()">
                  <option value="">Select Action</option>
                  <option value="1">Verify</option>
                  <option value="2">Reject</option>
                </select>
                </form>
                <?php 
                  }
                  else
                  {
                ?>  
                <span style="color:green;float:right"><i class="fa fa-check" aria-hidden="true"></i> Verified</span>
                <?php 
                  }
                ?>
                        </div>
                         <div class="card-body">
     <div class="dataTable_wrapper">
       <table class="table table-striped table-bordered table-hover" style="font-size: 14px;" id="dataTables-example">
                        <div class="panel-body">
                          <div class="row">
                <div class="col-lg-3" id="form-group1">
                                    <label >Name</label>
                </div>
                <div class="col-lg-3" id="form-group1"> 
                  <div id="txt"><?php echo $row['name'];?>  </div>                
                </div>
                <div class="col-lg-3" id="form-group1">
                                  <label >Email</label>
                </div>
                <div class="col-lg-3" id="form-group1">
                  <div id="txt"><?php echo $row['email'];?> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3" id="form-group1">
                                    <label >Contact</label>
                </div>
                <div class="col-lg-3" id="form-group1"> 
                  <div id="txt"><?php echo $row['contact'];?> </div>                
                </div>
                <div class="col-lg-3" id="form-group1">
                                  <label >Emergency Contact</label>
                </div>
                <div class="col-lg-3" id="form-group1">
                  <div id="txt"><?php echo $row['emergency_contact'];?> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3" id="form-group1">
                                    <label >Local Address</label>
                </div>
                <div class="col-lg-3" id="form-group1"> 
                  <div id="txt"><?php echo $row['local_address'];?> </div>                
                </div>
                <div class="col-lg-3" id="form-group1">
                                  <label >Permanent Address</label>
                </div>
                <div class="col-lg-3" id="form-group1">
                  <div id="txt"><?php echo $row['permanant_address'];?> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3" id="form-group1">
                                    <label >Gender</label>
                </div>
                <div class="col-lg-3" id="form-group1"> 
                  <div id="txt"><?php echo $row['gender'];?>  </div>                
                </div>
                <div class="col-lg-3" id="form-group1">
                                  <label >Education</label>
                </div>
                <div class="col-lg-3" id="form-group1">
                  <div id="txt"><?php echo $row['education'];?> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3" id="form-group1">
                                    <label >Position</label>
                </div>
                <div class="col-lg-3" id="form-group1"> 
                  <div id="txt"><?php echo $row['position'];?> </div>                
                </div>
                <div class="col-lg-3" id="form-group1">
                                  <label >Department</label>
                </div>
                <div class="col-lg-3" id="form-group1">
                  <div id="txt"><?php echo $row['department'];?>  </div>
                </div>
              </div> 
              <div class="row">
                <div class="col-lg-3" id="form-group1">
                                    <label >Center</label>
                </div>
                <div class="col-lg-3" id="form-group1"> 
                  <div id="txt"><?php echo $row['center'];?> </div>                
                </div>
                <div class="col-lg-3" id="form-group1">
                                  <label >Reporting To</label>
                </div>
                <div class="col-lg-3" id="form-group1">
                  <div id="txt"><?php echo $row['reporting_to'];?>  </div>
                </div>
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

<!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

       
        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        

