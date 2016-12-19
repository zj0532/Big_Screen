// JavaScript Document
$(function(){
	
	var num=$("div p").length;
	console.log(num);
	for(var i=0;i <= num;i++)
			{
				$("#"+i+"").draggable();
			}
	
	$("#save").click(function()
	{
		
		for(var a=1;a<=3;a++)
		{
			var x=new Array();
			var y=new Array();
			x.push($("#"+a+"").offset().top);
			y.push($("#"+a+"").offset().left);
			
			$(document).ready(function()
			{
				var name=$("#"+a+" p").html();
				
			})
				
				
		}
		console.log(x);
		$.ajax(
				{
					type:"post",
					url:"save.php",
					date:{id:a,name:name},
					suscces:function(data)
					{
						alert(data)
					}
				})
	})
})