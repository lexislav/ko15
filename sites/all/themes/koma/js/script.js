jQuery(document).ready(function($) {
  function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }

  // Track submission events.
  $('#webform-client-form-1602').submit(function() {

    var senderr = false;
    // test errors
    if (!($('#edit-submitted-souhlasim-1').is(":checked"))) {
      console.log('no gdpr');
      senderr =  true;
    }
    if (!isEmail($('#edit-submitted-e-mail').val())) {
      console.log("email err");
      senderr =  true;
    }

    if(!senderr) {
      if(ga) {
         ga('send', 'event', 'button', 'click', 'poslat_poptavku');

      } else {
        console.log('missing ga');
      }
    }

  });
});
