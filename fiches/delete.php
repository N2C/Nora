<?php
require(__DIR__.'/../base.php');
if(empty($_SESSION['user'])) header('Location: '.__DIR__.'/../connexion.php');
require(__DIR__.'/../design/templates/header.php');

include (__DIR__.'/../design/templates/menu-left.php');

// créer une sauvegarde ?
// faire un bouton de confirmation ?


$requete = $bdd->prepare("DELETE FROM 'fiche_action' WHERE id = ?"); //supprime une ligne
$requete->execute( array(1) ); //modifier en fonction de la ligne que l'on souhaite modifier


$all = $bdd->query( "DELETE FROM 'fiche_action'" ); //supprime toutes les actions

?>



