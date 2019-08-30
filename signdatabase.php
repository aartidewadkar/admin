<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiring";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
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
	$reporting_to=$_POST["reporting_to"];
	
	 echo "connected successfully";
	 
		$query = "INSERT INTO `admin_profile`(`recruiter_id`, `name`, `gender`, `dob`, `email`, `contact`, `doj`, `emergency_contact`, `local_address`, `permanant_address`, `education`, `position`, `department`, `reporting_to`, )
		VALUES('".$recruiter_id."','" . $name . "','" . $gender. "','" . $dob . "','" . $email. "','" . $contact . "','".$doj."','".$emergency_contact."','".$local_address."','".$permanent_address."','".$education."','".$position."','".$department."','".$reporting_to."')";
		
		
		  if ($conn->query($sql) === TRUE) {
    echo "Registration successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

header('Location: profile1.php')


?>