<?php
require "Conf.php";
class Model {
   
  public static $pdo;


  public static function Init(){
    $hostname = Conf::getHostname();
    $database_name = Conf::getLogin();
    $login = Conf::getDatabase();
    $password = Conf::getPassword();
    try{
      self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);        
    } catch(PDOException $e) {
        if (Conf::getDebug()) {
          echo $e->getMessage(); // affiche un message d'erreur
        } else {
          echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
        }
        die();
    }
    
  }

}
Model::Init();
?>

