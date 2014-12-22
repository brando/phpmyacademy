<?php
if(isset($_POST['den'])&&isset($_POST['mesiac'])&&isset($_POST['rok']))
{	//htmlentities ignoruje html znaky
	$den=htmlentities($_POST['den']);
	$mesiac=htmlentities($_POST['mesiac']);
	$rok=htmlentities($_POST['rok']);
	if(!empty($_POST['den'])&&!empty($_POST['mesiac'])&&!empty($_POST['rok']))
	{
		echo $den.' '.$mesiac.' '.$rok;
	}
	else
		echo 'vypln vsetky policka';
	
}
?>
<form action=<?php echo $_SERVER['SCRIPT_NAME']?> method='POST'>
	Den:
	<br><input type='text' name='den'><br>
	Mesiac:
	<br><input type='text' name='mesiac'><br>
	Rok:
	<br><input type='text' name='rok'><br>
	<br><input type='submit' name='submit' value='Potvrd!'>
</form>