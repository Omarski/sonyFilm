<?
require_once('phpmailer.php');
$mail = new PHPMailer(); // defaults to using php "mail()"

 //Email information
  $email = $_REQUEST['email'];
  $name  = $_REQUEST['contact'];
  $monthPayment  = $_REQUEST['monthPayment'];
  $monthRev      = $_REQUEST['monthRev'];
  $monthNet      = $_REQUEST['monthNet'];
  $yearlyNet     = $_REQUEST['yearlyNet'];
  $userInput     = $_REQUEST['userInput'];

$vars = array("monthPayment" => $monthPayment, "monthRev" => $monthRev, "monthNet" => $monthNet, "yearlyNet" => $yearlyNet,  "userInput" => $userInput);

$file = file_get_contents('email.html');
$file = strtr($file, $vars);
$body = $file;

//$mail->AddReplyTo($email,$name);
//remove
$mail->AddReplyTo("oamer@hotmail.com","Omar CC");
$mail->AddReplyTo("katherinec@devicepharm.com","katherine Wiseman");
$mail->AddBCC('katherinec@devicepharm.com','katherine Wiseman');
$mail->AddBCC('oamer@hotmail.com','Omar CC');
$mail->SetFrom('info@biolase.net', 'Biolase');
 
//$mail->AddReplyTo("name@yourdomain.com","First Last");
//remove
$address = $email;
$mail->AddAddress($email, $name);
 
$mail->Subject    = "Your WaterLase iPlus 2.0 report";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";  
$mail->MsgHTML($body);
 
if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}
?> 