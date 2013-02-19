<?php
include "db.php";
$fontsize=18;
$pid=$_REQUEST['pid'];
$aquery=mysql_query("select * from device where pid = '".$pid."'",$db);
while ($adata=(mysql_fetch_array($aquery)))
{
echo "<label class='tit'>固定资产编号：</label><label class='infom'>".$adata['sid']."</label>";
echo "<label class='tit'>设备名：</label><label class='infom'>".$adata['name']."</label>";
echo "<label class='tit'>品牌：</label><label class='infom'>".$adata['brand']."</label>";
echo "<label class='tit'>型号：</label><label class='infom'>".$adata['type']."</label>";
echo "<label class='tit'>配置：</label><label class='infom'>".$adata['config']."</label>";
echo "<label class='tit'>序列号：</label><label class='infom'>".$adata['sn']."</label>";
echo "<label class='tit'>保管人：</label><label class='infom'>".$adata['user']."</label>";
if (strlen($adata['location'])>57){
$fontsize=18-(floor(strlen($adata['location'])/3)-19);
}
echo "<label class='tit'>放置地：</label><label class='infom' style='font-size:".$fontsize."px'>".$adata['location']."</label>";
echo "<label class='tit'>备注：</label><label class='infom'>".$adata['memo']."</label>";
}

?>

