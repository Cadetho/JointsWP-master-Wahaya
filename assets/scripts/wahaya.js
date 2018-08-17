//particlesJS.load('particle-box', '../wp-content/themes/JointsWP-master/assets/scripts/particles.json', function(){});

jQuery(document).ready(function(){
	jQuery('.post-carousel').slick({
		slidesToShow:2,
		infinite: false,
		responsive: [{
			breakpoint: 1024,
			settings: {
					slidesToShow: 3
			}
		},{
			breakpoint: 600,
			settings:{
				slidesToShow: 2
			}
		},{
			breakpoint: 300,
			settings:{
				slidesToShow: 1
			}
		}]
	});
});