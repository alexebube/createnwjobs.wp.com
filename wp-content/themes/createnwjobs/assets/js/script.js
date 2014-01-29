// JavaScript Document

var ww = document.body.clientWidth;

$(document).ready(function() {
 	
	$(".showMenu").click(function(e) {
        e.preventDefault();
		$(this).toggleClass("active");
		$(".links").slideToggle();
    });
	
	$(".links li").click(function(){
		$(".links li").removeClass('current');
    	$(this).addClass('current');
	});
	
	respondMenu();
});

$(window).bind('resize orientationchange', function(){
	ww = document.body.clientWidth;
	respondMenu();
	});
	
var respondMenu = function (){
	if (ww < 768) {
			$(".showMenu").css("display","inline-block");
			if (!$(".showMenu").hasClass("active")) {
					$(".links").hide();
				}
			else {
					$(".links").show();
				}
			$(".links li").unbind('mouseenter mouseleave');
			$(".links li a.parent").unbind('click').bind('click', function(e){
				e.preventDefault();
				$(this).parent("li").toggleClass("hover");
				});
				
	}
	else if (ww >= 768) {
			$(".showMenu").css("display","none");
			$(".links").show();
			$(".links li").removeClass("hover");
			$(".links li a").unbind('click');
			$(".links li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave',	function() {
				$(this).toggleClass('hover');
			});
			}
	
}