jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

var
  $doc = jQuery(document),
  $win = jQuery(window);

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });
  
});



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