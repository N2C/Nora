<?php
/**
 * Created by PhpStorm.
 * User: nicol_000
 * Date: 20/04/2017
 * Time: 16:45
 */

#Chargement de l'entité user pour la gestion des utilisateurs
include('entity/user.php');
#Initialisation des sessions
session_start();
#Connexion à la bdd
$bdd = new PDO('mysql:host=localhost;dbname=nora;charset=utf8', 'root', '');
