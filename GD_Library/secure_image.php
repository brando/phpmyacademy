<?php
session_start();
header('Content-type: image/jpeg');

$text=$_SESSION['secure'];
$font_size=30;		//toto zalezi iba od pisma ake pouzivam a hodnota je ziskana experimentom/skusanim

$image_width=130;
$image_heigth=40;

$image=imagecreate($image_width,$image_heigth);
imagecolorallocate($image,255,255,255);		//background
$text_color=imagecolorallocate($image,0,0,0);

imagettftext($image,$font_size,0,15,30,$text_color,'font.ttf',$text); //true type font; 0=>angle; (15,30)=>x&y suradnice
//imagejpeg($image);


/*------------------------------------------*/
for($x=1;$x<=150;$x++)  //150==pocet ciar
{
	$x1=rand(1,100);		
	$y1=rand(1,100);		
	$x2=rand(1,100);		
	$y2=rand(1,100);		
	
	imageline($image,$x1,$y1,$x2,$y2,$text_color);
}

imagejpeg($image);

?>