<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> test conf </title>
    </head>
   
    <body>
        
		<?php
		require "Model.php";
		require "Voiture.php";
		$rep = (Model::$pdo)->query("SELECT * FROM `voiture` WHERE 1");
		$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
		$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
		$tab_voit = $rep->fetchAll();
		//var_dump($tab_obj);
		foreach ($tab_obj as $obj){
			foreach ($obj as $attribut) {
				echo "$attribut\n";
			}

		}


		?>



    </body>
</html> 