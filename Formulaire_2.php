<?php

include 'lang/configlang.php';
?>

<!DOCTYPE html>
<html lang="fr">
<!-- lola -->
  <head>
   
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130283905-2"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
	  	function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'UA-130283905-2');
	</script>
    		  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>ServicesAuto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/imageOverlay.css" rel="stylesheet">
    <!-- Captcha  
    <script src='https://www.google.com/recaptcha/api.js?render=6LcTaX8UAAAAAGYLzWNz7uXyLw2uI_2tmlGRp8WL'></script>-->

  </head>

  <body id="page-top">



    <!-- Portfolio Modal precommander form-->
  
    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h3 class="text-center text-uppercase text-secondary mb-0"><?php  echo _contact_1; ?></h3>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label><?php  echo _contact_2; ?></label>
                  <input class="form-control" id="name" type="text" placeholder="*Nom & Prénom" required="required" data-validation-required-message="<?php  echo _contact_3; ?>">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label><?php  echo _contact_4; ?></label>
                  <input class="form-control" id="email" type="email" placeholder="*Email" required="required" data-validation-required-message="<?php  echo _contact_5; ?>">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label><?php  echo _contact_6; ?></label>
                  <input class="form-control" id="phone" type="tel" placeholder="N° téléphone">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label><?php  echo _contact_7; ?></label>
                  <textarea class="form-control" id="message" rows="5" placeholder="*Message" required="required" data-validation-required-message="<?php  echo _contact_8; ?>"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>

		<div class="col-12">
			<div id="form-recaptch"></div>
		</div>
       	      
	      <!--<input class="form-control"  id="g-recaptcha-response" name="g-recaptcha-response">
	      <div class="g-recaptcha" data-sitekey="6LcTaX8UAAAAAGYLzWNz7uXyLw2uI_2tmlGRp8WL"></div>
	      <div class="form-group">
    		<div class="g-recaptcha" data-sitekey="6LcTaX8UAAAAAGYLzWNz7uXyLw2uI_2tmlGRp8WL" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
    		<input class="form-control d-none" data-recaptcha="true" required data-error="Veuillez compléter le Captcha">
    		<div class="help-block with-errors"></div>
	      </div>-->	

              <br>
              <div id="success"></div>
	      <div class="form-group">
              	<button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton"><?php  echo _contact_9; ?></button>
              </div>
	      <p class="text-muted">
                            <strong>*</strong> <?php  echo _contact_10; ?>
	      </p>
            </form>
          </div>
        </div>
      </div>
    </section>



    <script src="https://google.com/recaptcha/api.js?onload=initRecaptcha&render=explicit"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
