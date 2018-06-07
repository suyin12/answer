var password = ""

$(function(){
	$("button[id^='download'][type=button]").click(function(){
		password = $("#password").val();
		downDataList();
	});
	$("button[id^='reset'][type=button]").click(function(){
		$("#password").val("")
	})
})
function downDataList(){
	$.ajax({ 
	    type:"get",
		url: "index.php?s=/Home/Index/downloadCheck",
		data: {
			password: password
		},
	    dataType:"json",
	    success:function (data){
			if(data.code === 1){
				alert(data.msg);
			}else if(data.code === 0){
                $(location).prop('href',"http://39.105.7.157/?s=/Home/Index/download");
            }
	    },
	    error: function () { 

	    }
    });
}