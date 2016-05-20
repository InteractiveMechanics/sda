$(function(){
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
});
		