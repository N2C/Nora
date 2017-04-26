<?php
/**
 * Created by PhpStorm.
 * User: nicol_000
 * Date: 18/04/2017
 * Time: 22:02
 */
require(__DIR__.'/../base.php');
if(empty($_SESSION['user'])) header('Location: '.__DIR__.'/../connexion.php');
require(__DIR__.'/../design/templates/header.php');
?>
<h1>Dernières fiches</h1>

<section>
    <article class="card">
        <h3>Entreprise Gentille</h3>
    </article>
</section>
