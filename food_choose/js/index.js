var i =0;
$(document).ready(function(){
    var t;
    var abc = function(){
        if(i==3)i=-1;
        i=i+1;
        var a=i*-950;
        var j = a+'px';
        $(".imgbox").css("left",j);
        setTimeout(abc,8000);
    }
    abc();
})

$(".close").click(function(){
	$(".modal").css('display', 'none');
	$(".modal-backdrop").css('display', 'none');
});

$(".a1").click(function() {
	$(".modal").css('display', 'block');
	$(".modal-backdrop").css('display', 'block');
});

