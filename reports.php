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
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Reports
          <div class="card-body">
            <div class="table-responsive">
			 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
				   <th>Sr.</th>
                    <th>Name</th>
					<th>D.O.I</th>
					<th>Phone</th>
				    <th>Client</th>
                    <th>HR</th>
					<th>D.O.J</th>
					<th>Status</th>
					<th>Location</th>
					<th>Recruiter</th>
					<th>Center</th>
					<th>Department</th>
                  </tr>
                </thead>
				
				<tbody>
                  <tr>
                    <td>1</td>
					<td>Pranali</td>
				    <td>12 dec 17</td>
                    <td>987656376</td>
					<td>Wipro</td>
					<td>Rahul</td>
					<td>25 jan 18</td>
					<td>Declined</td>
					<td>Pune</td>
					<td>Pranali</td>
					<td>Phase 1</td>
					<td>FNA/BPO</td>
                  </tr>
                </tbody>
				
				<tbody>
                  <tr>
                    <td>2</td>
					<td>Pranali</td>
				    <td>12 dec 17</td>
                    <td>987656376</td>
					<td>Wipro</td>
					<td>Rahul</td>
					<td>25 jan 18</td>
					<td>Declined</td>
					<td>Pune</td>
					<td>Pranali</td>
					<td>Phase 1</td>
					<td>FNA/BPO</td>
                  </tr>
                </tbody>
			 </table>
		    </div>
             
            </div>
         </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
