$(function(){
	$('input[type=submit').hover(function(){
		$(this).css('border-bottom','0');
	},function(){
		$(this).css('border-bottom','5px solid #009673');
	})

	$('.placeholder').mask("+00 (00) 0 0000 0000", {placeholder: "+DDI (DDD) 0 0000 0000"});



	$('.form').ajaxForm(function(){
		console.log('enviado');
	})

})