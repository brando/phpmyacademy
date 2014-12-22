<?php
setcookie('user','Matus',time()+20);
//po 20 sek cookie sa zrusi
/*
*pre unset cookie by som nakodil
*setcookie('user','Matus',time()-20);
* cize by som tam dal -
* setcookie('user','Matus',time()-20)=>by som pouzil pri logoute; cas cookie este nevyprsal ale ja chcem aj tak cookie zrusit
*/

?>
<a href="http://localhost/phpmyacademy/sessions%20&%20cookies/view_cookie.php">presmerovanie na view</a>