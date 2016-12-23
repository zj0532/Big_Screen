// JavaScript Document  <script type="text/javascript" src="js/index.js"></script>
$(function(){
	var num=$("div p").length;
	for(var i=0;i <= num;i++)
			{
				$("#"+i+"").draggable();
				
			}
	
	
	$('#save').click(function(){
		/*for(var i=0;i<=num;i++)
		{*/
			
		//}
		/*var Arrayx={};
		var Arrayy={};
		for(var a=2;a<=num;a++)
		{
			//Arrayx[a]=$("#"+a+"").offset().top;
			//Arrayy[a]=$("#"+a+"").offset().left;
			Arrayx[a]=$("#"+a+"").position().top;
			Arrayy[a]=$("#"+a+"").position().left;
			console.log(Arrayx[a],Arrayy[a]);

		}*/
	})

})