$(document).ready(init);	//call the init function on body load

function init(){
	$(".header-menu-item").hover(function(){
		$(this).stop(true).animate({'backgroundColor' : '#1f1f1f'}, 500);
	}, function(){
		$(this).stop(true).animate({'backgroundColor' : '#363636'}, 800);
	});
}