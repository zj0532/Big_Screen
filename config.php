<?php
	$con=mysqli_connect("10.135.6.253","Wangluoshebei","Wangluoshebei0532");
	if(!$con)
	{
		die('连接数据库错误：'.mysql_error());	
	}
	mysqli_select_db($con,"zabbix");
	mysqli_query($con,"set names utf8")
	
?>