$("a#toggle").on('click', function(e) {
$('body').toggleClass('js-open');
$('nav').toggleClass('js-open');
    e.preventDefault();
 $('.nav-background').css('visibility','visible');
});

$(".nav-background").on('click', function() {
  $('body, nav').removeClass('js-open');
   $('.nav-background').css('visibility','hidden');
});

$(".aa").hover(
	function(){
		$(this).text("要聽老人言");
	},
	function(){
		$(this).text("課程評價");
	});