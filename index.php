﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大屏展示</title>
	<link rel="stylesheet" type="text/css" href="css/edit.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</head>
<?php
	include('config.php');
	$query=mysqli_query($con,"select * from Big_Screen");
	$num=1;
?>
<body>
<div id="ab" class="top">大屏展示</div>

	<div class="button"><input id='save' type='button' value='保存'></div>
	<div  class='draggable' style='position:fixed;letf:476px;top:576px'>sdfsd</div>
	<?php while($rs=mysqli_fetch_array($query))
	{
		echo "<div  class='draggable' style='position:relative;letf:15;top:20' ><p>".$rs['name']."</p></div>";
		$num+=1;
	}
	?>	
</div>
<div class="bottom">
	
</div>
</body>
</html>
