<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Email: $email \n Message: $message";
$recipient = "info@coimbatorestudy.com";
//$recipient = "dotlinewebindia@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo '<script language="javascript">alert("Thank you for visiting us. We will get back to you shortly ")</script>';
echo '<script language="javascript">window.location.href="index.php"</script>';
echo 'Page Re-directing <a href="index.html">Click Here</a> to go back to the home page';
?>