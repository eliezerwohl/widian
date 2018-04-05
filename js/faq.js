
jQuery(document).ready(function($) {
  $(".showHide").on("click", function(){
      $(this).parent().find('.answer').fadeToggle()
      $(this).find('.toggleIcon').toggleClass("fa-caret-right fa-caret-up" )
  })
})
