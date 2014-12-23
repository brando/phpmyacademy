<?php
require 'connect.inc.php';
require 'core.inc.php';

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) //mohol by som este overit $_SESSION['user_name'] atd. ale ked overim jedno tak to staci podla :) lebo ak sa priradi id tak je rovnaku kod aj pre surname a name 
{ 
	die('Welcome '.$_SESSION['user_name'].' '.$_SESSION['user_surname'].'. <br>You are log in <a href=logout.php>Log out</a>'); //die koli tomu lebo bz mi tam potom hodilo odkaz na stranku Register here co nechcem
}else
{
require 'loggin.inc.php';
}
?>
<a href='registration.php'>Register here</a>