<?php
$ahoj = 'ahoj';

$num1='1';
$num2=1;

if($num1==$num2)
	echo 'rovnake</br>';
	else
		echo 'rozdielne</br>';

if($num1===$num2)
	echo 'obidva su string alebo cislo</br>';
	else
	echo 'jeden je string a jeden je cislo</br>';

//array	
$food=array('jablko','pomaranc','citron','mandarinky'); 
print_r($food);echo'<br>';

//associative array
$food=array('jablko'=>500,'pomaranc'=>1000,'citron'=>52,'mandarinky');
print_r($food);echo'<br>';
echo $food['jablko'];echo'<br>';

//multidimenssional array
$food=array('Zdrave'=>array('salad','vegetable'),
            'Nezdrave'=>array('pizza','chocolate'));
echo $food['Zdrave'][0];
echo '<br>';
foreach($food as $jedlo=>$vnutro)
{
	echo '<strong>'.$jedlo.'</strong>'.'<br>';
	foreach($vnutro as $vec)
	{
		echo $vec.'<br>';
	}
}
?>

<input type="text" value="<?php echo $ahoj?>">