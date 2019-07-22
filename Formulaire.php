
<html lang="fr">

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
  <body>
<form class="form-horizontal" METHOD=POST ENCTYPE="text/plain" ACTION="mailto:c.yassine@hotmail.com">
<fieldset >

    <legend class="col-md-4">Type de service</legend>
    
<div class="form-group" id="ServiceType">
    
    <div class="col-md-4">

    <select class="form-control" id="sel1">
    <option>amener ma voiture chez mon garagiste </option>
    <option>passage au controle technique</option>
    <option>Chauffeur privé</option>
    <option>déplacement de vehicule d'un point A à un point B</option>
        
    </select>   
    </div>

    <div class="col-md-4">
  <div class="checkbox form-check">
    <label for="checkboxes-1">
      restitution du véhicule après le service
      <input type="checkbox" class="form-check-input" name="checkboxes" id="checkboxes-1" value="2">
        
    </label>
	</div>

  </div>

</div>
    



    </fieldset>

  
    
    <fieldset>
        <legend class="col-md-4">Date et heure</legend>
                <div class='col-md-4'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type="datetime-local" id="meeting-time"
       name="meeting-time" value="2018-06-12T19:30"
       min="2018-06-07T00:00" max="2018-06-14T00:00">
                    
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <!--
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
-->

    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
    </div>

    </fieldset>
<!-- Form Name -->




<fieldset>
    
  <legend class="col-md-4">Votre Identiter</legend>
    
    
    <div class="form-group" id="identiter">
  
  
  <div class="col-md-4">
  <input id="textinput" name="Nom" type="text" placeholder="Nom" class="form-control input-md" required="required">
  </div>



  <div class="col-md-4">
  <input id="textinput" name="Prenom" type="text" placeholder="Prenom" class="form-control input-md" required="required">
  </div>




  
  <div class="col-md-4">
  <input id="textinput" name="Email" type="email" placeholder="Email" class="form-control input-md" required="required">
  </div>
    
    <div class="col-md-4">
        <input id="textinput" name="gsm" type="number" placeholder="Numero de Gsm" class="form-control input-md" required="required">
  </div>
</div>
    
</fieldset>



<fieldset>
    
    <legend class="col-md-4">Votre adresse</legend>
    
<div class="form-group">
    
    
    
    
 <div class="col-md-4">
  <input id="textinput" name="Rue" type="text"  placeholder="Rue" class="form-control input-md" required="required">
 </div>

 <div class="col-md-4">
  <input id="textinput" name="Numero" type="number" placeholder="Numero"  class="form-control input-md" pattern="^(?(^00000(|-0000))|(\d{5}(|-\d{4})))$" required="required">
 </div>



  
  <div class="col-md-4">
  <input id="textinput" name="zip" type="zip"  placeholder="Code Postale"  class="form-control input-md" pattern="^(?(^00000(|-0000))|(\d{5}(|-\d{4})))$" required="required">
  </div>



  
  <div class="col-md-4">
  <input id="textinput" name="Ville" type="text"  placeholder="Ville"  class="form-control input-md" required="required">
  </div>
</div>


    
    
</fieldset>


<fieldset>
    
<legend class="col-md-4">Caractèristique du vehicule</legend>

<div class="form-group" id="vehicule">
  
    
    
       
       
     <div class="col-md-4">
  <input id="textinput" name="Marque" type="text"  placeholder="Marque  " class="form-control input-md" required="required">
 </div>
       
         <div class="col-md-4">
  <input id="textinput" name="Model" type="text"  placeholder="Model  " class="form-control input-md" required="required">
 </div>
       
       
             <div class="col-md-4">
  <input id="textinput" name="Annee" type="number"  placeholder="Annee  " class="form-control input-md" required="required">
 </div>
    
    

</div>
</fieldset>

    <div class="form-group col-md-4">
              	<button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Envoyer</button>
              </div>
	   
            </form>
</form>
</body>
</html>
