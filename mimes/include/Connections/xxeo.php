<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_xxeo = "mysql4.fincazentrale.com";
$database_xxeo = "db227899";
$username_xxeo = "db227899";
$password_xxeo = "dia05a35";
$xxeo = mysql_pconnect($hostname_xxeo, $username_xxeo, $password_xxeo) or trigger_error(mysql_error(),E_USER_ERROR); 
?>