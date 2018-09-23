<?php


$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$to="info@dnddentistry.com,darshakshah1988@gmail.com";
$subject="Appointment From Website | D&D Dentistry ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@dnddentistry.com>' . "\r\n";
$headers .= 'Cc: info@dnddentistry.com' . "\r\n";

$message = "
<html>
<head>
<title>Appointment</title>
</head>
<body>
<p>Below Details Are Provided by Client:</p>
<table style='width:300px;height:auto'>
<tr>
<th>Name</th>
<th>Contact</th>
<th>Email</th>
<th>Message</th>
</tr>
<tr>
<td>".$name."</td>
<td>".$contact."</td>
<td>".$email."</td>
<td>".$message."</td>
</tr>
</table>
</body>
</html>
";


mail($to,$subject,$message,$headers);

header("location:index.html");
?>