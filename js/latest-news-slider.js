$(function() {

	// Latest News Slider

	$("#slide-controller").jFlow({
		slides: ".yd_rp_widget ul",
		controller: ".jFlowControl", // must be class, use . sign
		slideWrapper : "#jFlowSlide", // must be id, use # sign
		selectedWrapper: "jFlowSelected",  // just pure text, no sign
		auto: true,		//auto change slide, default true
		width: "327px",
		height: "260px",
		duration: 400,
		prev: ".jFlowPrev", // must be class, use . sign
		next: ".jFlowNext" // must be class, use . sign
	});

	/*
	$('.yd_rp_widget ul').anythingSlider({
		theme           : 'metallic',
		easing          : 'easeInOutBack',
		navigationFormatter : function(index, panel){
			return ['Slab', 'Parking Lot', 'Drive', 'Glorius Dawn', 'Bjork?', 'Traffic Circle'][index - 1];
		},
		onSlideComplete : function(slider){
			// alert('Welcome to Slide #' + slider.currentPage);
		}
	});
	*/

});
