<?phpinclude 'lang/configlang.php';?><!DOCTYPE html><html lang="fr"><!-- lola -->  <head>   	<!-- Global site tag (gtag.js) - Google Analytics -->	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130283905-2"></script>	<script>  		window.dataLayer = window.dataLayer || [];	  	function gtag(){dataLayer.push(arguments);}  		gtag('js', new Date());  		gtag('config', 'UA-130283905-2');	</script>    		      <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    <meta name="description" content="">    <title>ServicesAuto</title>    <!-- Bootstrap core CSS -->    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    <!-- Custom fonts for this template -->    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet" type="text/css">    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" type="text/css">    <!-- Plugin CSS -->    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet" type="text/css">    <!-- Custom styles for this template -->    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-freelancer/5.1.2/css/freelancer.min.css" rel="stylesheet">    <link href="css/imageOverlay.css" rel="stylesheet">    <link href="css/datetime.css" rel="stylesheet">    <!-- Captcha      <script src='https://www.google.com/recaptcha/api.js?render=6LcTaX8UAAAAAGYLzWNz7uXyLw2uI_2tmlGRp8WL'></script>-->  </head>  <body id="page-top">    <!-- Portfolio Modal precommander form-->      <!-- Contact Section -->    <section id="contact">      <div class="container">        <h3 class="text-center text-uppercase text-secondary mb-0">Commande</h3>        <hr class="star-dark mb-5">        <div class="row">          <div class="col-lg-8 mx-auto">            <!-- To configure the contact form email address, go to mail/command.php and update the email address in the PHP file on line 19. -->            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->            <form name="sentMessage" id="command" novalidate="novalidate">            <!--   <div class="control-group">                <div class="form-group floating-label-form-group controls mb-0 pb-2">                  <label><?php  echo _contact_2; ?></label>                  <input class="form-control" id="name" type="text" placeholder="*Nom & Prénom" required="required" data-validation-required-message="<?php  echo _contact_3; ?>">                  <p class="help-block text-danger"></p>                </div>              </div>            --><div class="control-group">        <legend class="col-md-4">Sélectionné un service</legend>    <div class="form-group floating-label-form-group controls mb-0 pb-2"  id="ServiceType">  <!--<input class="form-control" id="phone" type="text" placeholder="*Nom & Prénom" required="required" data-validation-required-message="<?php  echo _contact_3; ?>">      -->    <select class="form-control" id="selectserviceType">    <option>amener ma voiture chez mon garagiste </option>    <option>passage au controle technique</option>    <option>Chauffeur privé</option>    <option>déplacement de vehicule d'un point A à un point B</option>            </select>   </div>        </div>                                       <div class="checkbox form-check form-inline">      <div class="form-group col-xs-10 ">                     <label for="checkboxes-1">      voulez vous que l'on vous raméne votre véhicule après le service : oui           </label>      </div>      <div class="form-group col-xs-2">          <input type="checkbox" class="form-check-input" name="checkboxes" id="CheckBoxRV" value="2">      </div>      	</div>            <h6>                                  Date et heure de prise en charge du vehicule            </h6>             	<div class="row">		<div class="col-xs-4">						<div class="form-group">				<div class="input-group datepicker required">					<input type="text" id="dateserviceselected" class="form-control" readonly>					<span class="input-group-addon">						<span class="fa fa-calendar"></span>					</span>				</div>			</div>		</div>		<div class="col-xs-4">						<div class="form-group">				<div class="input-group timepicker required">					<input type="text" id="timeserviceselected" class="form-control" readonly>					<span class="input-group-addon">						<span class="fa fa-clock-o"></span>					</span>				</div>			</div>		</div>	</div>                    <br>              <div id="success"></div>	      <div class="form-group">              	<button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton"><?php  echo _contact_9; ?></button>              </div>	      <p class="text-muted">                            <strong>*</strong> <?php  echo _contact_10; ?>	      </p>            </form>                  </div>        </div>      </div>    </section>    <!-- Bootstrap core JavaScript -->    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    <!-- Plugin JavaScript -->    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/locale/nl.js"></script>	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>    <!-- Contact Form JavaScript -->    <script src="js/jqBootstrapValidation.js"></script>    <script src="js/command.js"></script>      <!-- Custom scripts for this template -->    <script src="js/freelancer.min.js"></script>    <script src="js/datetime.js"></script>  </body></html>