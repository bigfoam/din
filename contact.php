<?php
$to      = 'service@dinneract.com, dinneract2015@gmail.com';
$subject = $_POST["subject"];
$name	 = $_POST["name"];
$userEmail = $_POST["email"];
$content = $_POST["message"];

$message = "" . $content;
$headers = 'From: noreply@dinneract.com' . "\r\n" .
   // 'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$status = mail($to, $subject, $message, $headers);

if(!$status) {
	$error = error_get_last();
	echo $error["message"];	
	//echo "failed";
} else {
	
	//confirmation email
	$subject = "Dinneract Subscription Confirmation";
	$headers = 'From: service@dinneract.com' . "\r\n" .
		'Reply-To: service@dinneract.com' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n".
	   	//'Content-type: text/html; charset=utf-8' . "\r\n".
	    'X-Mailer: PHP/' . phpversion();
	
	$userMsg = "";
	
	$status = mail($userEmail, $subject, $userMsg, $headers);
	
	
	if($status) {
		echo "success";
	} else {
		$error = error_get_last();
		echo $error["message"];	
		//echo "failed";
	}
	
}

?> 
