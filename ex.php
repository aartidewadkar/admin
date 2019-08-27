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
          <li class="breadcrumb-item active">Hiring</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i>
            New Entry For Hiring</div>
          <div class="card-body">
            
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
				  <th>Full Name</th>
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
          
           <td><input type="text" required></td>
		   <td><input type="date" /></td>
           <td><input type="tel" name="phone" required></td>
           <td><input type="text" required /></td>
           <td><input type="text" required /></td>
           <td><input type="date" required /></td>
		   
		   <td><input type="text" required /></td>
           <td><input type="text" required /></td>
           <td>
		    <select class="browser-default cutstom-select" name="center" required><br>
            <option selected>Center</option>
            <option value="">Phase 1</option>
            <option value="">Phase 2</option>
            <option value="">Phase 3</option>
        </select></td>
           <td> <select class="browser-default cutstom-select" name="center" required><br>
                <option selected>Department</option>
                <option value="">BPO</option>
                <option value="">FNA/IT</option>
            </select></td>
        </tr>
    </tbody> 
               
				
              </table>
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
