jQuery(document).ready(function($){
// ios fix
var deviceAgent = navigator.userAgent.toLowerCase();
  if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
    $('.scroll').css('background-attachment', 'initial');
  }
})