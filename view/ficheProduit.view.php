<?php
require_once('header.view.php');
?>
<div class="col-lg-9"> 
	<div class="box" align="center"><b><a href="index.php?accueil">Catalogue produits</a>
	    </b> | <a href="index.php?populaire">Produits les plus consultés</a>
    </div>
    
    <div class="box">
    <div class="row">
    <h2><?php echo $produit->getDesignation(); ?></h2>
    </div>
    <div class="row">
    Référence : <?php echo $produit->getReference(); ?>
    </div>
    <p></p>
        <div class="row">
            <div class="col-sm-3">
                <img src="assets/img/<?php echo $produit->getChemin(); ?>"> 
            </div>       
            <div class="col-sm-9">
                <h3>Caracteristiques : </h3>
                <p>Essence : <?php echo $produit->getEssence(); ?> </p>
                <p>Traitement : <?php echo $produit->getTraitement(); ?> </p>
                <p>Garantie : <?php echo $produit->getGarantie(); ?> </p>
                <p>Cadre : <?php echo $produit->getCadre(); ?> </p>
                <p>Remplissage : <?php echo $produit->getRemplissage(); ?> </p>
                <p>Assemblage : <?php echo $produit->getAssemblage(); ?> </p>                                    
                <p class="buttons" align="right">
                <a href="index.php?categorie=<?php echo $produit->getCategorie();?>" 
                class="btn btn-outline-secondary">Retour</a></p>
            </div>
        </div>
    </div>
</div>