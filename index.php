<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大屏展示</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	
</head>
<?php
	include('config.php');
	$query=mysqli_query($con,"select * from Big_Screen");
	$num=1;
?>
<body>
<?php 
	/*while($rs=mysqli_fetch_array($query))
	{
		 $num+=1;
		 echo "<div id='$num' class='draggable' style='position:relative;letf:".$rs['Arrayx'].";top:".$rs['Arrayy']."'><p>".$rs['name']."</p></div>"; 
	}*/
	while($rs=mysqli_fetch_array($query))
	{
		$num+=1;
		echo "<div id='$num' class='draggable' style='position:relative;letf:".$rs['Arrayx'].";top:".$rs['Arrayy']."' ><p>".$rs['name']."</p></div>"; 
	}
	echo "<script>console.log($('#2').position().top-7)</script>";
	?>	
<div id="ab" class="top">大屏展示</div>
	<div class="center"><img  src="img/china.png" />
	<div class="button"><input id='save' type='button' value='保存'></div>
</div>
<div class="bottom">
	
</div>
<script type="text/javascript" src="js/index.js"></script>
<script>
		$("#3").css("postition","fixed");
		$("#3").css("top","<?php echo 808 ?>");
		$("#3").css("left","80");
</script>
</body>
</html>
