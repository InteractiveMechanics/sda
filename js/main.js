$(function(){
	
  $('.tribe-event-categories').prev().css('display','inline').css('font-size', '1.33em');
  $('.subnav-item').children('a').addClass('subnav-link');
  
  
  //to execute styles for wp-pagenavi
  $('.smaller').each(function() {
	  if( !$(this).prev().hasClass('previouspostslink') ) {
		  $(this).removeClass('smaller');
	  }
  });	
  
  $('.larger').each(function() {
	  if( !$(this).next().hasClass('nextpostslink') ) {
		  $(this).removeClass('larger');
	  }
  });
  
  $('.current').each(function() {
	  if( !$(this).siblings().hasClass('nextpostslink') ){
		  $(this).css('border-top-right-radius', '30px').css('border-bottom-right-radius', '30px').css('padding-right', '20px');
	  }
  });
  
   $('.current').each(function() {
	  if( !$(this).siblings().hasClass('previouspostslink') ){
		  $(this).css('border-top-left-radius', '30px').css('border-bottom-left-radius', '30px').css('padding-left', '20px');
	  }
  });
  
  
  $('a[title="Support"]').addClass('nav-support-btn-link');
  
  
  
  
  

  
 
  
	
  $('.homepage-slider').slick({
    arrows: true,
    dots: false,
    slidesToShow: 4,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        arrows: false
        
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });
  
  $('.grid').isotope({
  // options
  itemSelector: '.grid-item',
  layoutMode: 'masonry',
  });
  
  $('.lightgallery').lightGallery({
	  selector: '.artwork-container'
  });
  
  
  $(".navbar-toggle").on("click", function () {
		$(this).toggleClass("active");
	});
  
  // Instagram feed
/*
  var feed = new Instafeed({
	  	get: 'user',
	  	userId: '1744052725',
        clientId: '74ab1efd68a44e719aa40353626d795c',
        accessToken: '223214223.74ab1ef.7c80534969ae46389520dcf62d612dae',     
        limit: 5,
        target: '#social-feed',
        template: '<a href="{{link}}"><img src="{{image}}" /></a>' 
        });
    feed.run();   
*/
});


		