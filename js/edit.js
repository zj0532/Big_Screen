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
		var id={};
		var name={};
		for(var a=1;a<=num;a++)
		{
			//Arrayx[a]=$("#"+a+"").offset().top;
			//Arrayy[a]=$("#"+a+"").offset().left;
			Arrayx[a]=$("#"+a+"").position().top;
			Arrayy[a]=$("#"+a+"").position().left;
			id[a]=a;

		}
			
				for(var b=1;b<=num;b++)
				{
					name[b]=$("#"+b+" p").html();	
					
				}
				
		
			
		$.ajax
		({
			type:"POST",
			url:"save.php",
			data:{id:id,Arrayx:Arrayx,Arrayy:Arrayy,name:name},
			success:function(data)
			{
				alert(data);
			}
		})

	})
})