<?php
echo "<label class='tit'>固定资产编号：</label><input class='infom' id='sid' ></input>";
echo "<label class='tit'>设备名：</label><input class='infom' id='name' ></input>";
echo "<label class='tit'>品牌：</label><input class='infom' id='brand' ></input>";
echo "<label class='tit'>型号：</label><input class='infom' id='type' ></input>";
echo "<label class='tit'>配置：</label><input class='infom' id='config' ></input>";
echo "<label class='tit'>序列号：</label><input class='infom' id='sn'></input>";
echo "<label class='tit'>保管人：</label><input class='infom' id='user'></input>";
echo "<label class='tit'>放置地：</label><input id='location' class='infom' ></input>";
echo "<label class='tit'>备注：</label><input id='memo' class='infom'></input>";
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
$("#info").css({"visibility":"visible"});
$("#info").load("insert.php",{data:jsondata});
//alert("hello!");
});
</script>
