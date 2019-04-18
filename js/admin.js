$(document).ready(function(){
			for(var i = 1; i< 37; i++){
				var something = $("#content"+i+"").html();
			$("#content"+i+"").text(something.substring(0,100));
			}
			
		})