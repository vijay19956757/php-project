<?php

	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$subject =$_POST["Subject"];
	$content = $_POST["Message"];

	$toEmail ="info@coracle.in ";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
		$name="";
		$email="";
		$subject="";
		$phone="";
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	    
	echo "<script type='text/javascript'>alert('$message');window.location.assign('http://www.coracle.in/');</script>";

	}


?>