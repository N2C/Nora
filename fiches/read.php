<?php
/**
 * Created by PhpStorm.
 * User: Romain
 * Date: 26/04/2017
 * Time: 21:50
 */




?>
<!DOCTYPE html>
<html>
    <head>
        <title> nora </title>
    </head>
    <body>
        <h1> coucou </h1>
        <?php
        // on affiche les actions de la fiche
        $query = $bdd-> query("SELECT * FROM `fiche_action` ");
        $action = $query->fetch();

        echo "L'action n°"." a été créée par ". " le ".$action['date']. ". Elle a été modifié le "." par ". "."; // date de modification à ajouter
        echo " Voici les différences pièces jointes " ; // faire une liste des pièces jointes
        // comment récuperer le nom de Id_auteur et Id_editeur ? jointure ?
        // modifier et faire un tableau avec toutes les infos


        // si on est un employé
        if($_SESSION['user']->getStatut()==0){
            echo "<form method='POST' action='fiche/edit.php'>
            <a href='fiche/edit.php' target='_blank'> <input type='submit' value='modification fiche' > </a>
            </form>";

            echo "<form method='POST' action='fiche/create.php'>
            <a href='fiche/create.php' target='_blank'> <input type='submit' value='Ajouter action' > </a>
            </form>\";
            ";
        }
        else{
            // on fait rien
        }
        ?>
    </body>
</html>
