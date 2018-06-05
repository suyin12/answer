$(function(){
	$(".answer_btn").click(function(){
		$(this).parent().addClass("hide");
		$(this).parent().next().removeClass("hide");
	});
	$(".back_btn").click(function(){
		$(this).parent().addClass("hide");
		$(this).parent().prev().removeClass("hide");
	});
	$(".next_btn").click(function(){
		$(this).parent().addClass("hide");
		$(this).parent().next().removeClass("hide");
	});
	$("input[type='checkbox']").click(function(){
    	if($("input[id^='checkbox-07']:checked").length > 2) {
    		return false;
    	};
    });
});