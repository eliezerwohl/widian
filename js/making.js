jQuery(document).ready(function($) {
  $(".fa-angle-up").on("click", function(e){
    e.preventDefault();
    $('html, body').animate({
		    scrollTop: 0
		}, 1000);
  })
  $(".service-section a").on("click", function(e){
    debugger
    e.preventDefault();
    var top = $(this.hash).offset().top
    $('html, body').animate({
        scrollTop: top
    }, 1000);
  })
});
