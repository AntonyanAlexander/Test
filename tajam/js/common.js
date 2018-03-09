var iframevideo = '<iframe class="about-play" src="https://www.youtube.com/embed/0E4aYgKmIko?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>';



$(window).on("load",function() {
	var height = $(window).height();
	var width = $(window).width();


	$('header').css( "min-height", height);
	$('.header-content').css( "min-height", height-80);//80 - height nav
});


$('.slider').carousel('pause');
$('#testimonials-box').carousel('pause');
$(function() {
    $(".carousel-indicators li").click(function() {
        $(".carousel-indicators li").removeClass("active");         
        $(this).toggleClass("active");
    })
    $(".nav-item").click(function() {
        $(".nav-item").removeClass("active");         
        $(this).toggleClass("active");
        $('html, body').animate({scrollTop:$($(this).children().attr('href')).position().top}, 2000);
    })
    $(".chat-toggler").click(function() {        
        $('.chat').toggleClass("visible slide-in-top");
    })
    $(".chat-exit").click(function() {        
        $('.chat').removeClass("visible slide-in-top");
    })
});