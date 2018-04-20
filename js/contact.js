jQuery(document).ready(function($) {
  jQuery("#theSubmit").on("click", function(e) {
    var first = $('[name="first"]').val();
    var last = $('[name="last"]').val();
    var email = $('[name="email"]').val();
    var phone  = $('[name="phone"]').val();
    var message = $('[name="message"]').val();
    var location = $('[name="location"]').val();
    var array = [first, last, email, phone, message];
    var error = false;
    for (var i = 0; i < array.length; i++) {
      if (array[i] == ""){
        var error = true;
        break
      }
    }
    if (error == true){
      $(".error").fadeIn()
    }
    else {
    var data = {
    action: 'mail_before_submit',
      "name": name,
      "first": first,
      "last": last,
      "phone": phone,
      "email": email,
      "message": message,
      "location":location,
      _ajax_nonce: $('#my_email_ajax_nonce').data('nonce'),
      };
      jQuery.post(window.location.origin + "/wp-admin/admin-ajax.php", data, function(data) {
      if (data == "error"){
          alert("error")
        }
        else {
          $(".error").hide()
          $(".thank-you").fadeIn("fast");
          var first = $('[name="first"]');
          var last = $('[name="last"]');
          var email = $('[name="email"]');
          var phone  = $('[name="phone"]');
          var message = $('[name="message"]');
          var array = [first, last, email, phone, message];
          for (var i = 0; i < array.length; i++) {
              array[i].val("");
          }
        }
      });
    }
  });
});
