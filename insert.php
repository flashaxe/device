<?php
include "db.php";
//$adata=json_decode($_REQUEST['data'],true);
$aquery=mysql_query("insert into device (sid) values ('".$_REQUEST['data']['sid']."')",$db);
$sql="update device set ";
foreach ($_REQUEST['data'] as $key => $val){
if ($key<>'pid'){
$sql=$sql.$key."='".$val."', ";
}
}
$sql=rtrim($sql,", ");
$sql = $sql." where sid='".$_REQUEST['data']['sid']."'";
// echo $sql;
$aquery=mysql_query($sql,$db);
echo "设备信息已录入";
?>