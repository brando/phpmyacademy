<?php
session_start();
if(isset($_SESSION['name']))
{
	echo 'Welcome '.$_SESSION['name'];
}else 
{
	echo 'session is no set';
	}
	
?>