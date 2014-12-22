<?php
if(@mysql_connect('localhost','root','37949647') && mysql_select_db('phpmyacademy'))	//@ zmanena ze nevitlaci cely popis kde sa nachadza chyba
{
	if(isset($_GET['sex'])&&!empty($_GET['sex']))
	{
		$sex=strtolower($_GET['sex']);
		if($sex=='male' || $sex=='female')
		{
			if($query=mysql_query("SELECT `sex`,`name` FROM `pouzivatelia` WHERE `sex`='$sex'"))  //potrebne zvolit aj name lebo potom budem pouzivat
			{
				if(mysql_num_rows($query)==NULL)
				{
					echo 'Sorry no resutls found!!!';
				}else
				{
					while($array=mysql_fetch_assoc($query))
					{
						echo 'To your need '. $array['name'].'<br>';
					}
				}
			} 			
		}
	}
}else
{
	echo 'error v pripojeni do databazy';
	//mysql_error();
}
?>

<form action="<?php $_SERVER['SCRIPT_NAME']?>" method='GET'>
	Please select sex:<br>
	<select name='sex'>
		<option name='male'>Male</option>
		<option name='female'>Female</option>
	</select><br>
	<input type='submit' name='submit' value='Potvrd'>
</form>