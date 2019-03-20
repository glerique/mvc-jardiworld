<?php
require_once('model/CategorieManager.class.php'); 
require_once('model/ProduitManager.class.php');

class Controler{
    //affiche la page page d'accueil avec le choix de categorie
    function accueil(){
        $manager = new CategorieManager();
        require('view/accueil.view.php'); 
    }

    function listeProduit(){
        //Affiche la liste des produits en fonction de la categorie recupérée par GET ou POST 
        if (isset($_POST['id'])) {$id =$_POST['id'];} else {$id = $_GET['categorie'];}
        $manager = new CategorieManager();
        $panneau = $manager->getCategorie($id);
        require('view/listeProduit.view.php');
    }

    function ficheProduit(){
        //affiche la fiche produit en fonction de l'id recupéré par GET
        $managerCategorie = new CategorieManager();
        $managerProduit = new ProduitManager();
        //Incremente lorsque la fiche produit est consultée
        $compteur = $managerProduit->ajouterConsultation($_GET['produit']);
        $produit = $managerProduit->getProduit($_GET['produit']);        
        require('view/ficheProduit.view.php');
    }

    function retour(){
        //Pour quitter une fiche produit et revenir sur la liste en fonction du numero de categorie
        $id = $_GET['categorie'];
        $manager = new CategorieManager();
        $panneau = $manager->getCategorie($id);
        require('view/listeProduit.view.php');
    }

    function populaire(){
        //Afficher la page des produits populaires, ayant le plus de consultations
        $manager = new CategorieManager; 
        require('view/listePopulaire.view.php');
    }
}
?>