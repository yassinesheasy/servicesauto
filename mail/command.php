<?php

// Check for empty fields
/*
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

  http_response_code(500);

  exit();

}

*/

//$name = strip_tags(htmlspecialchars($_POST['name']));

$email = strip_tags(htmlspecialchars($_POST['email']));

$vehiclerestitution = strip_tags(htmlspecialchars($_POST['vehiclerestitution']));

$selectedservice = strip_tags(htmlspecialchars($_POST['selectedservice']));
//$selecteddateservice = strip_tags(htmlspecialchars($_POST['dateservice']));
//$selectedtimeservice = strip_tags(htmlspecialchars($_POST['timeservice']));



// Create the email and send the message

$to = "haliloho87@gmail.com"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.

$subject = "Website Contact Form:";

$body = "You have received a new command .\n\n"."Return of the vehicle : $vehiclerestitution \n\nSelected service : $selectedservice ";

$header = "From: haliloho87@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

$header .= "Reply-To: $email";	



if (!mail($to, $subject, $body, $header)) {
    http_response_code(500);
}


