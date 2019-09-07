<?php
 
  require_once("db_config.php");
 
?>

<?php
include 'head.php'
?>


<body id="page-top">

  <?php 
  include 'navbar.php'
  ?>
  
 
  <div id="wrapper" style="margin:0px 30px 0px 30px">
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a>Recruiter List</a>
          </li>
          <li class="breadcrumb-item active">All Employees</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
      
   <div class="card-body">
     <div class="dataTable_wrapper">
       <table class="table table-striped table-bordered table-hover" style="font-size: 14px;" id="dataTables-example">
         <thead>
          <tr>
          <th>Sr.</th>
          <th>Recruiter Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Department</th>
          <th>Registered On</th>
          <th>Status</th>
          
        </tr>
        </thead>
        
         <tbody>
        <?php
          $query="SELECT * FROM recruiter_tbl order by created_on desc";
          $result=$conn->query($query);
          if($result->num_rows>0)
          { 
            while($row = $result->fetch_assoc())
            {
        ?>
                <tr class="odd gradeX">
                    <td><a href="recruiter_details.php?id=<?php echo $row['id'] ;?>"><?php echo $row['id'] ;?>
                     </a></td>
          <td><a href="recruiter_details.php?id=<?php echo $row['id'] ;?>"><?php echo $row['name'];?></a></td>
          <td><?php echo $row['email'];?></td>                      
          <td><?php echo $row['contact'];?></td>                      
          <td><?php echo $row['department'];?></td>                     
          <td><?php echo $row['created_on'];?></td>                     
          <td><?php if($row['status']==1){echo "Verified";}else{echo "Not Verified";}?></td>                      
                            
        </tr>
        <?php 
            }
          }   
        ?>  
      </tbody>
      </table>
        </div>
             
            </div>
         </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>
      <!-- /.container-fluid -->


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

<?php 
include 'script.php'
?>
<script src="../js/dataTables/jquery.dataTables.min.js"></script>
<script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function() 
{
  $('#dataTables-example').DataTable({
      responsive: true
    });
  
});
</script>

</body>

</html>
