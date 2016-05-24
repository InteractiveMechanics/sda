$(function(){
	
  $('.tribe-event-categories').prev().css('display','inline').css('font-size', '1.33em');
	
	
  $('.homepage-slider').slick({
    arrows: true,
    dots: false,
    slidesToShow: 4
  });
  
  $('.grid').isotope({
  // options
  itemSelector: '.grid-item',
  layoutMode: 'masonry',
  });
  
  // Instagram feed
/*
  var feed = new Instafeed({
        get: 'popular',
        clientId: '74ab1efd68a44e719aa40353626d795c',
        accessToken: '223214223.74ab1ef.7c80534969ae46389520dcf62d612dae',        
        limit: 5,
        target: '#social-feed',
        template: '<a href="{{link}}"><img src="{{image}}" /></a>' 
        });
    feed.run();   
*/
});


		