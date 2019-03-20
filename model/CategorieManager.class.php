<?php
require_once('Database.class.php');
require_once('model/Categorie.class.php');

class CategorieManager extends Database {

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
  
  //fonction pour obtenir une categorie en fonction de son id
  public function getCategorie($id)
   {
    $id = (int) $id;
    $query = $this->db->query('SELECT id, libelle FROM categorie WHERE id = '.$id);
    $donnees = $query->fetch(PDO::FETCH_ASSOC);
    return new Categorie($donnees);
    }
  
  //Fonction pour obtenir la liste des categories
  public function getListeCategorie()
  {
    $categories= [];
    $query = $this->db->query('SELECT id, libelle FROM categorie');

    while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
    {
      $categories[] = new Categorie($donnees);
    }
    return $categories;
  }  
}
?>
