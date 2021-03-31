<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function MailSend($name,$email,$subject,$message){
	$libraries=dirname(__FILE__).'/../Libraries/PhpMailer/';

	include_once $libraries.'PhpMailer.php';
	include_once $libraries.'Exception.php';
	include_once $libraries.'SMTP.php';
	try {
		$mail = new PHPMailer(true);
		$mail->CharSet = 'UTF-8';
	    $mail->SMTPDebug = 0; // DEBUG Kapalı: 0, DEBUG Açık: 2
	    $mail->isSMTP();
	    $mail->Host       = 'smtp.yandex.com'; // Email sunucu adresi.
	    $mail->SMTPAuth   = true; // SMTP kullanici dogrulama kullan
	    $mail->Username   = 'php-egitimi@hbksoftware.com.tr'; 
	    $mail->Password   = 'phpegitimi1234.';
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
	    $mail->Port       = 587; 
	    $mail->setFrom('php-egitimi@hbksoftware.com.tr', 'Php Eğitim');
	    $mail->addAddress($email, $name); 
	    $mail->isHTML(true); 
	    $mail->Subject = $subject;
	    $mail->Body    = $message;
	    $mail->send();
	    return True;

    } catch (Exception $e) {

    	echo "Ops! Email iletilemedi. Hata: {$mail->ErrorInfo}";
    	return false;
	}
}