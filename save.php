<?php
	ob_start();
	$id=$_POST['id'];
	$Arrayx=$_POST['Arrayx'];
	$Arrayy=$_POST['Arrayy'];
	$name=$_POST['name'];

	include('config.php');
	$num=count($Arrayx);
	mysqli_query($con,"delete from Big_Screen");
	for($a=1;$a<29;$a++)
	{
		$query=mysqli_query($con,"INSERT INTO Big_Screen (id,Arrayx,Arrayy,name) VALUES ('$id[$a]','$Arrayx[$a]','$Arrayy[$a]','$name[$a]')");

	}
	if(mysqli_affected_rows($con) != -1)
	{
		echo "保存成功！";
	}
	else
	{
		echo "保存失败！";
	}
?>