<?php
class Categorie{

	public $id;
	public $libelle;

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

	function getId(){
		return $this->id;
	}

	function getLibelle(){
		return $this->libelle;
	}

	function setId($id){
     			$this->id = $id;
	}

	function setLibelle($libelle){
			     $this->libelle = $libelle;
	}
}
?>
