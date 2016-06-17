$(function(){
	
  $('.tribe-event-categories').prev().css('display','inline').css('font-size', '1.33em').css('font-weight', '300').css('color', '#7f7d8a');
  $('#tribe-events-bar').addClass('container');
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
  
    $('.lightgallery').lightGallery({
        selector: '.artwork-container',
        download: false
    });
    
  
  
    $(".navbar-toggle").on("click", function () {
		$(this).toggleClass("active");
	});
  
    // Instagram feed
    if ($('#social-feed').length){
        var feed = new Instafeed({
            get: 'user',
            userId: '223214223',
            clientId: '74ab1efd68a44e719aa40353626d795c',
            accessToken: '223214223.74ab1ef.7c80534969ae46389520dcf62d612dae',     
            limit: 20,
            target: 'social-feed',
            template: '<div class="grid-item grid-item--small"><a href="{{link}}"><img src="{{image}}" /></a></div>',
            after: function() {
                for (i=7;i<25;i++){
                    $('#social-feed .grid-item--small:eq(' + i + ')').addClass('hidden-xs');
                }
                for (i=18;i<25;i++){
                    $('#social-feed .grid-item--small:eq(' + i + ')').addClass('hidden-sm');
                }
                for (i=18;i<25;i++){
                    $('#social-feed .grid-item--small:eq(' + i + ')').addClass('hidden-lg');
                }
    
                var gridlg01 = $('.grid-item--large-01').detach();
                var gridlg02 = $('.grid-item--large-02').detach();
                var gridlg03 = $('.grid-item--large-03').detach();
                var gridlg04 = $('.grid-item--large-04').detach();
    
                $('#social-feed .grid-item--small:eq(0)').after(gridlg01);
                $('#social-feed .grid-item--small:eq(3)').after(gridlg02);
                $('#social-feed .grid-item--small:eq(7)').after(gridlg03);
                
                $('.grid').isotope({
                    // options
                    itemSelector: '.grid-item',
                    layoutMode: 'masonry',
                });
            }
        });
        feed.run();   
    }
});




		