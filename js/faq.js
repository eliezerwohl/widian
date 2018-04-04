
jQuery(document).ready(function($) {
  $(".showHide").on("click", function(){
      $(this).parent().find('.answer').toggle()
      $(this).find('.toggleIcon').toggleClass("fa-caret-right fa-caret-up" )
  })
})
