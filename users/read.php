<?php
/**
 * Created by PhpStorm.
 * User: Romain
 * Date: 26/04/2017
 * Time: 23:04
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

        // on affiche les informations de l'user connecté ?
        $query = $bdd-> query("SELECT * FROM `users` ");


        // si on est un employé
        if($_SESSION['user']->getStatut()==0) {
            echo "<form method='POST' action='user/edit.php'>
                    <a href='user/edit.php' target='_blank'> <input type='submit' value='modification client' > </a>
                    </form>";
            echo "<form method='POST' action='user/create.php'>
                    <a href='user/create.php' target='_blank'> <input type='submit' value='Ajouter client' > </a>
                    </form>\";
                    ";
        }
        ?>
    </body>
</html>
