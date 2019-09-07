<?php

  $recruiter_id= $_POST['recruiter_id'];
  $status=$_POST['status'];
  require_once("db_config.php");
  require_once("phpmailer/class.phpmailer.php");
  require_once("phpmailer/class.smtp.php");

  $query = "UPDATE `recruiter_tbl` SET status=".$status." where recruiter_id='".$recruiter_id."'";
    $result = $conn->query($query);
  if($result===TRUE) 
  {
    $q="SELECT * FROM recruiter_tbl where recruiter_id='".$recruiter_id."'";
  $r=$conn->query($q);
  if($r->num_rows>0)
  {  
    $rw = $r->fetch_assoc();
  }
  $mail = new PHPMailer;
  $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hrservices0303@gmail.com';                 // SMTP username
    $mail->Password = 'hrservices@911';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('hrservices0303@gmail.com', 'Genesis HR Services');
    $mail->addAddress($rw['email']); 

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Login details from Genesis HR Services';
    $mail->Body    = "<html>


<body>
Hello ".$rw['name'].",
<br><br>
This is to inform you about your successful registration on Genesis HR Services Portal. Now you will be able to access your profile using following login details.
<br><br>
<table border='1' cellpadding='10px' style='border-collapse: collapse;' bgcolor='white' align='center'>
    <tr style='background-color: #337ab7; color: #ffffff;'>
        <td colspan='2'><b>Login Details <b></td>
    </tr>
    <tr>
        <td><b>Candidate Name</b></td>
        <td>".$rw['name']."</td>
    </tr>
    <tr>
        <td><b>Candidate ID</b></td>
        <td>".$recruiter_id."</td>
    </tr>
    <tr>
        <td><b>User Name</b></td>
        <td>".$rw['email']."</td>
    </tr>
    <tr>
        <td><b>Password</b></td>
        <td>".$rw['password']."</td>
    </tr>
</table>
<br><br>
Thanks & Regards,
<br>
Genesis HR Services.
<hr>
<p style='text-align: center;color:gray;'>Please do not reply to this mail as this is an automated mail service.</p>
</body>
</html>";

    $mail->send();
    header('Location:recruiter_list.php');
    
    
  }  
  else 
  {
    $message = "Problem in updation. Try Again!";    
  }    
    
?>