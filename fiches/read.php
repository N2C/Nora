<?php
/**
 * Created by PhpStorm.
 * User: Romain
 * Date: 26/04/2017
 * Time: 21:50
 */
require(__DIR__.'/../base.php');
if(empty($_SESSION['user'])) header('Location: '.__DIR__.'/../connexion.php');

$query1= $bdd-> query("SELECT id,date,contenu,type FROM fiche_action "); //pas de jointure
$action = $query1->fetch();

$query2 = $bdd-> query("
SELECT fiche_action.id_auteur,users.username 
FROM fiche_action,users 
WHERE fiche_action.id_auteur = users.id "); //jointure pour récuperer le nom de l'employé qui l'a créé
$auteur = $query2->fetch();

$query3 = $bdd-> query("
SELECT fiche_action.id_auteur,users.username 
FROM fiche_action,users 
WHERE fiche_action.id_auteur = users.id "); //jointure pour récuperer le nom de l'employé qui l'a modifié
$editeur = $query3->fetch();

$query4 = $bdd-> query("SELECT id,lien_pj FROM `fiche_piecejointe` ");
$piecejointe = $query4->fetch();


?>
<!DOCTYPE html>
<html>
    <head>
        <title> nora </title>
    </head>
    <body>
        <h1> coucou </h1>
        <?php
        if($_SESSION['user']->getStatut()==0){?>

            <form method='POST' action='fiche/edit.php'>
                <a href='fiche/edit.php' target='_blank'> <input type='submit' value='Modification action' > </a> </br>
                <a href='fiche/create.php' target='_blank'> <input type='submit' value='Ajouter action' > </a>
            </form>
        <?php
        }
        ?>
        <?php
            while($action){

        ?>
        <table>
            <caption>Fiche de l'action n°</caption> // mettre la dernière action en haut
            <thead>
                <tr>
                    <th>Date de création</th>
                    <th>Créer par</th>
                    <th>Modifier par</th>
                    <th>Date de dernière modification</th> // ajouter champ BDD
                    <th>Contenu</th>
                    <th>Pièces jointes</th>
                    <th>Type d'action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo(action['date'])?></td>
                    <td><?php echo(auteur['users.username'])?></td>
                    <td><?php echo(action['date'])?></td>
                    <td><?php echo(action['date'])?></td>
                    <td><?php echo(action['contenu'])?></td>
                    <td><?php while($piecejointe){
                        echo"
                        <li>
                            <a href='article.php?id=".$piecejointe['lien_pj']."'>"
                            .$piecejointe['lien_pj']
                            ."</a>
                        </li>";
                        }
                        ?></td>
                    <td><?php echo(action['type'])?></td>
                </tr>
            </tbody>
        </table>
        <?php
        }
        ?>
    </body>
</html>

