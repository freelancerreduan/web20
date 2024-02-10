










<?php



include('smtp/PHPMailerAutoload.php');
if($_SERVER['REQUEST_METHOD']){
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];
	// $to = "freelancerreduan100@gmail.com";
}





echo smtp_mailer("freelancerreduan100@gmail.com","$subject","$email","$message");
function smtp_mailer($to,$subject,$email, $message){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "freelancerreduan100@gmail.com";
	$mail->Password = "fznaomvzdisrkcka";
	$mail->SetFrom("freelancerreduan100@gmail.com");
	$mail->Subject = $email;
	$mail->Subject = $subject;
	$mail->Body =$message;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>