<?php 
$path = $_SERVER['PHP_SELF'];
$pos = strrpos ($path, '/');
$path = substr($path, 0, $pos + 1);
//$path = substr($path, 33); // L�scht auf dem Testserver: /PJ12 - XXEO - Test-fincacentrale
?>
