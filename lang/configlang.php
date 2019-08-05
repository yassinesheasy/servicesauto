<?php
if(empty($_GET['lang'])){
    $_SESSION['lang'] = "fr";
}else{
    switch($_GET['lang']){
        case "fr":
        $_SESSION['lang'] = "fr";
        break;
        case "en":
        $_SESSION['lang'] = "en";
        break;
        case "nl":
        $_SESSION['lang'] = "nl";
        break;
        default :
        $_SESSION['lang'] = "fr"; //au cas ou quelqu'un rentre autre chose que fr/en ou it
        break;
    }
}
 
switch($_SESSION['lang']){
        case "fr":
        $fichier_langage = "fr.inc";
        break;
        case "en":
        $fichier_langage = "en.inc";
        break;
        case "nl":
        $fichier_langage = "nl.inc";
        break;
     
}
include($fichier_langage);
?>
