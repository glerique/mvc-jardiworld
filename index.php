<?php
require_once('controler/Controler.class.php');
//On appele la classe controleur pour les actions en fonction des evenements
//Une structure if/elseif est utilisée pour savoir quelle action effectuer     
$controleur = new Controler();
    //Post avec le formulaire categorie pour afficher la liste des produits
    if ($_POST) {        
        $controleur->listeProduit();
    }
    //Get avec le lien en savoir plus sur la liste des produits
    elseif (isset($_GET['produit'])){
        $controleur->ficheProduit();
    }    
    //Get avec le lien de retour sur la fiche produit
    elseif (isset($_GET['categorie'])){
        $controleur->retour();
    }
    //Get avec le lien produit les plus consultés 
    elseif (isset($_GET['populaire'])){
        $controleur->populaire();
    }
    //Get avec le lien Catalogue produits
    elseif (isset($_GET['accueil'])){
        $controleur->accueil();
    }
    //Sinon si aucune action n'est effectuée, on affiche la page d'accueil par defaut
    else {
        $controleur->accueil();
    }
?>