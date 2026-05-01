<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$course = $_POST['course'];
$location = $_POST['location'];
$comments = $_POST['comments'];
$formcontent=" From: $name \n Phone: $phone \n Email: $email \n Course: $course \n Location: $location \n Comments: $comments";
$recipient = "info@coimbatorestudy.com";
//$recipient = "dotlinewebindia@gmail.com";
$subject = "Coimbatore Study Enquiry Form";
$mailheader = "From: $name \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo '<script language="javascript">alert("Thank you for visiting us. We will get back to you shortly ")</script>';
echo '<script language="javascript">window.location.href="index.php"</script>';
echo 'Page Re-directing <a href="index.html">Click Here</a> to go back to the home page';
?>