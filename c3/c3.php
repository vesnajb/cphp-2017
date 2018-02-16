<?php

	$fname = trim($_POST['fname'],'');
	$lname = trim($_POST['lname'],'');
	$email = trim($_POST['email'],'');
	$psw1 = trim($_POST['psw1'],'');
	$psw2 = trim($_POST['psw2'],'');
	

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		} else {
 	 echo("email is not a valid email address");
	};

	if($psw1 === $psw2){
		echo ('Submitted');
	}else{
		echo("password is not the same");
	};

?>