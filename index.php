
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大屏展示</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/index.js"></script>

</head>
<?php
	include('config.php');
	$query=mysqli_query($con,"select name from groups");
	$num=1;
?>
<body>
<div id="ab" class="top">大屏展示</div>
<div class="center"><img  src="img/china.png" />
	<div class="button"><input id='save' type='button' value='保存'></div>
	
</div>
<div class="bottom">
	<?php while($rs=mysqli_fetch_row($query))
	{
		echo "<div id='$num' class='draggable'><p>".$rs[0]."</p></div>";
		$num+=1;
	}
	?>	
</div>
</body>
</html>
