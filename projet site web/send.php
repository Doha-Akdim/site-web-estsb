<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$email_form='webdesing@gmail.com';
$email_subject='new form submission';
$email_body='User  name:$name.\n',
             'User email:$visitor_email.\n',
             'User message:$message.\n';
 $to = 'example@gmail.com';
 $headers= 'form: $email_from\r\n';
 $geaders = 'Reply_to:$visitor_email \r\n';
 mail($to,$email_subject,$email_body,$headers);
 header('location:index(1).html');
 ?>            