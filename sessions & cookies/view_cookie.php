<?php
if(isset($_COOKIE['user']))
{
	echo 'cookie je '. $_COOKIE['user'];
}
else
echo 'cookie bolo uz zrusene';

?>