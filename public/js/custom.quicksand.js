$(document).ready(function(){

	
	// Initialize prettyPhoto
	$(".portfolio a[rel^='prettyPhoto']").prettyPhoto({
		theme:'pp_default', 
		autoplay_slideshow: false, 
		overlay_gallery: false, 
		show_title: false,
		counter_separator_label: '/',
		social_tools: false
	});

	// clone portfolio items 
	var $portfolioClone = $(".portfolio").clone();
	
	// Attempt to call Quicksand on every click event handler
	$(".filter li").click(function(e){
		
		$(".filter li").removeClass("current");	
		
		// Get Filter type
		var $filterClass = $(this).attr("class");

		if ( $filterClass == "all" ) {
			var $filteredPortfolio = $portfolioClone.find("li");
		} else {
			var $filteredPortfolio = $portfolioClone.find("li[data-type~=" + $filterClass + "]");
		}
		
		//Set variable for items in a row; default is 4
		var items_in_a_row = 4;
		
		// Remove current class 
		$( ".filter li" ).removeClass( "current" ); 
		
		// no. of columns will depend on portfolio layout for mobile, tablet or screen view
		if ( $( '#items' ).hasClass('three-columns') ) { items_in_a_row = 3	}
		else if ( $( '#items' ).hasClass('with-sidebar') ) { items_in_a_row = 3 }
		else if ( $( '#items' ).hasClass('two-columns') ) { items_in_a_row = 2 }
		else { items_in_a_row = 4 }
		
		var $filterType = $(this).attr("class").split(" ")[0]; 
		$(this).addClass("current"); 
		
		if ($filterType == "all") { 
			var $filteredDataType = $portfolioClone.find("li[data-type]"); 
			var i = 1; 
			
			$filteredDataType.each(function() {
				var $self = $(this);
				$self.removeClass("alpha omega");
				
				if(i === 1) {
					$self.addClass("alpha");
				}
				else if( i === items_in_a_row ) {
					$self.addClass("omega");
				}
				
				if ( i === items_in_a_row ) {
					i = 1;
				}
				else {
					i++;
				}
			});
		
		}
		else {
			var $filteredDataType = $portfolioClone.find("li[data-type*=" + $filterClass + "]");
			var i = 1;
			
			$filteredDataType.each(function() {
				var $self = $(this);
				$self.removeClass("alpha omega");
				
				if ( i === 1 ) {
					$self.addClass("alpha");
				}
				else if ( i === items_in_a_row ) {
					var $html = $self.html();
					$self.addClass("omega");
				}
				
				if( i === items_in_a_row ) {
					i = 1;
				}
				else {
					i++;
				}
			});
		}
		
		// Call quicksand
		$(".portfolio").quicksand( $filteredPortfolio, { 
			duration: 800,
			easing: 'linear',
			adjustHeight: 'dynamic',
			useScaling: true,
			enhancement: function() {
				// portfolio item rounded 			
				$(document).ready(function(){		
					if(jQuery().roundThis){
						if ( !$( 'html' ).hasClass('ie8') ) {
							$(".portfolio-items").find('.overlay').find('img').roundThis($(this).width());
						}						
					}
				});
	        }
		}, function(){
		
			//add prettyPhoto to cloned items
			$(".portfolio a[rel^='prettyPhoto']").prettyPhoto({
				autoplay_slideshow: false, 
				overlay_gallery: false, 
				show_title: true
			});
						
			//portfolio item hover function
			$('.overlay').hover(			
				function(){				
					$(this).find('img').animate({ opacity:'0.1' }, 450, 'easeInOutCubic');
					$(this).find('.icon-view').stop(true, true).animate({ opacity: '0.75' }, 10, 'swing'); //, marginTop: '-0.5em'
					$(this).find('.icon-link').stop(true, true).animate({ opacity: '0.75' }, 10, 'swing'); //, marginTop: '-0.5em'
					$(this).find('h5').animate({ opacity: '1' }, 10, 'linear');
				},function(){					
					$(this).find('h5').animate({ opacity: '0.0' }, 300, 'linear');
					$(this).find('.icon-view').stop(true, true).animate({ opacity: '0.0' }, 10, 'swing'); //, marginTop: parentHeight
					$(this).find('.icon-link').stop(true, true).animate({ opacity: '0.0' }, 10, 'swing');//, marginTop: parentHeight					
					$(this).find('img').animate({ opacity: '1' }, 450, 'easeInOutCubic');
				}
			);				
			
			$('.overlay .icon-view, .overlay .icon-link').hover(			
				function(){				
					$(this).stop(true, true).animate({ opacity: '1' }, 20);					
				},function(){
					$(this).stop(true, true).animate({ opacity: '0.75' }, 20);	
				}
			);			
			
			// portfolio callback
			$( '.portfolio-content-link' ).click( function() {
				$( '#loader-img' ).css('visibility', 'visible').fadeIn(1200); 
			});
			
			// add click event for each item		
			$( ".portfolio-content-link" ).click( getPortfolio );	
			
			
		});


		$(this).addClass("current");

		e.preventDefault();
	})
});