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
  
 
  <div id="wrapper">
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Hiring</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
		  <a href="new-entry-hiring.php" class="btn btn-lg btn-success btn-block" style="width:200px;">Add New Entry</a>
   <div class="card-body">
     <div class="dataTable_wrapper">
			 <table class="table table-striped table-bordered table-hover" style="font-size: 14px;" id="dataTables-example">
        <thead>
          <tr>
				    <th>Sr.</th>
            <th>Name</th>
					  <th>D.O.I</th>
					  <th>Phone</th>
				    <th>Client</th>
            <th>HR</th>
					  <th>D.O.J </th>
					  <th>Status</th>
					  <th>Recruiter</th>
					  <th>Center</th>
					  <th>Department</th>
          </tr>
        </thead>
				
				<tbody>
					<?php
						$query="SELECT * FROM hiring_tbl";
						$result=$conn->query($query);
						if($result->num_rows>0)
						{ 
							while($row = $result->fetch_assoc())
								{
								?>
                  <tr class="odd gradeX">
										<td><a href="ex1.php?id=<?php echo $row['id'] ;?>"><?php echo $row['id'] ;?>
                     </a></td>
                    <td><a href="ex1.php?id=<?php echo $row['id'] ;?>"><?php echo $row['name'];?>
                    </a></td>
                    <td><?php echo $row['doi'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td ><?php echo $row['client'];?></td>
										<td ><?php echo $row['hr'];?></td>
										<td ><?php echo $row['doj'];?></td>
										<td ><?php echo $row['status'];?></td>
										<td ><?php echo $row['recruiter'];?></td>
										<td ><?php echo $row['center'];?></td>
										<td ><?php echo $row['department'];?></td>
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
