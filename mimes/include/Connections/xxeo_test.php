<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_xxeo_test = "localhost";
$database_xxeo_test = "xxeo_test";
$username_xxeo_test = "root";
$password_xxeo_test = "";
$xxeo_test = mysql_pconnect($hostname_xxeo_test, $username_xxeo_test, $password_xxeo_test) or trigger_error(mysql_error(),E_USER_ERROR); 
?>