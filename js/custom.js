$( document ).ready(function() {
	
	function showBox(color, title, content){
		var $color = color;
		var $title = title;
		var $content = content;
		var $height = (70 / 100) * $(window).height();
		
		if ($color === null) $color = 'orange';
		
		$('.box-active').show();
		$('.box-active-bg').show();
		
		$('.box-active').find('.bg').attr('class', '').addClass('bg ' + $color);
		$('.box-active').find('h2').text($title);
		$('.box-active').find('.box__wrapper--content').html($content);
		
		function resizeMobile(){
			if ($(window).width() < 748) {
				$('.box-active').find('.box__wrapper--content').css('height', $height);
				$('.box-active').css('height', '98%');
			} else {
				$('.box-active').find('.box__wrapper--content').css('height', 'auto');
				$('.box-active').css('height', 'auto');
			}
		}
		
		resizeMobile();
		
		$( window ).resize(function() {
		  resizeMobile();
		});
	}
	
	function hideBox(){
		$('.box-active').hide();
		$('.box-active-bg').hide();
	}
	
	hideBox();
	
	$('.close').click(function(e){
		e.preventDefault();
		hideBox();
	});
	
	$('.box-active-bg').click(function(e){
		e.preventDefault();
		hideBox();
	});
	
	$('.box__wrapper--link').click(function(e){
		e.preventDefault();
		var $colorBg = $(this).attr('data-color');
		var $title = $(this).parent().find('h2').text();
		var $content = $(this).parent().find('.box__wrapper--content').html();
		
		if ($(window).width() >= 748) {
			$('body,html').animate({
				scrollTop: 0
			}, 800);	
		}
		
		hideBox();
		showBox($colorBg, $title, $content);
		
		return false;
	});
});