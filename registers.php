<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiring_portal";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
  $name = $_POST["name"];
  $doi= $_POST["doi"];
  $phone = $_POST["phone"];
  $client= $_POST["client"];
  $hr= $_POST["hr"];
  $doj= $_POST["doj"];
  $status= $_POST["status"];
  $recruiter= $_POST["recruiter"];
  $center= $_POST["center"];
  $department= $_POST["department"];
  
date_default_timezone_set("Asia/Kolkata");
    $created_on=date("Y-m-d h:i:sa");
    $modified_on=date("Y-m-d h:i:sa");
   
    

  echo "connected successfully";

  $sql = "INSERT INTO hiring_tbl(name,doi,phone,client,hr,doj,status,recruiter,center,department,created_on,modified_on) VALUES(
  '$name','$doi','$phone','$client','$hr','$doj','$status','$recruiter','$center','$department', '$created_on','$modified_on')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

header('Location: hiring.php')


?>






