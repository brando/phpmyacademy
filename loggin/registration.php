<?php
require 'connect.inc.php';
require 'core.inc.php';

if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['sex']) && isset($_POST['age']) && isset($_POST['email']))
{
	$name=mysql_real_escape_string($_POST['name']);
	$surname=mysql_real_escape_string($_POST['surname']);
	$password=mysql_real_escape_string($_POST['password']);
	$password_again=mysql_real_escape_string($_POST['password_again']);
	$sex=mysql_real_escape_string($_POST['sex']);
	$age=mysql_real_escape_string($_POST['age']);
	$email=mysql_real_escape_string($_POST['email']);
	
	if(!empty($name) && !empty($surname) && !empty($password) && !empty($password_again) && !empty($sex) && !empty($age) && !empty($email))
	{
		if($password==$password_again)
		{
			$query_validation=mysql_query("SELECT `name` FROM `pouzivatelia` WHERE `name`='$name'");
			
			if(mysql_num_rows($query_validation)==1)
			{
				echo $name.' already exist. Please select another one';
			}else
			{
				$password_hash=md5($password);
				$query="INSERT INTO `pouzivatelia` (`id`, `name`, `surname`, `password`, `sex`, `age`, `email`) VALUES (NULL, '$name', '$surname', '$password_hash', '$sex', '$age', '$email')";
				if(mysql_query($query))
				{
					header('Location:successful.php');
				}
				else
					echo 'Sorry, but roght now there is problem with database';
			}
		}else
			echo 'Passwords are not equeal';
	}else
		echo 'All fields are required!!!!';
}
?>

<form action="registration.php" method="POST">
	Name:<br><input type="text" name="name" value="<?php if(isset($name))echo $name;?>" maxlength="30"></input><br><br>
	Surname:<br><input type="text" name="surname" value="<?php if(isset($surname))echo $surname?>" maxlength="30"></input><br><br>
	Password:<br><input type="password" name="password" ></input><br><br>
	Password again:<br><input type="password" name="password_again"></input><br><br>
	Sex:<br><input type="text" name="sex" value="<?php if(isset($sex))echo $sex?>" maxlength="6"></input><br><br>
	Age:<br><input type="text" name="age" value="<?php if(isset($age))echo $age?>" maxlength="3"></input><br><br>
	Email:<br><input type="text" name="email" value="<?php if(isset($email)) echo $email?>" maxlength="5"></input><br><br>
	<input type="submit" value="POTVRDIT"></input>
</form>