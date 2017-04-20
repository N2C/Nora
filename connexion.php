<?php
/**
 * Created by PhpStorm.
 * User: nicol_000
 * Date: 19/04/2017
 * Time: 21:19
 */
    include('design/templates/base.php');

?>

<div class="card card-teal" style="margin-left: 25%; margin-right: 25%; margin-top: 10%;">
    <h1 class="header">Connexion à Nora</h1>
    <form action="connexion.php" method="post">
        <input type="text" placeholder="Nom d'utilisateur"/><br />
        <input type="password" placeholder="Mot de passe"/><br />

        <input type="submit">
    </form>
</div>


