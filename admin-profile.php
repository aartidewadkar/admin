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
          <li class="breadcrumb-item active">Admin Profile</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
				Add New Admin Profile
			</button>
          <div class="card-body">
		  
		  <?php
		  if(isset($_SESSION["Success"]) && $_SESSION["Success"]!="")
		  {
			  echo $_SESSION["Success"];
			  unset($_SESSION["Success"]);
		  }
		  ?>
            <div class="table-responsive">
			 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
				   <th>Sr.</th>
                    <th>Name</th>
				    <th>Email Id</th>
                    <th>Phone No</th>
					<th>Position</th>
					<th>Center</th>
					<th>Department</th>
                  </tr>
                </thead>
				
				<tbody>
                  <tr>
                    <td>1</td>
					<td>Pranali</td>
				    <td>abc@gmail.com</td>
                    <td>987656376</td>
					<td>Team Leader</td>
					<td>Phase 1</td>
					<td>BPO</td>
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
