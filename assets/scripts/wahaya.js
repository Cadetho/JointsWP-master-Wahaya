//particlesJS.load('particle-box', '../wp-content/themes/JointsWP-master/assets/scripts/particles.json', function(){});

jQuery(document).ready(function(){
	jQuery('.post-carousel').slick({
		lazyLoad: 'ondemand',
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
	
	jQuery('.testimonial-carousel').slick({
		lazyLoad: 'ondemand',
		fade: true,
		slidesToShow:1,
		arrows: false,
		dots: true,
		draggable: true,
		infinite: true,
		pauseOnHover: true,
		autoplay: true,
		autoplaySpeed: 5000
	});
});