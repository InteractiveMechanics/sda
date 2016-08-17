$(function(){
	
  $('.tribe-event-categories').prev().css('display','inline').css('font-size', '1.33em').css('font-weight', '300').css('color', '#7f7d8a');
  $('#tribe-events-bar').addClass('container');
  $('.subnav-item').children('a').addClass('subnav-link');
  $('.subnav-item').children('ul').addClass('subnav-dropdown');
  $('.nav-support-btn').children('a').addClass('nav-support-btn-link');
  $('.previous-events').children('span').empty();

  
  if($('#menu-item-24658').hasClass('active')) {
	  $('#menu-item-76').removeClass('active');
  }
  
  if(window.location.href.indexOf("event") > -1) {
       $('#menu-item-76').removeClass('active');
       ($('#menu-item-24658').addClass('active'))
       
    }
    
  
  if (!$('.tribe-events-nav-previous').children('a').hasClass('previous-events')) {
  		$('.tribe-events-nav-previous').children('a').addClass('previous-events');
  }
  
  
  if (!$('.tribe-events-nav-next').children('a').hasClass('next-events')) {
	  $('.tribe-events-nav-next').children('a').addClass('next-events');
  }
  
  
      
  $('#select-category').on('changed.bs.select', function (e) {
    if (e.target.value)
        location.replace('/sda/calendar/category/' + e.target.value);
    else
        location.replace('/sda/calendar/');
  });
  
  
  //to execute styles for wp-pagenavi
/*
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
*/


	if ($('.smaller').length == 2) {
		$('.smaller').eq(1).removeClass('smaller');
	}
  
	if ($('.larger').length == 2) {
		$('.larger').eq(0).removeClass('larger');
	}

  
  
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
    arrows: false,
    dots: true,
    slidesToShow: 4,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
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
	
	if ($('.single-member-product').length >= 9) {
		$('#products-text').hide();
		$('#products-form').show();
		$('#products-table').show();
		$('#products-pagination').show();
		
	} else {
		$('#products-text').show();
		$('#products-form').hide();
		$('#products-table').hide();
		$('#products-pagination').hide();
		
		
	}
	
	if ($('.single-member-service').length >= 9) {
		$('#services-text').hide();
		$('#services-form').show();
		$('#services-table').show();
		$('#services-pagination').show();
		
	} else {
		$('#services-text').show();
		$('#services-form').hide();
		$('#services-table').hide();
		$('#services-pagination').hide();
		
		
	}
	
  
    // Instagram feed
    if ($('#social-feed').length){
        var feed = new Instafeed({
            get: 'user',
            userId: '1744052725',
            clientId: '	9bb2877a94094e058276dfbf174ab445',
            accessToken: '1744052725.9bb2877.49e3a797fc334b4999198e175a92666c',     
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






		