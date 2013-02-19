<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="../jquery.js"></script>
<title>Untitled Document</title>
<link href="device.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="info" id="info"></div>
<?php
include "db.php";
$sid=$_REQUEST['sid'];
if ($sid==""){
echo "请输入搜索条件！";
}
else if($sid=="add"){
echo "添加新记录";
}
else{
$aquery=mysql_query("select * from device where sid LIKE '%".$sid."' or user = '".$sid."'",$db);
$numrows=mysql_num_rows($aquery);
if (mysql_num_rows($aquery)==0){
echo "查无此记录！";
}

else{
	echo "<h2>符合条件的记录共计：".$numrows."条</h2>";
	echo "<table><tr><td >固定资产编号</td><td >资产名称</td><td >品牌</td><td >型号</td><td >保管人</td><td>详情</td></tr>";

	while ($adata=(mysql_fetch_array($aquery)))
	{	
		echo "<tr>";
		echo "<td>".$adata['sid']."</td>";
		echo "<td>".$adata['name']."</td>";
		echo "<td>".$adata['brand']."</td>";
		echo "<td>".$adata['type']."</td>";
		echo "<td>".$adata['user']."</td>";
		echo "<td><button type='button' id='info' class='infobutton' value='".$adata['pid']."'>...</button></td>";
		echo "</tr>";
	}

echo "</table>";
}
}
?>
</body>
</html>
<script type="text/javascript">
$(".infobutton").bind("mouseover",function(){
var pid=$(this).val();
$("#info").load("info.php",{pid:pid});
$("#info").css({"visibility":"visible"});
});
$(".infobutton").bind("mouseout",function(){
$("#info").css({"visibility":"hidden"});
});
$(".infobutton").bind("click",function(){
var pid=$(this).val();
$("#info").load("edit.php",{pid:pid});
$("#info").css({"visibility":"visible"});
$(".infobutton").unbind("mouseout mouseover");
});
function bindButton(){
  $(".infobutton").bind("mouseover",function(){
    var pid=$(this).val();
    $("#info").load("info.php",{pid:pid});
    $("#info").css({"visibility":"visible"});
  });
  $(".infobutton").bind("mouseout",function(){
    $("#info").css({"visibility":"hidden"});
  });
};

</script>