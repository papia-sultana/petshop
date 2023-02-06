<?php

	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con){
		
		echo'Not established'
	}
	if(!mysqli_select_db($con,'tropic_jungle'))

	{
		echo'DB not selected';
	}
	
	$Firstname = $_POST['firstname'];
	$Lastname = $_POST['lastname'];
	$Email = $_POST['email'];
	$Messages = $_POST['messages'];
	
	
	
	$sql = "INSERT INTO contact (Firstname,Lastname,Email,Messages) VALUES('$Firstname','$Lastname','$Email','$Messages')";
	
	
	if(!mysqli_query($con,$sql))
	{
		echo'not inserted';
	}
	
	else{
		echo'inserted';
	}
	
	
	header("refresh:2; url=contact.html");
	
	
	
	
?>


