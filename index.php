<?php

if(empty($_SESSION['user'])){
    header('Location : connexion.php');
}


include 'design/templates/header.php' ?>






<p>It's work !</p>