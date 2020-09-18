<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> test conf </title>
    </head>
   
    <body>
        
		<?php
		  // On inclut les fichiers de classe PHP avec require_once
		  // pour éviter qu'ils soient inclus plusieurs fois
		  require_once 'Conf.php';

		  
		  /*echo Conf::getLogin();
		  echo Conf::getHostname();
		  echo Conf::getDatabase();
		  echo Conf::getPassword();*/
		  require_once "Model.php";
		  echo "Connexion réussie !" ;
		?>


    </body>
</html> 