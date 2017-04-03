// увеличение картинок при нажатии
$(document).ready(function(){
	$(".thumbnail").click(function(){
		var address= $(this).attr("src");
		$("#popup").fadeIn("slow");
		$("#lightbox").attr("src",address);
	});
	$("#popup").click(function(){
		$("#popup").fadeOut("fast");
	});
});