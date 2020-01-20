function sendEmail() {

  $("#mail_success_message").addClass("hide-section");
  $("#mail_error_message").addClass("hide-section");
  var contact_name = $("#contact_name").val();
  var contact_email = $("#contact_email").val();
  var contact_phone = $("#contact_phone").val();
  var contact_subject = $("#contact_subject").val();
  var contact_message = $("#contact_message").val();

  if (contact_name.trim() == '') {
    showErrorMail('Por favor ingrese su nombre');
    return;
  }

  if (contact_phone.trim() == '') {
    showErrorMail('Por favor ingrese un teléfono');
    return;
  }

  if (contact_email.trim() == '') {
    showErrorMail('Por favor ingrese un email válido');
    return;
  }

  if (contact_message.trim() == '') {
    showErrorMail('Por favor ingrese su mensaje');
    return;
  }

  var data = {
      contact_name: contact_name,
      contact_email: contact_email,
      contact_phone: contact_phone,
      contact_subject: contact_subject,
      contact_message: contact_message
  };

  $.ajax({
      type: 'POST',
      url: "send_form_email.php",
      data: data,
      success: function(result){
        if (result.status) {
          $("#mail_success_message").removeClass("hide-section");
          $("#mail_error_message").addClass("hide-section");
          $("#contact_name").val('');
          $("#contact_email").val('');
          $("#contact_phone").val('');
          $("#contact_subject").val('');
          $("#contact_message").val('');
        } else {
          showErrorMail(result.data);
        }
      },
      error: function(message) {
        showErrorMail(message.data);
      }
  });
}

function showErrorMail(error) {
  $("#mail_success_message").addClass("hide-section");
  $("#mail_error_message").removeClass("hide-section");
  $("#mail_error_message_content").text(error);
}
