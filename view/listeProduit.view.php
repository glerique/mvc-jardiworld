<?php
require ('header.view.php');
?>         
<div class="col-lg-9"> 
	<div class="box" align="center"><b><a href="index.php?accueil">Catalogue produits</a>
	</b> | <a href="index.php?populaire">Produits les plus consultés</a>
</div>	
<div class="box">
	<form action="" method="post">				  
		<p>Avec les <b><?php echo  $panneau->getLibelle(); ?></b> donnez vie à vos projets...</p>
		<p>Je souhaite rechercher par types de clôtures : 
		<select name="id">
					<?php
				foreach($manager->getListeCategorie() as $value){ ?>
				<option value="<?php echo $value->getId();?>"><?php echo $value->getLibelle();?></option>
				
				<?php }?>
				</select>        
				<input type="submit" value="ok">
				</form>
				</p>
</div>				
<?php 
//On recupere l'id de la categorie soit par un POST depuis le page d'acceuil, soit par un GET depuis la fiche produit
	$produits = new ProduitManager;
	$produits->getListeCategorie($id);
	//On utilise une boule Foreach pour afficher la liste des produits en fonction de l'id de la categorie
	foreach($produits->getListeCategorie($id) as $value){ ?>
     <div class="box">
		 <div class="row"> 
		 	<div class="col-sm-3">           
		 		<img src="assets/img/<?php echo $value->getMiniature(); ?>">
			</div>
			<div class="col-sm-9">
				<p>Référence : <?php echo $value->getReference();?></p>	
				<h3><?php echo $value->getDesignation(); ?></h3>		
				<p class="buttons" align="right"><a href="index.php?produit=<?php echo $value->getId(); ?>" class="btn btn-outline-secondary">En savoir plus</a></p>
			</div>	
		</div>                  
	</div>    
	<?php  } ?> 
  </div>  