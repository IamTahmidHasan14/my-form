<?php

	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$repassword=$_POST["re_password"];
		// $gender=$_POST["gender"];


		if($name=="")
		{
			$nameError="* Name field must be filled";
		}

		if($email=="")
		{
			$mailError="* Email field must be filled";
		}

		if(empty($password))
		{
			$passError="* Password field must be filled";
		}

		if($password!=$repassword)
		{
			$matchError="* Pass and Conf pass did not match";
		}


		// echo "Name=".$name.",Email=".$email.",Password=".$password.",Re-Password=".$repassword;
	}

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
</head>
<body>
	<form action="" method="POST">

		Name: <input type="text" name="name" value="<?php echo isset($name)?$name:""; ?>"> 
		<span style="color:red"><?php echo isset($nameError)?$nameError:"" ;?> </span><br>
		
		Email: <input type="email" name="email" value="<?php echo isset($email)?$email:""; ?>"> 
		<span style="color:red"><?php echo isset($mailError)?$mailError:"" ;?> </span><br>
		
		Password: <input type="password" name="password" value="<?php echo isset($password)?$password:""; ?>"> <span style="color:red"><?php echo isset($passError)?$passError:"" ;?> </span><br>
		
		Repeat Password:<input type="password" name="re_password"> 
		<span style="color:red"><?php echo isset($matchError)?$matchError:"" ;?> </span><br>
		
		Male: <input type="radio" name="gender" value="male"> <br>
		Female: <input type="radio" name="gender" value="female"> <br>
		
		<select name="semester">
			<option value="1st">1st</option>
			<option value="2nd">2nd</option>
			<option value="8th">8th</option>
		</select>
		<br>

		<input type="submit" name="submit">
	</form>
</body>
</html>