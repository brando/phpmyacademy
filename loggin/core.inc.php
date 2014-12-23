<?php
ob_start();   //pouzivam header
session_start();	//pouzivame $_SESSION['']
$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER']))				//referuje na stranku z ktorej som preve prisiel
$http_referer= $_SERVER['HTTP_REFERER'];
?>