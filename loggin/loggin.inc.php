<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	if(!empty($username)&&!empty($password))
	{
		$query="SELECT * FROM `pouzivatelia` WHERE `name`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."'";
		if($query_run=mysql_query($query))
		{
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0)
			{
				echo 'invalid name or password';
			}else if ($query_num_rows==1)
			{
				$user_id=mysql_result($query_run, 0, 'id');
				$user_name=mysql_result($query_run, 0, 'name');
				$user_surname=mysql_result($query_run, 0, 'surname');
				$_SESSION['user_name']=$user_name;
				$_SESSION['user_surname']=$user_surname;
				$_SESSION['user_id']=$user_id;
				header('Location:index.php');
			}
		}
	}else
	{
		echo 'username and password is required';
	}
}
?>
<form action=<?php echo $current_file?> method='POST'>
	Username:<input type="text" name="username">Password:<input type="password" name="password">
			<input type='submit' value='Log in'>
</form>