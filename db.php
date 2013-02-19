<?php
$mysqlhost="localhost";
$mysqluser="root";
$mysqlpass="root";
$db=mysql_connect($mysqlhost,$mysqluser,$mysqlpass);
mysql_select_db("capinfoinfo",$db);
mysql_query("SET NAMES 'utf8'");
?>