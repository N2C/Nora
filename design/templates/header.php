<?php
/**
 * Created by PhpStorm.
 * User: nicol_000
 * Date: 18/04/2017
 * Time: 22:18
 */
include(__DIR__.'/base.php');
?>



<header>
    <nav>
        <ul class="nav">
            <li>Nora ! ♥</li>
            <li><a href="/nora/index.php"><i class="fa fa-home"></i> Accueil</a></li>
            <li><a href="/nora/fiches/"><i class="fa fa-folder"></i> Fiches</a></li>
        </ul>
        <ul class="nav pull-right">
            <li><i class="fa fa-user"></i> <?=$_SESSION['user']->getUsername()?></li>
            <li><a href="/nora/deconnexion.php"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
        </ul>
    </nav>
</header>
<main>
