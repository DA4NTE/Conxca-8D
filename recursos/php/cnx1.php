<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cnx1 = "localhost";
$database_cnx1 = "cxcbd";
$username_cnx1 = "root";
$password_cnx1 = "admin";
$cnx1 = mysql_pconnect($hostname_cnx1, $username_cnx1, $password_cnx1) or trigger_error(mysql_error(),E_USER_ERROR); 
?>