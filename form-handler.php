<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from = 'info@gmssssbehal.com';

$email_subject = 'New Query';

$email_body = "Username : $name.\n".
                "User Email : $visitor_email.\n".
                "Subject : $subject.\n".
                "User Message : $message.\n";

$to = 'nitsh792@gmail.com'

$headers = "From : $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")




?>