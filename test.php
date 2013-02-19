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
<button type="button" class="infobutton"></button>
</body>
</html>
<script type="text/javascript">
$(".infobutton").bind("mouseover",function(){
$("#info").css({"visibility":"visible"});
});
$(".infobutton").bind("mouseout",function(){
$("#info").css({"visibility":"hidden"});
});
$(".infobutton").bind("click",function(){
var pid=$(this).val();
$("#info").css({"visibility":"visible"});
$(".infobutton").unbind("mouseout");
});
</script>