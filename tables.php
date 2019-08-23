<!DOCTYPE html>
<html lang="en">
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
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Sr.</th>
				  <th>Name</th>
				  <th>D.O.I</th>
                    <th>Phone No</th>
                    <th>Client</th>
                    <th>HR</th>
					<th>D.O.J</th>
					<th>Status</th>
					<th>Recruiter</th>
					<th>Center</th>
					<th>Department</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>abc</td>
                    <td>1 jan 2018</td>
                    <td>+91 986542365</td>
                    <td>Infoysis</td>
                    <td>Pranali</td>
					 <td>24 feb 2019</td>
					  <td>Deciled</td>
					   <td>Rahul</td>
					    <td>Phase 1</td>
						 <td>BPO</td>
                  </tr>
                  <tr>
                 
                </tbody>
				
				 <tbody>
                  <tr>
                    <td>1</td>
                    <td>abc</td>
                    <td>1 jan 2018</td>
                    <td>+91 986542365</td>
                    <td>Infoysis</td>
                    <td>Pranali</td>
					 <td>24 feb 2019</td>
					  <td>Deciled</td>
					   <td>Rahul</td>
					    <td>Phase 1</td>
						 <td>BPO</td>
                  </tr>
                  <tr>
                 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Genesis HR Services 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

<?php 
include 'script.php'
?>
</body>

</html>
