<?php
require ('header.view.php');
?>               
<div class="col-lg-9"> 
<div class="box" align="center"><a href="index.php?accueil">Catalogue produits</a>
 | <b><a href="index.php?populaire">Produits les plus consultés</a></b>
</div>
<div class="box">
<p> Donnez vie à vos projets...</p>
</div>
<?php
	$produits = new ProduitManager;
	$produits->getListeConsultation();
	//On affiche la liste des produit les plus consultés
		foreach($produits->getListeConsultation() as $value){ ?>
	 <div class="box">
	 	<div class="row"> 
		 	<div class="col-sm-3">
				 <center> <img src="assets/img/<?php echo $value->getMiniature(); ?>">
			</div>		
			<div class="col-sm-6">	 
			<p>Référence : <?php echo $value->getReference();?></p>
			<h3><?php echo $value->getDesignation(); ?></h3>
		</div>			
		<div class="col-sm-3">		
		<p align ="right">Consultation : <?php echo $value->getConsultation();?></p>
		<p class="buttons" align="right"><a href="index.php?produit=<?php echo $value->getId(); ?>" class="btn btn-outline-secondary">En savoir plus</a></p>
		</div> 
		</div>	
		</div>		
  <?php  } ?>
		</div>