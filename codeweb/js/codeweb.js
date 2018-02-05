$(document).ready(function(){
	
//$('.nav_menu ul li').mouseover(function(){
//$(this).css('font-size','16px');});
//$('.nav_menu ul li').mouseout(function(){
//$(this).css('font-size','14px');});

$('.welcomelogo').click(function(){
	$(this).animate({left:300});
	$('.wc_home').animate({top:275},300);
	$('.wc_about').animate({top:275},600);
	$('.wc_tutorials').animate({top:275},900);
	$('.wc_contact').animate({top:275},1200);
});

$('.wc_home').click(function(){
	$('.wrapperhome').fadeIn(1000);
	});


	});