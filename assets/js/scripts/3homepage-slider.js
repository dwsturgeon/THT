

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
			$win.on('resize', function(event) {
			  imageAdjust();
			  setContainerHeight();
			});
			zindexImages();
			$sliderImages.css('display', 'none');
			jQuery('div [data-slider-image="1"]' ).css('display', 'initial');
			setContainerHeight();




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

		setContainerHeight = function() {
			$sliderContainer.css({
				'height':  (600 / 1600) * $win.width() + 'px'
			});
		};

		initHomepage();

	


});