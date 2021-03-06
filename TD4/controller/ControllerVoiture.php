<?php

require_once ('../model/ModelVoiture.php'); // chargement du modèle

class ControllerVoiture {

    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read() {
        $immat = $_GET['immatriculation'];
        $v = ModelVoiture::getVoitureByImmat($immat);
        if ($v == null) {
            require '../view/voiture/error.php';
        } else {
            require ('../view/voiture/detail.php');
        }
    }

    public static function create() {
        
        require ('../view/voiture/create.php');
    }
    public static function created(){
        $immat = $_GET['immatriculation'];
        $marque = $_GET['marque'];
        $couleur = $_GET['couleur'];
        $voiture1  = new ModelVoiture($marque,$couleur,$immat);
        $voiture1->save();
        ControllerVoiture::readAll();
    }
}

?>
