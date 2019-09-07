<?php
require_once("db_config.php");
if(isset($_POST["login_submit"]))
{
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    
    $query="select recruiter_id,status from recruiter_tbl where (email='".$uname."' or recruiter_id='".$uname."') and password='".$password."'";
    $result=$conn->query($query);
    if($result->num_rows>0)
    { 
        $row = $result->fetch_assoc(); 
        
        if($row['status']==0)
        {
            $message = "You are not verified user.";  
            unset($_POST);  
        }
        else
        {
            $recruiter_id= $row["recruiter_id"]; 
            session_start(); 
            $_SESSION['user_id']=$recruiter_id;
            header('location:dashboard.php');
        }
    }
    else 
    {
        $q="select admin_id from admin_tbl where email='".$uname."'  and password='".$password."'";
        $r=$conn->query($q);
        if($r->num_rows>0)
        {    
            $rw = $r->fetch_assoc();
            session_start(); 
            $_SESSION['user_id']=$rw['admin_id'];
            header('location:dashboard.php');
        }   
        $message = "Please enter correct username and password";  
        unset($_POST);  
    }
    
}
?>


<!DOCTYPE HTML>
<html>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  #message{
        text-align: center;
        padding: 10px;
        border:1px solid #337ab7;
        margin-bottom: 10px;
    }
 </style>
<?php
include 'head.php';
?>
<body style="background-color:#f8f8f8;">
<?php


?>


<div class="container" >
     <div class="single">  

        <div class="col-md-4 col-md-offset-4">
        <?php 
        if(isset($message))
        {
    ?>
    <div class="message"> 
    <?php 
        echo $message; 
    ?>
    </div>
    <?php
        }
    ?>
                    <div class="container">
                        <div class="card card-login mx-auto mt-5">
                            <h3 class="card-header">Login</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="" method="post">
                                <div class="form-group">
                                    <div class="form-group" style="width:100%;padding-left: 0px;">
                                        <input class="form-control" style="width:100%;" placeholder="E-mail or ID" name="uname" required="required" type="text" autofocus >
                                    </div>
                                    <div class="form-group" style="width:100%;padding-left: 0px;">
                                        <input class="form-control" style="width:100%;" placeholder="Password" name="password" required="required" type="password" value="">
                                    </div>
                                        
                                    
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" name="login_submit" class="btn btn-lg btn-success btn-block" value="Login"/>
                                    <br>
                                    <p align="center"><a href="newuser.php">New User</a></p>
                                    <p align="center"><a href="rforgot.php">Did you forget your password?</a></p>
                                        
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>