<?php

	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$repassword=$_POST["re_password"];
	$gender=$_POST["gender"];

	echo "Name=".$name.",Email=".$email.",Password=".$password.",Re-Password=".$repassword;
?>