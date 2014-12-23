<?php
require 'core.inc.php';  //pouzivam session a header+ http_referer
session_destroy();
header('Location:'.$http_referer);
echo $http_referer;

?>