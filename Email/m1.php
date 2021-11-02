<?php
// Text Email send

$to = "shamimahmed4113@gmail.com";
$from = "test@gmail.com";
$subject = "How is life";
$body = "Hello \n How are you?";
$headers = "From: {from}\r\n";

mail($to, $subject, $body, $headers);