<?php

// Replace this with your own email address
$siteOwnersEmail = 'contato@fernandoalencar.com';


if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));

   // Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Por favor, insira seu nome.";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Por favor insira um endereço de e-mail válido.";
	}
	// Check Message
	if (strlen($contact_message) < 15) {
		$error['message'] = "Por favor insira a sua mensagem. Deve ter pelo menos 15 caracteres.";
	}
   // Subject
	if ($subject == '') { $subject = "Mensagem de Contato - Portfolio"; }


   // Set Message
   $message = "Nome Dest: " . $name . "<br />";
   $message .= "Email Dest: " . $email . "<br />";
   $message .= "Mensagem: <br />";
   $message .= $contact_message;
   $message .= "<br /> ----- <br /><br /> Este e-mail foi enviado do seu site.<br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";	
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";

   	/*
   if (!$error) {

      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) { echo "OK"; }
      else { echo "Algo deu errado. Por favor, tente novamente."; }
		
	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		
		echo $response;

	} # end if - there was a validation error
	*/
}

?>