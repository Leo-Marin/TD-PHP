<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
        <ul>
        <li><a href = index.php?action=readAll > Liste complète des véhicules</a></li>
            <li><a href = index.php?action=readAll&controller=utilisateur> Utilisateurs</a></li>
            <li><a href = index.php?action=readAll&controller=trajet> Trajets</a></li>
        </ul>  
    </head>
    <body>
        <?php
// Si $controleur='voiture' et $view='list',
// alors $filepath="/chemin_du_site/view/voiture/list.php"
        $filepath = File::build_path(array("view", $controller, "$view.php"));
        require $filepath;
        ?>
    </body>
    <footer>
        <p style="border: 1px solid black;text-align:right;padding-right:1em;">
        Site de covoiturage de Marin leo ah oaiiiiiii
        </p>
    </footer>


</html>





