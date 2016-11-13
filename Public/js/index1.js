$(document).ready(function(){
	  $("#hide").hide();
       $(".pic").on("click",function(e){
			var top = ($(window).height() - $("#hide").height())/2;   
			var left = ($(window).width() - $("#hide").width())/2;   
			var scrollTop = $(document).scrollTop();   
			var scrollLeft = $(document).scrollLeft();   
			$("#hide").css( {'top' : top + scrollTop, "left" : left + scrollLeft } ).show();
       })
})