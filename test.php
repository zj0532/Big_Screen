<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
</head>
<script>
	$(function()
	{
		$("input").click(function()
		{
			$.ajax(
			{
				type:'post',
				url:'save.php',
				async:false,
				data:{abc:'123'},
			})
		});	
	
	})
	
</script>
<body>
<input type="button" value="测试">
</body>
</html>