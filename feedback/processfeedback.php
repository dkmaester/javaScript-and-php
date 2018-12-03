<?php
  //create short variable names
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $feedback = $_POST['feedback'];

  $toaddress = 'feedback@example.com';
  $subject = 'Feedback from web site';
  $mailcontent = 'Customer name: '.$name."\n"
                 .'Customer email: '.$email."\n"
                 ."Customer comments: \n".$feedback."\n";
  $fromaddress = 'From: webserver@example.com';
  //mail($toaddress, $subject, $mailcontent, $fromaddress);

 print($subject).'<br />'; 
 print nl2br($mailcontent); 
 print($fromaddress).'<br />';
?>
<html>
<head>
  <title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body style="line-height: 1.3em;">
<h1>Feedback submitted</h1>
<p>Your feedback has been sent.</p>

</body>
</html>
