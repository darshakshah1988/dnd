<?php

$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$date = Date("d-M-Y");
$mes = $_POST["message"];

$to = "info@dnddentistry.com,darshakshah1988@gmail.com,dnddentistry@gmail.com";
$subject = "Appointment on ".$date;
//$body = 'name='.$name.'Contact ='.$contact.'date='.$date.'';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <dnddentistry@gmail.com>' . "\r\n";
$headers .= 'Cc: info@dnddentistry.com' . "\r\n";

$message2 = "
<html>
<head>
<title>D&D Appointment</title>
</head>
<body>
<p>Appointment request from website.</p>
<table>
<tr>
<th>Name</th>
<th>".$name."</th>
</tr>
<tr>
<td>Email</td>
<td>".$email."</td>
</tr>
<tr>
<td>Contact</td>
<td>".$contact."</td>
</tr>
<tr>
<td>Message</td>
<td>".$mes."</td>
</tr>
</table>
</body>
</html>
";

mail($to,$subject,$message2,$headers);
//mail($email,$subject2,$message,$headers);

$subject2="Thank you for requesting on D&D Dentistry";
/*$body2="Thank you for your booking. We will update you regarding status of your booking to D&D Dentistry.";*/


$message = "
<html>
<head>
<title>D&D Appointment</title>
</head>
<body>
<p>Thank you for your appointment request !!!</p>
<table>
<tr>
<th>Name</th>
<th>".$name."</th>
</tr>
<tr>
<td>Email</td>
<td>".$email."</td>
</tr>
<tr>
<td>Contact</td>
<td>".$contact."</td>
</tr>
<tr>
<td>Message</td>
<td>".$mes."</td>
</tr>
</table>
</body>
</html>
";


mail($email,$subject2,$message,$headers);
//mail($to,$subject,$message,$headers);

header('location:index.html');

?>