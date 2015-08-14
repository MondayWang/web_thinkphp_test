<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>用户界面测试</title>
</head>
<body>
用户界面测试<br/>
<table border="1" align="center" width="500px">
	
	<tr>
	
		<th>id</th>
		<th>username</th>
		<th>sexy</th>
		<th>操作</th>
	</tr>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		
			<td><?php echo ($vo["id"]); ?></td>
			<td><?php echo ($vo["username"]); ?></td>
			<td><?php echo ($vo["sexy"]); ?></td>
			<td><a href="/index.php/User/del/id/<?php echo ($vo["id"]); ?>">删除</a> | <a href="/index.php/User/update/id/<?php echo ($vo["id"]); ?>">修改</a></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<hr>
增加用户测试
<table border="1" align="center" width="500px">
	
	<tr>

		<th>username</th>
		<th>sexy</th>
		<th>提交</th>
	</tr>
	<tr height="30px">
	
		<td><input type="text"/></td>
		<td><input type="text"/></td>
		<td><input type="button" id="sub" value="提交"/></td>
	</tr>
</table>
	
<script>
	
	
</script>
	
</body>
</html>