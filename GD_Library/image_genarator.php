<?php
header('Content-type: image/jpeg');   //cela stranak bude ako obrazok =>neda sa pouzit fcia echo

$email='matus@ahoj.org';
$email_len=strlen($email);

$font_size =4;

$img_height=ImageFontHeight($font_size); //Can be 1, 2, 3, 4, 5 for built-in fonts in latin2 encoding (where higher numbers corresponding to larger fonts) =>proste vyska obrazka
$img_width=ImageFontWidth($font_size) * $email_len; //dlzka obrazka

$img = imagecreate($img_width,$img_height);

imagecolorallocate($img,255,255,255); //biela farba na pozadie =>musi byt prva v poradi 
$font_color=imagecolorallocate($img,0,0,0); //cierna farba na pislo

imagestring($img,$font_size,0,0,$email,$font_color); //0,0 je umiestnenie pisma
imagejpeg($img);
?>
