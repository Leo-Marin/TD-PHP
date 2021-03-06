<?php

require_once 'Model.php'; 
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }
      


  public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
  }
  }

           
  // une methode d'affichage.
  public function afficher() {
    return "<li> Marque : " . $this->marque . "</li>" .
    "<li> Couleur : " . $this->couleur . "</li>" .
    "<li> Immatriculation : " . $this->immatriculation . "</li>";
  }

  public function getImma(){
    return $this->immatriculation;
  }

  public function getCouleur(){
    return $this->couleur;
  }

  public function setImma($imma2){
    if (strlen($imma2) > 8){
      echo "Nombre de caractère supérieur à la limite (8).";
    }
    else{
      $this->immatriculation = $imma2;
    }
    
  }

  public function setCouleur($couleur2){
    $this->couleur = $couleur2;
  }

  public static function getAllVoitures(){
    $rep = (Model::$pdo)->query("Select * From voiture");
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $rep->fetchAll();
    return $tab_voit;
  }

}
?>

