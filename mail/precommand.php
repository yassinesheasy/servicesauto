<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$selectservice = strip_tags(htmlspecialchars($_POST['selectservice']));
$daterdv = strip_tags(htmlspecialchars($_POST['daterdv']));
$addressfrom = strip_tags(htmlspecialchars($_POST['inputAddressFrom']));
$cityfrom = strip_tags(htmlspecialchars($_POST['inputCityFrom']));
$statefrom = strip_tags(htmlspecialchars($_POST['inputStateFrom']));
$addressto = strip_tags(htmlspecialchars($_POST['inputAddressTo']));
$cityto = strip_tags(htmlspecialchars($_POST['inputCityTo']));
$stateto = strip_tags(htmlspecialchars($_POST['inputStateTo']));
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = "contact@servicesauto.be"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "une nouvelle precommande du service: $selectservice";
$body = "Les details de la precommande sont: \n\nLe service: $selectservice\n\nLa date: $daterdv\n\nLe lieu de depart: $inputAddressFrom code postal: $inputCityFrom ville: $inputStateFrom\n\nLe lieu d arrive: $inputAddressTo code postal: $inputCityTo ville: $inputStateTo\n\nLe nom: $name\n\nEmail: $email\n\nTelephone: $phone\n\nLe message:\n$message";
$header = "From: contact@servicesauto.be\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
