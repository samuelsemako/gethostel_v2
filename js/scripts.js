$(window).scroll(function () {
    var scrollheight = $(window).scrollTop();
    
    if (scrollheight >= 100) {
        $("#back2Top").fadeIn(1000);
    } else {
        $("#back2Top").fadeOut(1000);
    }
    
    if (scrollheight >= 400) {
        $("header").css({
            "position": "fixed",
            "background": "rgba(0, 0, 0, 0.9)",
        });
        $(".top-header").css("display", "none");
    } else {
        $("header").css({
            "position": "absolute",
            "background": "rgba(255, 255, 255, 0.062)"
        });
        $(".top-header").css({
            "display": "flex"
        });
    }
});


  
function _back_to_top(){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
}

function scrolltodiv(divid, margintop){
	$('html, body').animate({
	scrollTop: $("#"+divid).offset().top - margintop}, 500);
}

function _open_menu(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.live-chat-back-div').animate({'margin-left':'-100%'},400);
	   $('.index-menu-back-div').animate({'margin-left':'0'},400);
}
function _open_live_chat(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.index-menu-back-div').animate({'margin-left':'-100%'},400);
	   $('.live-chat-back-div').animate({'margin-left':'0'},400);
}
function _close_side_nav(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'-100%'},200);
	   $('.index-menu-back-div,.live-chat-back-div').animate({'margin-left':'-100%'},400);
}
