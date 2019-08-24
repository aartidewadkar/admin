<?php
include 'head.php'
?>

<body id="page-top">

  <?php 
  include 'navbar.php'
  ?>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">SignUp Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	 
      <div class="modal-body">
	   <form action="code.php" method="POST">
		 <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" name="username" class="form-control" placeholder="Enter Your Full Name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"class="form-control" placeholder="Enter Email">
  </div>
   
   <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="email" name="phone" class="form-control" placeholder="Enter phone no">
  </div> 
  
  <div class="form-group">
    <select class="browser-default cutstom-select form-control" name="position" required><br>
        <option selected>Position</option>
        <option value="">Team Leader</option>
        <option value="">Recruiter</option>
        <option value="">Owner</option>
    </select>
  </div>
  
  <div class="form-group">
    <select class="browser-default cutstom-select form-control" name="center" required><br>
        <option selected>Center</option>
        <option value="">Phase 1</option>
        <option value="">Phase 2</option>
        <option value="">Phase 3</option>
    </select>
  </div>
  
  <div class="form-group">
    <select class="browser-default cutstom-select form-control" name="department" required><br>
        <option selected>Department</option>
        <option value="">BPO</option>
        <option value="">FNA/IT</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="conf-password" class="form-control" placeholder="Confirm Password">
  </div>
  
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" name="registerbtn" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal end -->

  
  
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
				Add New Entry
			</button>
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
