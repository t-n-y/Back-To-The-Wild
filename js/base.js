$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });

	$('#menu').on("click", function(e){
		$('.subMenu').show();
		$('#close').show();
		e.preventDefault();
	});
	$('#close').on("click", function(e){
		$('.subMenu').hide();
		$('#close').hide();
		e.preventDefault();
	});
	$('.subNavBtn').on("click", function(){
		$('.subNavBtn').removeClass('active');
		$(this).addClass('active');
	});
});