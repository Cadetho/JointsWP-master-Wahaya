//particlesJS.load('particle-box', '../wp-content/themes/JointsWP-master/assets/scripts/particles.json', function(){});

jQuery(document).ready(function(){
	jQuery('.post-carousel').slick({
		slidesToShow:3,
		infinite: false,
		responsive: [{
			breakpoint: 1400,
			settings: {
					slidesToShow: 2
			}
		},{
			breakpoint: 850,
			settings:{
				slidesToShow: 1
			}
		},{
			breakpoint: 300,
			settings:{
				slidesToShow: 1
			}
		}]
	});
});