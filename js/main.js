jQuery(document).ready(function(e) {
  e( document ).ajaxError(function( event, jqxhr, settings, exception ) {
      if ( jqxhr.status== 401 || jqxhr.status== 404  ) {
          alert( "Sorry, there has been an error sending your message.  Please contact drwidiannicola@gmail.com directly" );
      }
  });

    navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad)/) && e(".scroll").css("background-attachment", "initial"),
    jQuery("#theSubmit").on("click", function(a) {
      var first = e('[name="first"]').val();
      var last = e('[name="last"]').val();
      var email = e('[name="email"]').val();
      var phone  = e('[name="phone"]').val();
      var message = e('[name="message"]').val();
      var location = e('[name="location"]').val();
      var agree = e('[name="agree"]').val();
      var array = [first, last, email, phone, message, agree];
      var error = false;
      debugger
      if  (e('[name="agree"]').is(":checked") == false) {
        var error = true;
      }
      for (var i = 0; i < array.length; i++) {

        if (array[i] == ""){
          debugger
          var error = true;
          break
        }

      }
      if (error == true){
        e(".error").fadeIn()
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
        _ajax_nonce: e('#my_email_ajax_nonce').data('nonce'),
        };
        jQuery.post(window.location.origin + "/wp-admin/admin-ajax.php", data, function(data) {
          debugger
        if (data == "error"){
            alert("error")
          }
          else {
            $(".error").hide()
            $(".thank-you").fadeIn("fast");
            $('#agree').prop('checked', false); // Unchecks it
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
            })
        }
    }), e(".showHide").on("click", function() {
        e(this).parent().find(".answer").fadeToggle(),
        e(this).find(".toggleIcon").toggleClass("fa-caret-right fa-caret-down")
    }), e(".fa-angle-up").on("click", function(a) {
        a.preventDefault(), e("html, body").animate({
            scrollTop: 0
        }, 1e3)
    }), e(".service-section a").on("click", function(a) {
        a.preventDefault();
        var n = e(this.hash).offset().top;
        e("html, body").animate({
            scrollTop: n
        }, 1e3)
    }), jQuery(".showHide-home").on("click", function() {
        jQuery(".showHide-home").slideUp("fast", function() {
            jQuery(".more-clinicians").slideDown("fast")
        })
    })
});
