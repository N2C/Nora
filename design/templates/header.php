<?php
/**
 * Created by PhpStorm.
 * User: nicol_000
 * Date: 18/04/2017
 * Time: 22:18
 */
include('/design/templates/base.php');
?>



<header>
    <nav>
        <ul class="nav">
            <li>Nora ! ♥</li>
            <li><a href="/index.php">Accueil</a></li>
        </ul>
        <ul class="nav pull-right">
            <li><?='Logging in as : '.$_SESSION['user']->getUsername()?></li>
            <li><a href="/nora/deconnexion.php">Logout</a></li>
        </ul>
    </nav>
</header>
<main>
