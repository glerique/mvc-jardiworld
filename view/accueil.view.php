<?php require('header.view.php'); ?>       
	                     
<div class="col-lg-9"> 
  <div class="box" align="center">
    <b><a href="index.php?accueil">Catalogue produits</a>
    </b> | <a href="index.php?populaire">Produits les plus consultés</a>
  </div>
  <div class="box">
    <form action="" method="post">	  
      <p>Donnez vie à vos projets...</p>
      <p>Par le menu déroulant ci-dessous, nous souhaitons vous aider à accéder plus
      facilement aux produits recherchés.</p>
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
</div> 	   