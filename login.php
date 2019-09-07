<!DOCTYPE html>
<html lang="en">

<?php
require_once("db_config.php");
if(isset($_POST["login_submit"]))
{
  $uname=$_POST['uname'];
  $password=$_POST['password'];
  
  $query=" SELECT *FROM recruiter_tbl WHERE recruiter_id='$uname' &&  password='$password'";

  $data=mysqli_query($conn, $query);
  $total=mysqli_num_rows($data);
  if($total==1)
  {
    echo" Login successful";
    header('location:dashboard.php');
  }
  else
  {
     $message = "Please enter correct username and password";  
        unset($_POST);  
  }




  // $query="select recruiter_id,status from recruiter_tbl where (email='".$uname."' or recruiter_id='".$uname."') and password='".$password."'";



  //   $result=$conn->query($query);
  // if($result->num_rows>0)
  //   { 
  //       $row = $result->fetch_assoc(); 
        
  //       if($row['status']==0)
  //   {
  //     $message = "You are not verified user.";  
  //     unset($_POST);  
  //   }
  //   else
  //   {
  //     $recruiter_id= $row["recruiter_id"]; 
  //     session_start(); 
  //     $_SESSION['user_id']=$recruiter_id;
  //     header('location:dashboard.php');
  //   }
  // }
  // else 
  //   {
  //   $q="select admin_id from admin_tbl where email='".$uname."'  and password='".$password."'";
  //   $r=$conn->query($q);
  //   if($r->num_rows>0)
  //   {  
  //     $rw = $r->fetch_assoc();
  //     session_start(); 
  //     $_SESSION['user_id']=$rw['admin_id'];
  //     header('location:dashboard.php');
  //       } 
  //       $message = "Please enter correct username and password";  
  //       unset($_POST);  
  //   }
  
}
?>


<?php 
include 'head.php'
?>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form role="form" action="" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="uname" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword"  name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <!-- <a class="btn btn-primary btn-block"  name="login_submit" href="dashboard.php">Login</a> -->
           <input type="submit" name="login_submit" class="btn btn-lg btn-success btn-block" value="Login"/>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <?php 
 include 'script.php'
  ?>

</body>

</html>
