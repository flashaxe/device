<?php
include "db.php";
$fontsize=18;
$pid=$_REQUEST['pid'];
$aquery=mysql_query("select * from device where pid = '".$pid."'",$db);
while ($adata=(mysql_fetch_array($aquery)))
{
for($i=0;$i<count($adata);$i++){
unset($adata[$i]);
}
echo "<label class='tit'>固定资产编号：</label><input class='infom' id='sid' value='".$adata['sid']."'></input>";
echo "<label class='tit'>设备名：</label><input class='infom' id='name' value='".$adata['name']."'></input>";
echo "<label class='tit'>品牌：</label><input class='infom' id='brand' value='".$adata['brand']."'></input>";
echo "<label class='tit'>型号：</label><input class='infom' id='type' value='".$adata['type']."'></input>";
echo "<label class='tit'>配置：</label><input class='infom' id='config' value='".$adata['config']."'></input>";
echo "<label class='tit'>序列号：</label><input class='infom' id='sn' value='".$adata['sn']."'></input>";
echo "<label class='tit'>保管人：</label><input class='infom' id='user' value='".$adata['user']."'></input>";
if (strlen($adata['location'])>57){
$fontsize=18-(floor(strlen($adata['location'])/3)-19);
}
echo "<label class='tit'>放置地：</label><input id='location' class='infom' style='font-size:".$fontsize."px' value='".$adata['location']."'></input>";
echo "<label class='tit'>备注：</label><input id='memo' class='infom' value='".$adata['memo']."'></input>";
echo "<input type='hidden' id='pid' value='".$adata['pid']."'></input>";


//echo json_encode($adata);
}

?>
<a  id="close" class="close" href="#">close</a>
<a  id="save" class="close" href="#">save</a>
<script type="text/javascript">
$("#close").bind("click",function(){
$("#info").css({"visibility":"hidden"});
bindButton();
});
$("#save").bind("click",function(){
var jsondata=new Object;
jsondata.sid=$("#sid").val();
jsondata.name=$("#name").val();
jsondata.brand=$("#brand").val();
jsondata.type=$("#type").val();
jsondata.config=$("#config").val();
jsondata.sn=$("#sn").val();
jsondata.user=$("#user").val();
jsondata.location=$("#location").val();
jsondata.memo=$("#memo").val();
jsondata.pid=$("#pid").val();
$("#info").css({"visibility":"hidden"});
$("#info").load("save.php",{data:jsondata});
var sid=$("#sidsearch").val();
$("#list").load("list.php",{sid:sid});
});
</script>
