<?php
require_once('Database.class.php');
require_once('model/Produit.class.php');

class ProduitManager extends Database{

  private $db; // Instance de PDO
  
  public function __construct()
  {
    $db = $this->dbConnect();
    $this->setDb($db);
  }

  public function setDb(PDO $db)
  {
    $this->db = $db;
  }

  //Fonction pour obtenir un produit en fonction de son id
  public function getProduit($id)
   {
    $id = (int) $id;
    $query = $this->db->query('SELECT id, designation, reference, essence, traitement, garantie, cadre, remplissage, assemblage,
                                      miniature, chemin, consultation, categorie
                                  FROM produit WHERE id = '.$id);
    $donnees = $query->fetch(PDO::FETCH_ASSOC);
    return new Produit($donnees);
    }
  
  //Fonction pour obtenir la liste des trois produits les plus consultés 
  public function getListeConsultation()
  {
    $produits= [];
    $query = $this->db->query('SELECT id, designation, reference, miniature, consultation 
                                FROM produit ORDER BY consultation DESC LIMIT 3 ');

    while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
    {
      $produits[] = new Produit($donnees);
    }

    return $produits;
  }
  
  //Fonction pour obtenir la liste des produits par categorie
  public function getListeCategorie($id)
  {
    $listeProduits= [];
        
	$query = $this->db->query('SELECT * FROM produit WHERE categorie ='.$id);

	while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
	    {
	      $listeProduits[] = new Produit($donnees);
	    }

	    return $listeProduits;
  }
  
  //Fonction pour incrementer de un le nombre des consultations
  public function ajouterConsultation($id)
    {        
        $query = $this->db->prepare("UPDATE produit SET consultation = consultation+1 WHERE id=:id ");
        $query->bindValue(':id',$id);
        $query->execute();
    }
}
?>