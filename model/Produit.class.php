<?php
class Produit {

  private $id;
  private $designation;
  private $reference;
  private $essence;
  private $traitement;
  private $garantie;
  private $cadre;
  private $remplissage;
  private $assemblage;
  private $miniature;
  private $chemin;
  private $consultation;
  private $categorie; 

  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value)
    {
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set'.ucfirst($key);
      // Si le setter correspondant existe.
      if (method_exists($this, $method))
      {
      // On appelle le setter.
      $this->$method($value);
    }
  }
 }

  // Important car sinon l'objet à sa création est vide.
  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }
  //Getters
  function getId(){
		return $this->id;
	}

  function getDesignation(){
		return $this->designation;
	}

  function getReference(){
		return $this->reference;
	}

  function getEssence(){
		return $this->essence;
	}

  function getTraitement(){
		return $this->traitement;
	}

  function getGarantie(){
		return $this->garantie;
	}

  function getCadre(){
		return $this->cadre;
	}

  function getRemplissage(){
		return $this->remplissage;
  }
  
  function getAssemblage(){
		return $this->assemblage;
  }
  
  function getMiniature(){
		return $this->miniature;
  }
  
  function getChemin(){
		return $this->chemin;
  }
  
  function getConsultation(){
		return $this->consultation;
  }
  

  //Setters
  function getCategorie(){
		return $this->categorie;
	}

  function setId($id){
    $this->id = $id;
  }

  function setDesignation($designation){
    $this->designation = $designation;
  }

  function setReference($reference){
    $this->reference = $reference;
  }

  function setEssence($essence){
    $this->essence = $essence;
  }

  function setTraitement($traitement){
    $this->traitement = $traitement;
  }

  function setGarantie($garantie){
    $this->garantie = $garantie;
  }  

  function setCadre($cadre){
    $this->cadre = $cadre;
  }  

  function setRemplissage($remplissage){
    $this->remplissage = $remplissage;
  }
  
  function setAssemblage($assemblage){
    $this->assemblage = $assemblage;
  }
  
  function setMiniature($miniature){
    $this->miniature = $miniature;
  }
  
  function setChemin($chemin){
    $this->chemin = $chemin;
  }
  
  function setConsultation($consultation){
    $this->consultation = $consultation;
  }  

  function setCategorie($categorie){
    $this->categorie = $categorie;
  }  
}
?>
