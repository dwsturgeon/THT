

jQuery(document).ready(function() {

	var
		$sliderContainer 		= 	jQuery('div.homepage-slider-container'),
		$sliderImages 			= 	jQuery('div.homepage-slider-image'),
		imageAdjust = function() {
			$sliderImages.css({
				//'background-size' : $win.height() + 'px ' + $win.height() + 'px',
				'background-size' : '100% auto',
				'height'          : (600 / 1600) * $win.width() + 'px',
				'width'						: '100%'
			});


		},
		initHomepage = function() {
			imageAdjust();
			interpageNav();

			$win.on('resize', function(event) {
			  imageAdjust();
			  setInterpageNavHeight();
			  setSliderContainerHeight();
			});

			zindexImages();
			
			$sliderImages.css('display', 'none');
			jQuery('div [data-slider-image="1"]' ).css('display', 'initial');
			setSliderContainerHeight();




			var 
				index = 1,
				count = $sliderImages.length;
			window.setInterval(function () {
				if(index === (count)) {
					
					jQuery('div [data-slider-image="' + index + '"]').fadeOut(800);
					jQuery('div [data-slider-image="1"]').fadeIn(800);
					index = 1;

				} else {
					jQuery('div [data-slider-image="' + index + '"]').fadeOut(800);
					jQuery('div [data-slider-image="' + (index + 1) + '"]').fadeIn(800);
					index++;
				}
			}, 8000);


		},

		zindexImages = function() {
			
			$sliderImages.each(
				function(idx, elem) {
					

					jQuery(this).css({
						'z-index' : -(idx + 1)
					});
			});
			
		},

		setSliderContainerHeight = function() {
			$sliderContainer.css({
				'height':  (600 / 1600) * $win.width() + 'px'
			});
		},

		interpageNav = function () {
			var
				$navBoxes = jQuery('.interpage-nav .interpage-nav-box'),
				$navBoxImages = jQuery('.interpage-nav .interpage-nav-box .interpage-nav-box-background');;
			
			$navBoxes.each(function(index, el) {
				jQuery(this).css({
					
					'height': (jQuery(this).width() / 637) * jQuery(this).width() + 'px'
					
				});
			});

			
			$navBoxImages.each(function(index, el) {
				jQuery(this).css({
					'background-position': '0 ' + jQuery(this).height() + 'px'
				});
			});


			//HOVER AND LEAVE FUNCTIONS
			$navBoxImages.on('mouseover', function(event) {

				event.preventDefault();
				/* Act on the event */



				jQuery(this).animate({
					'background-position': '0 0',
				},
					'200',
					function() {
					/* stuff to do after animation is complete */
				});

				


			}).on('mouseleave', function(event) {

				event.preventDefault();
				/* Act on the event */

				
				css({
					'background-position': '0 ' + jQuery(this).height() + 'px'
				});


			});


		};

		

		initHomepage();

	


});