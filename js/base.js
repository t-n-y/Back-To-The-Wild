$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });

	$('#menu').on("click", function(){
		console.log('click');
		$('.subMenu').show();
		$('#close').show();
	});
	$('#close').on("click", function(){
		console.log('click');
		$('.subMenu').hide();
		$('#close').hide();
	});
	$('.subNavBtn').on("click", function(){
		$('.subNavBtn').removeClass('active');
		$(this).addClass('active');
	});
});