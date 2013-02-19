<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<script type="text/javascript" src="../jquery.js">
</script>
<link href="device.css" rel="stylesheet" type="text/css" />
</head>
<title>资产查询</title>
<body>
<div class="search">
	<p>
	<h1>	请输入固定资产编号或使用人:</h1>
	<input id="sidsearch"></input>
    <button type="button" class="search" id="searchsid">搜索</button>
    <button type="button" class="search" id="add">添加</button>
	</p>
</div>
<div class="list" id="list"><div class="info" id="info"></div></div>

</body>

</html>
<script type="text/javascript">
$("#searchsid").bind("click",function(){
var sid=$("#sidsearch").val();
//alert (sid);
$("#list").load("list.php",{sid:sid});
$("#list").css({"visibility":"visible"});
});
$("#add").bind("click",function(){
//$("#list").html("<div class='info' id='info'></div>");
$("#list").css({"visibility":"hidden"});
$("#info").load("add.php");
$("#info").css({"visibility":"visible"});
//alert ("what?");
});
$("button.search").bind("mouseover",function(){
$(this).css({"background-color":"#dddddd"});
});
$("button.search").bind("mouseout",function(){
$(this).css({"background-color":"#eeeeee"});
});

</script>