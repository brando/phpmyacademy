<?php
/*
*$nazov=$_FILES['file']['name'];
*$velkost=$_FILES['file']['size'];
*$typ_suboru=$_FILES['file']['type'];
*$doc_miesto=$_FILES['file']['tmp_name'];
*nemozem tu definovat lebo mi vyhodi undefined index lebo musim overit pomocou isset() funkcie
*/

if(isset($_FILES['file']['name']))
{
$nazov=$_FILES['file']['name'];
$velkost=$_FILES['file']['size'];
$type=$_FILES['file']['type'];	//vrati image/jpeg=>pri obrazkoch ; text/plain pri textovom subole atd... (skus vypisat a uvidis-echo)
$doc_miesto=$_FILES['file']['tmp_name'];

$real_location='uploads/';
$typ_suboru=strtolower(substr($nazov,strpos($nazov,'.')+1));
	if(!empty($nazov))
	{
		if($type=='image/jpeg' && ($typ_suboru=='jpeg' || $typ_suboru=='jpg'))
		{
			if(file_exists($real_location.$nazov))				//nazov suboru =>samozrejem ja to ukladam do ineho directory tak preto je tam aj premena $real_location
			{
			echo 'nazov tohto suboru uz existuje prosim premenuj!!!';
			}
			else 
			{
				if(move_uploaded_file($doc_miesto,$real_location.$nazov))
				echo 'Ulozene!!';
				else
				echo 'error pri ukladanii';
			}
		}
		else
		echo 'povolene vkaldat iba obrazku typu jpg a jpeg';
	}
	else
	echo 'prosim vyber subor ';
};
?>

<form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="vloz subor">
</form>