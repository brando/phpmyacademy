<?php
if(@mysql_connect('localhost','root','37949647') && mysql_select_db('phpmyacademy'))
{
}else
	echo 'there is ploblem with database';
?>