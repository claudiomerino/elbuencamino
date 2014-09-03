<?php  
  
// check for form submission - if it doesn't exist then send back to contact form  
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
    header("Location: index.php"); exit;  
}  
      
// get the posted data  
$name = $_POST["contact_name"];  
$email_address = $_POST["contact_email"];  
$message = $_POST["contact_message"];  
      
// check that a name was entered  
if (empty ($name))  
    $error = "No pudimos enviar tu mensaje. Falta el nombre";  
// check that an email address was entered  
elseif (empty ($email_address))   
    $error = "No pudimos enviar tu mensaje. Falta el correo";  
// check that a message was entered  
elseif (empty ($message))  
    $error = "No pudimos enviar tu mensaje. No nos vas a decir nada?";  
          
// check if an error was found - if there was, send the user back to the form  
if (isset($error)) {  
    header("Location: index.php?e=".urlencode($error)); exit;  
}  
          
// write the email content  
$email_content = "Name: $name\n";  
$email_content .= "Email Address: $email_address\n";  
$email_content .= "Message:\n\n$message";  
      
// send the email  
mail ("claudio@elbuencamino.com", "Contacto desde elbuencamino.com", $email_content);  
      
// send the user back to the form  
header("Location: index.php?s=".urlencode("gracias, tu mensaje ya nos llegó. Hablamos!")); exit;  
  
?>