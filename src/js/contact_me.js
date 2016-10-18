$(document).ready(function() {
  $("#feedbackSubmit").click(function() {
    //clear any errors
    contactForm.clearErrors();

    //do a little client-side validation -- check that each field has a value and e-mail field is in proper format
    var hasErrors = false;
    $('#contactForm input,textarea').each(function() {
      if (!$(this).val()) {
        hasErrors = true;
        contactForm.addError($(this));
      }
    });
    var $email = $('#email');
    if (!contactForm.isValidEmail($email.val())) {
      hasErrors = true;
      contactForm.addError($email);
    }

    //if there are any errors return without sending e-mail
    if (hasErrors) {
      return false;
    }

    //send the feedback e-mail
    $.ajax({
      type: "POST",
      url: "contact_me.php",
      data: $("#contactForm").serialize(),
      success: function(data)
      {
        contactForm.addAjaxMessage("Thanks!! Message Received!!", false);
      },
      error: function(response)
      {
        contactForm.addAjaxMessage("Oops! Something went wrong and we couldn't send your message.", true);
      }
   });
    return false;
  }); 
});

//namespace as not to pollute global namespace
var contactForm = {
  isValidEmail: function (email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  },
  clearErrors: function () {
    $('#emailAlert').remove();
    $('#contactForm .help-block').hide();
    $('#contactForm .form-group').removeClass('has-error');
  },
  addError: function ($input) {
    $input.siblings('.help-block').show();
    $input.parent('.form-group').addClass('has-error');
  },
  addAjaxMessage: function(msg, isError) {
    $("#feedbackSubmit").after('<div id="emailAlert" class="alert alert-' + (isError ? 'danger' : 'success') + '" style="margin-top: 5px;">' + $('<div/>').text(msg).html() + '</div>');
  }
};
