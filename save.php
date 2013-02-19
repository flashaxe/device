<?php
include "db.php";
//$adata=json_decode($_REQUEST['data'],true);
$sql="update device set ";
foreach ($_REQUEST['data'] as $key => $val){
if ($key<>'pid'){
$sql=$sql.$key."='".$val."', ";
}
}
$sql=rtrim($sql,", ");
$sql = $sql." where pid='".$_REQUEST['data']['pid']."'";
echo $sql;
$aquery=mysql_query($sql,$db);

?>