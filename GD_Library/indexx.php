<?php
//tu sa generuje cislo a v subore secure_iamge.php sa vytvara obrazok
session_start();

if(!isset($_GET['number']) && empty($_GET['number']))
{
	$_SESSION['secure']=rand(1000,9999);
	echo 'type a shown number!!<br>';
}else
{
	$number=$_GET['number'];
	if($number==$_SESSION['secure'])
	{
		echo 'correct<br>';
	}else
	{
	echo 'wrong number.Please type again<br>';
	$_SESSION['secure']=rand(1000,9999);			//ked zadam nespravne cislo tak vygenerovat este raz inaksie by som zase zadaval to iste
	}
}
?>

<img src="secure_image.php">
<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="GET">
	Here type the number: <input type="text" name="number"><br>
						<input type="submit" value="Submit">
</form>