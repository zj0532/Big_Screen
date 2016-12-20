// JavaScript Document  <script type="text/javascript" src="js/index.js"></script>
$(function(){
	
	
	
	var num=$("div p").length;
	for(var i=0;i <= num;i++)
			{
				$("#"+i+"").draggable();
			}
	
	$("#save").click(function()
	{
		var Arrayx={};
		var Arrayy={};
		for(var a=1;a<=num;a++)
		{
			Arrayx[a]=$("#"+a+"").offset().top;
			Arrayy[a]=$("#"+a+"").offset().left;
			id[a]=a;


			/*$(document).ready(function()
			{
				console.log(a);
				var name=$("#"+"a"+" p").html();
				console.log(name);
			})*/
				
			console.log(Arrayx[a],Arrayy[a]);	
		}
		
		$.ajax
		({
			type:"POST",
			url:"save.php",
			data:{id:id,Arrayx:Arrayx,Arrayy:Arrayy},
			success:function(data)
			{
				console.log(data);
			}
		})

	})
})