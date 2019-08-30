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
  

  echo "connected successfully";

  $sql = "INSERT INTO hire(name,doi,phone,client,hr,doj,status,recruiter,center,department) VALUES('$name','$doi','$phone','$client','$hr','$doj','$status','$recruiter','$center','department')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

header('Location: hiring.php')


?>






