<?php 

// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

// Create connection
$connection = mysqli_connect($localhost, $root, " ",$adminpanel);
 
 if(isset($_POST['registerbtn']))
 {
	 $username=$_POST['username'];
	 $email=$_POST['email'];
	 $phone=$_POST['phone'];
	 $position=$_POST['position'];
	 $center=$_POST['center'];
	 $department=$_POST['department'];
	 $password=$_POST['password'];
	 $conf-password=$_POST['conf-password'];
	 
	 if($password == $conf-password)
	 {
		  $query = "INSERT INTO register(username, email, phone, position, center, department, password)
		VALUES ('$username', '$email', '$phone', '$position', ' $center', '$department', '$password')";

		$query_run= mysqli_query($connection,$query);
		
		if($query_run)
		{
			$_SESSION["Success"] = "Admin Profile Added";
			header("Location:register.php");
		}
		else
		{
			$_SESSION["Status"] = "Admin Profile Not Added";
			header("Location:register.php");
		}
		
		else
		{
			$_SESSION["Status"] = "password and Confirm password Does Not Match";
			header("Location:register.php");
		}
	 }
	 
	
 }
?>