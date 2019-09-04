<?php
require_once("database.php");

if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
	$email=$_POST["email"];
	$contact=$_POST["contact"];
	$emergency_contact=$_POST["emergency_contact"];
	$dob=$_POST["dob"];
	$doj=$_POST["doj"];
	$local_address=$_POST["local_address"];
	$permanent_address=$_POST["permanent_address"];
	$gender=$_POST["gender"];
	$education=$_POST["education"];
	$position=$_POST["position"];
	$department=$_POST["department"];
	$center=$_POST["center"];
	$reporting_to=$_POST["reporting_to"];

	
	

    
		
		$query = "INSERT INTO `admin_profile`(`id`, `name`, `gender`, `dob`, `email`, `contact`, `doj`, `emergency_contact`, `local_address`, `permanant_address`, `education`, `position`, `center`, `department`, `reporting_to`)
		VALUES('".$id."','" . $name . "','" . $gender. "','" . $dob . "','" . $email. "','" . $contact . "','".$doj."','".$emergency_contact."','".$local_address."','".$permanent_address."','".$education."','".$position."','".$center."','".$department."','".$reporting_to."')";
        $result = $conn->query($query);
		if($result===TRUE) 
        {
			        	
            $message = "You have registered successfully!"; 
			header('location:profile1.php?message='.$message);
        } 
        else 
        {
            $message = "Problem in registration. Try Again!";   
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
	
<form action="" method="post">
		<div class="col-md-8 col-md-offset-2">
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
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">New User Registration</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post">
                                <fieldset>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                       Name
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <input class="form-control" style="width:100%;" required="required "name="name" type="text" autofocus>
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                       Email
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <input class="form-control" style="width:100%;" required="required" name="email" type="email" autofocus>
                                    </div>
                                     <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                      Contact
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <input class="form-control" style="width:100%;" pattern="\d{10}" required="required" name="contact" type="contact" autofocus>
                                    </div>
									   <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                         Emergency Contact
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <input class="form-control" pattern="\d{10}" style="width:100%;" required="required" name="emergency_contact" type="emergency contact" autofocus>
                                    </div>
									<div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                      Date of Birth
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <input class="form-control" style="width:100%;" required="required" name="dob" type="date" autofocus>
                                    </div>
									<div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                       Date Of Joining
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <input class="form-control" style="width:100%;" required="required" name="doj" type="date" autofocus>
                                    </div>
									<div class="form-group" style="vertical-align:top; width:24%;padding-left: 0px;display:inline-block;">                                       
                                       Local Address
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <textarea class="form-control" id="addr1" style="width:100%;" required="required" name="local_address" type="address" autofocus></textarea>
                                    </div>
                                    <div class="form-group" style="vertical-align:top; width:24%;padding-left: 0px;display:inline-block;">
                                       Permanent Address<br>
									   <h6><input type="checkbox" id="check">Same as local address</h6>
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <textarea class="form-control" id="addr2" style="width:100%;" required="required" name="permanent_address" type="permanent address" autofocus></textarea>
                                    </div>
									
									<div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                       Gender
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <select class="form-control" name="gender"required="required">
											<option value="">Select Gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
                                    </div>
                                                                         
                                   	
								   
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                       Education
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <select class="form-control"  name="education" required="required">
											<option value="">Select Education</option>
                                        <option value="Not Pursuing Graduation">Not Pursuing Graduation</option>
<option value="Compulsory Education">Compulsory Education</option>
<option value="Diploma">Diploma</option>
<option value="B.A">B.E</option>
<option value="B.Arch">B.Arch</option>
<option value="BCA">BCA</option>
<option value="B.B.A">B.B.A</option>
<option value="B.Com">B.Com</option>
<option value="B.Ed">B.Ed</option>
<option value="BDS">BDS</option>

										</select>
                                    </div> 
                                      
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                       Position
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <input class="form-control" style="width:100%;" required="required" name="position" type="text" autofocus>
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                       Departmant
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <select class="form-control" name="department"required="required">
											<option value="">Select Department</option>
											<option value="IT Recruitment">IT Recruitment</option>
											<option value="Financial Recruitment">Financial Recruitment</option>
											<option value="BPO Recruitment">BPO Recruitment</option>
											<option value="Admin">Admin</option>
										</select>
                                    </div>  
                                    
									<div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                         Center
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <select class="form-control" name="center" required="required">
											<option value="">Select Designation</option>
											<option value="Intern">Intern</option>
											<option value="Jr. Recruiter">Jr. Recruiter</option>
											<option value="Recruiter">Recruiter</option>
											<option value="Sr. Recruiter">Sr. Recruiter</option>
											<option value="Team Lead / Recruitment">Team Lead / Recruitment</option>
											<option value="Recruitment Manager">Recruitment Manager</option>
											
										</select>
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                         Reporting To
                                    </div>
                                    <div class="form-group" style="width:24%;padding-left: 0px;display:inline-block;">
                                        <select class="form-control" name="reporting_to" required="required">
											<option value="">Select </option>
											<option value="Team Leader">Team Leader</option>
											<option value="Manager">Manager</option>
											<option value="Sr. Manager">Sr. Manager</option>
										</select>
                                    </div>
                                   
                                    <!-- Change this to a button or input when using this as a form -->
                                    <div style="float:right;">
									<input type="submit" style="width:200px;" name="submit" class="btn btn-lg btn-success btn-block" value="Register"/>
									</div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
				</div>
	</form>
	</div>
	
</div>
<?php
include 'footer.php';
?>
</body>
</html>

<script>
$(document).ready(function(){
	
	$('#check').click(function() { 
		if ($(this).is(':checked')) 
		{ 
			$("#addr2").val($("#addr1").val());
		} 
		else
		{
			$("#addr2").val("");
		}
	});
 })
</script>