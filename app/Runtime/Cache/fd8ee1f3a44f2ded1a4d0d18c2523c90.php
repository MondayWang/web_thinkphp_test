<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>update页面</title>
</head>
<body>

update页面
	
<form action="/index.php/User/update2/" method="post">
		<input type="hidden" name="id" value="<?php echo ($newname["id"]); ?>"/>
	姓名：<input type="text" name="username" value="<?php echo ($newname["username"]); ?>"/><br/>
	性别：男<input id="boykink" type="radio" value="1" name="sexy" checked/>
		 女<input id="girlkind" type="radio" value="0" name="sexy"/><br/>
	<input type="submit" value="提交修改"/>
	
</form>
<script>

if(<?php echo ($newname["sexy"]); ?>==0){
//	alert("女孩");
	document.getElementById("girlkind").checked=true;
}else{
//	alert("男孩");
	document.getElementById("boykind").checked=true;
}
</script>
	
</body>
</html>