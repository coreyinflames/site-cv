<?php
if(isset($_POST['email'])){
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "joao.netto@linkapi.com";
    $email_subject = "Contato johngrandson.github.io";
 
    function died($error) {
        // your error code can go here
        echo "Desculpe mas existem erros no formulário enviado. ";
        echo "Os erros são.<br /><br />";
        echo $error."<br /><br />";
        echo "Volte e conserte.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('Desculpe mas existem erros no formulário enviado.');       
    }
 
     
 
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'O email não é válido.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'O nome que você entrou é inválido.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'O texto não é válido.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Email enviado do formulário PERSONAL-CV.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Nome: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Assunto: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<p>Obrigado, entrarei em contato assim que possível.</p>
 
<?php
 
}
?>