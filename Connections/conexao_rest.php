<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexao_rest = "127.0.0.1";
$database_conexao_rest = "rest-aula";
$username_conexao_rest = "root";
$password_conexao_rest = "";
$conexao_rest = mysql_pconnect($hostname_conexao_rest, $username_conexao_rest, $password_conexao_rest) or trigger_error(mysql_error(),E_USER_ERROR); 
?>