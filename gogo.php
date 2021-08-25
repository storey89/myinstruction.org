<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$mailTo = "info@myinstruction.org";
	$subject = "Contact Form";
	$formcontent="From: ".$name.".\n\n'.$message";
	$mailheader = "From: ".$email;
	mail($mailTo, $subject, $formcontent, $mailheader);
	header("Location: index.php?mailsend");
}
?>