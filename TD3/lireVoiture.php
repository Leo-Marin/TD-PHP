<?php

require_once 'Model.php';
require_once 'Voiture.php';


Model::Init();

/*
  $rep = (Model::$pdo)->query("Select * From Voiture");


  $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
  foreach($tab_obj as $value){
  print_r($value);
  echo "</br>";
  }



  $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
  $tab_voit = $rep->fetchAll();

  foreach ($tab_voit as $value) {
  echo $value->afficher();
  echo "</br>";
  }

  foreach (Voiture::getAllVoitures() as $value) {
  echo ($value->afficher());
  echo "<br>";
  } */
$v1 = new Voiture("grosse caisse", "negro", "19MMS19");
$v1->save();
?>
