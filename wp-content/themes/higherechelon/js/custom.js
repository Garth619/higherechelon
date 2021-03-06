// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	
	// fires section one homepage animations once document is ready
	
	$('body').addClass('animation_ready');
	
	var windowWidth = $(window).width();
	
	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
/*
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
*/
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
/*
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
*/
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    createWaypoint('section_one', null, null, 1, loadImages, false);







    /* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if($('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              $(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                $(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
    
    
    
		if (windowWidth < 768) {

    	createWaypoint('section_one', '.header_right', 'hide', 85, null, true);
    	
    	createWaypoint('internal_main', '.header_right', 'hide', 85, null, true);
    
    }
    
    
    if (windowWidth < 1390) {
	    
   	 	createWaypoint('section_two', '.fixed_tablet_header', 'visible', 0, null, true);
   	 	
	 	 	createWaypoint('internal_main', '.fixed_tablet_header', 'visible', -200, null, true);
	 	 	
	 	 	createWaypoint('footer_trigger', '.fixed_tablet_header', 'stop', 122, null, true);
    
   	}
   	
   	
   	
   	if (windowWidth > 1389) {
	   	
	   	createWaypoint('footer_trigger', '#header_trigger', 'stop', 80, null, true);
	   	
	  }
   
   
		createWaypoint('section_two', '#header_trigger', 'visible', 0, null, true);
   
		createWaypoint('internal_main', '#header_trigger', 'visible', -200, null, true);
		
		
		
		
		
		
		
		
		createWaypoint('section_two', '#section_two', 'visible', 350, null, true);
		
		createWaypoint('learn_trigger', '#learn_trigger', 'visible', 450, null, true);
		
		createWaypoint('section_three', '#section_three', 'visible', 400, null, false);
		
		createWaypoint('section_four', '#section_four', 'visible', 400, null, true);
		
		createWaypoint('lead_trigger', 'span.lead_title', 'visible', -430, null, true);
		
		createWaypoint('sec_four_title_trigger', '#sec_four_title_trigger', 'visible', 490, null, false);
		
		createWaypoint('footer_trigger', '#footer_trigger', 'visible', 530, null, false);
		
		createWaypoint('internal_main', '#internal_main', 'visible', 200, null, false);
		
		createWaypoint('about_middle_trigger', '#about_middle_trigger', 'visible', 450, null, false);
		
		
		createWaypoint('about_page_top_trigger', '#about_page_top_trigger', 'visible', -50, null, true);
		
		createWaypoint('about_bottom_trigger', '#about_bottom_trigger', 'visible', 250, null, true);
		
	
		
		
       
 
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		 /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    function wistiaLoad() {
     	jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        console.log('wistia load:', textStatus); // Success
    		});
   	}

    // examples:

    jQuery(".banner-box-1").one("mouseenter", function(e){
       wistiaLoad();
    });

    createWaypoint('section_two', null, null, '100%', wistiaLoad, false)
    


		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);




        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */


	function seconeSlider() {
    
    if (windowWidth < 768) {
        
      
    	$('.sec_one_slide').wrapAll('<div class="sec_one_slider"></siv');
    	   		
    		
    } 
    
  };
	

	seconeSlider();




$('.sec_one_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	dots:true,
	fade:true,
	mobileFirst:true,
	responsive: [
    {
      breakpoint: 768,
      settings: "unslick"
    }
	]
 });
 
 
 
 
 $(".sec_three_slider").slick({
   infinite: true,
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   dots: true,
   fade: true,
   autoplay: true,
   autplaySpeed: 5000,
   responsive: [
     {
       breakpoint: 1175,
       settings: {
         adaptiveHeight: true,
         autoplay: true,
         autplaySpeed: 5000,
       }
     }
   ]
 });
 
 
 
 
 
 $('.sec_four_logos').slick({
  infinite: true,
	mobileFirst:true,
	arrows:false,
	dots:true,
	rows:3,
	slidesPerRow:3,
	responsive: [
    {
      breakpoint: 1066,
      settings: "unslick"
    }
	]
 });
 
 
 
 
 
 
 $('.our_services_boxes').slick({
  infinite: true,
	mobileFirst:true,
	arrows:false,
	dots:true,
	responsive: [
    {
      breakpoint: 1265,
      settings: "unslick"
    }
	]
 });
 
 

	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");



// Sec Two Boxes Hover


function secotwoHover() {
    
    if (windowWidth < 1265) {
	    
	    
	    
	    $('.our_services_single_box').addClass('tablet');
        
        
      $('.our_services_single_box').on('click', function(e) {
          
      	
      	$('.our_services_single_box').removeClass('open');  	
      	
      	$(this).addClass('open');  	 	
      
      
      });
        
      
    } 
    
    
        
};



secotwoHover();



// dropdown form


$('.interested_input').on('click', function(e) {
  

	$('.interested_dropdown').slideToggle(400);


});



$('.interested_dropdown ul li').on('click', function(e) {
  

	var inputtext = $(this).text();
	
	$('span.input_text').replaceWith('<span class="input_text">' +inputtext+ '<span>')
	
	$('.interested_dropdown').slideUp(400);
	
	// old gravity form
	
	$('input#input_1_8').val(inputtext);
	
	// new salesforce
	
	$('#myinput_business_unit select').val(inputtext).change();
	
	
	

});



	$(document).click(function (e){

		var container = $(".interested_wrapper");

		if (!container.is(e.target) && container.has(e.target).length === 0){

			$('.interested_dropdown').slideUp(400);
		
		}

	}); 
	

	
	// case results
	
	
	$('.cr_input').on('click', function(e) {
	  
		$(this).next('.cr_list').slideToggle(250);
	
	});
	
	
	$('.cr_list ul li').on('click', function(e) {
  

		var caseresultstext = $(this).text();
		
		$(this).closest('.cr_list').prev('.cr_input').find('span').replaceWith('<span>' +caseresultstext+ '<span>');
	
		$('.cr_list').slideUp(250);
	
	});
	
	
	$(document).click(function (e){

		var container = $(".cr_dropdown");

		if (!container.is(e.target) && container.has(e.target).length === 0){

			$('.cr_list').slideUp(250);
		
		}

	}); 
	
	
	$('.cr_list ul li').on('click', function(e) {
	  
	
		var dataFilter = $(this).attr('data-filter');
		
		$('.single_case_result').fadeOut(300);
		
		$('.'+dataFilter).delay(600).fadeIn(400);
		
	
	});
	
	
	// add current menu item functionality to non wp menus in sidebar for Case Studies templets and blog recent posts and blog archives
	
	
	var pgurl = window.location.href;
	
	// case studies
	
	$("ul.case_studies_list li, .sidebar_blog ul li").each(function(){
  
  if($(this).find('a').attr("href") == pgurl)
    
    $(this).addClass("current_page");
	
	});
	
	

	
	// nav 
	
	function desktopNav() {
	    
	    if (windowWidth > 1389) {
	        
	        // custom class added on wordpress menu page for the nav dropdown
	        
	        
	        // our services --> human capital resources
	      
	      	$('li.our_services ul.sub-menu li.human_captial_resources').clone().appendTo('.nav_transition.our_services_nav .nav_left_inner .desktop_menu_clone');
	      	
	      	
	      	// our services --> technology services
	      
	      	$('li.our_services ul.sub-menu li.technology_services').clone().appendTo('.nav_transition.our_services_nav .nav_right_inner .desktop_menu_clone');
	      	
	      	
	      	
	      	// about --> about higher echelon
	      	
	      	
	      	$('li.about_nav ul.sub-menu li.about_higher_echelon').clone().appendTo('.nav_transition.about_nav .nav_left_inner .desktop_menu_clone');
	      	
	      	
					// about --> media
	      	
	      	
	      	$('li.about_nav ul.sub-menu li.about_media').clone().appendTo('.nav_transition.about_nav .nav_right_inner .desktop_menu_clone');
					
					
					// mouseover to open the dropdown
					
					
					$('.header_middle nav ul.menu > li.menu-item').on('mouseover', function(e) {
					  
					
						$('.header_middle nav ul.menu > li.menu-item').removeClass('active');
						
						$('.nav_dropdown').removeClass('open');
						
						$('body').removeClass('fixed');
					
					
					});
					
					
					$('.header_middle nav ul.menu > li.menu-item.menu-item-has-children').on('mouseover', function(e) {
					  
					
						$('.header_middle nav ul.menu > li.menu-item.menu-item-has-children').removeClass('active');
						
						$(this).addClass('active');
						
						$('.nav_dropdown').addClass('open');
						
						$('body').addClass('fixed');
						
						
					});
					

						
						
					$('.header_middle nav ul.menu > li.menu-item.menu-item-has-children.our_services').on('mouseover', function(e) {
						
						$('.nav_transition.about_nav').fadeOut(400);
						
						$('.nav_transition.our_services_nav ').fadeIn(400);
					
					});
					
					
					
					$('.header_middle nav ul.menu > li.menu-item.menu-item-has-children.about_nav').on('mouseover', function(e) {
						
						$('.nav_transition.about_nav').fadeIn(400);
						
						$('.nav_transition.our_services_nav ').fadeOut(400);
					
					});
						
				
				
				// close nav when the cursor wanders away from the nav
				
				
					
						
						$('.header_left, .header_middle a.phone, .header_right, .nav_close_wrapper').on('mouseover', function(e) {
						  
							
							$('.nav_dropdown').removeClass('open');
							
							$('.header_middle nav ul.menu > li.menu-item').removeClass('active');
							
							$('body').removeClass('fixed');
						
						
						});
						
						
						
						function myscroll() {
							
							var scroll = $(window).scrollTop();

								if (scroll >= 905) {
       
									$('#header_trigger').removeClass('open_animation');
								
									//console.log('GARRETT');
								
    						} 
							
						}
						
						
						$('.fixed_logo_animation .menu_wrapper').on('click', function(e) {
						  
							$('#header_trigger').addClass('open_animation');
							
							$(window).one('scroll', myscroll);
							
						});
							
				}
				
				if (windowWidth < 1390) {
					 
					$('.header_middle nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
						 	
					 	$(this).toggleClass('open');
					   
					 	$(this).next('ul.sub-menu').slideToggle(400);
					 
					});
					
					
					$('.open_close_wrapper, .fixed_tablet_menu_wrapper').on('click', function(e) {
					  
						$('.header_middle nav').slideToggle(400);
						
						$('.header_middle').toggleClass('white_bg');
						
						$('.menu_wrapper').toggleClass('open');
						
						$('.mobile_close').toggleClass('open');
											
					});
					
					
										
					
					
					$('.fixed_tablet_menu_wrapper').on('click', function(e) {
					  
					
						$('header').addClass('fixed_open');
												
						$('.fixed_tablet_header').addClass('hide');
					
					
					});
					
					
					
					$('.open_close_wrapper').on('click', function(e) {
					  
					
						$('header').removeClass('fixed_open');
						
						$('.fixed_tablet_header').removeClass('hide');
					
					
					});

					
				}
				
				
				if (windowWidth < 768) {
					
					$('.header_middle nav ul.menu > li > ul.sub-menu > li > a').on('click', function(e) {
						 	
						$(this).toggleClass('open');
					   
						$(this).next('ul.sub-menu').slideToggle(400);
					 
					});
					
					
				}
	    
		};
		
	
	desktopNav();


  
}); // document ready