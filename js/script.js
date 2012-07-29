$('document').ready(function(){
	
	if( $('.navigation').length > 0 ) {
		$('.navigation a').click(function(e){
			e.preventDefault();
			
			$('h3').css({
				'padding':'0',
				'background-color':'transparent',
				'border':'none'
			});
			
			var nam = $(this).attr('href');
			$('html,body').stop().animate({scrollTop: $(nam).offset().top},'slow' , function(){
				$(nam).css({ 
					'border':'1px solid #0C158F',
					'background-color':'#00E600',
					'padding':'3px'
				});
			});
		});
	}
	
});
