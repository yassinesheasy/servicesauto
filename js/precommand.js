$(function() {

  $("#precommandForm input,#precommandForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      //var selectservice = $("select#selectservice").val();
      var daterdv = $("input#daterdv").val();
      var addressfrom = $("input#inputAddressFrom").val();
      var cityfrom = $("input#inputCityFrom").val();
      var statefrom = $("input#inputStateFrom").val();
      var addressto = $("input#inputAddressTo").val();
      var cityto = $("input#inputCityTo").val();
      var stateto = $("input#inputStateTo").val();
      var name = $("input#name").val();
      var email = $("input#email").val();
      var phone = $("input#phone").val();
      var message = $("textarea#message").val();
      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#sendMessageButton1");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "././mail/precommand.php",
        type: "POST",
        data: {
	  daterdv: daterdv,
	  inputAddressFrom: inputAddressFrom,
	  inputCityFrom: inputCityFrom,
	  inputStateFrom: inputStateFrom,
	  inputAddressTo: inputAddressTo,
	  inputCityTo: inputCityTo,
	  inputStateTo: inputStateTo,
          name: name,
          phone: phone,
          email: email,
          message: message
        },
        cache: false,
        success: function() {
          // Success message
          $('#success').html("<div class='alert alert-success'>");
          $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-success')
            .append("<strong>Votre precommande a ete enregistree, nous vous recontacterons dans les plus brefs delais. </strong>");
          $('#success > .alert-success')
            .append('</div>');
          //clear all fields
          $('#precommandForm').trigger("reset");
        },
        error: function() {
          // Fail message
          $('#success').html("<div class='alert alert-danger'>");
          $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-danger').append($("<strong>").text("Desole " + firstName + ", Le serveur mail ne repond plus. Veuillez reessayer plus tard."));
          $('#success > .alert-danger').append('</div>');
          //clear all fields
          $('#precommandForm').trigger("reset");
        },
        complete: function() {
          setTimeout(function() {
            $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
  $('#success').html('');
});
