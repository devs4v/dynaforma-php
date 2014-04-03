//$(questioneditor);

function questioneditor(){
	$('.q-title').click(function(){
		var inp = $(this).find('input');
		inp.removeAttr('disabled', false);
		inp.focus();
		inp.css({'backgroundColor': '#fff'});
		inp.blur(function(){
			$(this).prop('disabled', true).css)({'backgroundColor':'#ddd'});
		});
	});
}