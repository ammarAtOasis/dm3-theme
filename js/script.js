$(document).ready(function() {
	
//	$('#logo img, #slogan, #nav, #social, #slider-container, #footer .wrap, #columns, .home-hr').css({'display': 'none'});
//	$('#content .wrap').css({'background-image': 'none'});

	// Start the Action movie...
	// By: A & H
//	$('#logo img').css({'display': 'none', 'width': '120px', 'height': '120px'}).fadeIn(600).delay(100).animate({'width': '112px', 'height': '112px'}, 200);
	
	$('#slogan').delay(1000).fadeIn(800);
	
	$('#nav').delay(2000).fadeIn(600);
	
	$('#social').delay(3000).fadeIn(600);

	$('#slider-container').delay(4000).fadeIn(600);
	$('#content .slider-sh').delay(4000).css({'background-image': 'url(images/slider-sh.png)'});

	$('#columns').delay(5000).fadeIn(600);

	$('.home-hr').delay(6000).fadeIn(600);

	$('#footer .wrap').delay(7000).fadeIn(600);
	
	/* Main Navigator */
	$('.nav-menu li, #logo').click(function(e){
		
		e.preventDefault();
		var to = $(this).find('a').attr('href');

		$('#container').fadeOut(1000, function(){
			window.location = to;
		});
		
		
	});
	
	/* Home project(s) & TOP DM3 Nav */
	$('.proj, #dm3-nav li').click(function(){
		
		var href = $(this).find('a').attr('href');
		if (href)
			window.location = href;

	});
	
	/* Sub pages navigation */
	$('.side-menu li').click(function(e){

		e.preventDefault();
		var ths = $(this);
		$(this).parent().find('.active').removeClass('active');

		$('.page-content').fadeOut(300).delay(300, function() {
			
			ths.addClass('active');
			
			window.location = ths.find('a').attr('href');
			
		});


	});
	
	// Home slider
	$("#slider").easySlider({
		auto: true, 
		continuous: true,
		pause: 8000,		
	});	

	

});

