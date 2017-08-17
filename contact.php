<?php



if(!$_POST) exit;



function tommus_email_validate($email) { return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email); }


$name = $_POST['name']; $email = $_POST['email']; $comments = $_POST['comments'];



if(trim($name) == '') {

	exit('<div class="error_message">Entre com seu nome.</div>');

} else if(trim($name) == 'Your Name') {

	exit('<div class="error_message">Entre com seu nome.</div>');

} else if(trim($email) == 'Email') {

	exit('<div class="error_message">Entre com um email válido.</div>');

} else if(!tommus_email_validate($email)) {

	exit('<div class="error_message">Você digitou um email inválido.</div>');

} else if(trim($comments) == 'Tell us what you think!') {

	exit('<div class="error_message">Digite sua mensagem.</div>');

} else if(trim($comments) == '') {

	exit('<div class="error_message">Digite sua mensagem.</div>');
	
} else if( strpos($comments, 'href') !== false ) {

	exit('<div class="error_message">Please leave links as plain text.</div>');
	
} else if( strpos($comments, '[url') !== false ) {

	exit('<div class="error_message">Please leave links as plain text.</div>');

} if(get_magic_quotes_gpc()) { $comments = stripslashes($comments); }



$address = 'joaonettopb@hotmail.com';

$site_name = 'JN Dev - Personal CV';

$e_subject = 'Mensagem de:' . $name . '.';

$e_body = "Mensagem enviada de JOÃO NETTO PERSONAL - CV." . "\r\n" . "\r\n";

$e_content = "\"$comments\"" . "\r\n" . "\r\n";

$e_reply = "Email de $name : email, $email";



$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );



$headers = "From: $site_name" . "\r\n";

$headers .= "Reply-To: $email" . "\r\n";

$headers .= "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type: text/plain; charset=utf-8" . "\r\n";

$headers .= "Content-Transfer-Encoding: quoted-printable" . "\r\n";



if(mail($address, $e_subject, $msg, $headers)) { echo "<fieldset><div id='success_page'><h4>Email Enviado!</h4></div></fieldset>"; }