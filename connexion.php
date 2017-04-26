<?php
/**
 * Created by PhpStorm.
 * User: nicol_000
 * Date: 19/04/2017
 * Time: 21:19
 */
    require('base.php');

    #redirection si l'utilisateur est déjà connecté
    if(isset($_SESSION['user']) || !empty($_SESSION['user'])) header('Location: index.php');

    #traitement du formulaire
    if(isset($_POST['username'])|| isset($_POST['password'])){

        #requete SQL
        $req = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
        $req->execute(array($_POST['username'], md5($_POST['password']) ));

        #si l'entrée existe, elle sera retournée sous forme de d'objet
        $user = $req->fetchObject(\entity\user::class);

        #si la connexion s'est bien déroulée
        if( $user instanceof  \entity\user){
            #enregistrement de la session
            $_SESSION['user'] = $user;
            #redirection
            header('Location: index.php');
        }
        else{
            print('Bad credentials');
        }

    }


include('design/templates/base.php');

?>


<div class="card card-teal" style="margin-left: 25%; margin-right: 25%; margin-top: 10%;">
    <h1 class="header">Connexion à Nora</h1>
    <form action="connexion.php" method="post">
        <input type="text" name="username" placeholder="Nom d'utilisateur"/><br />
        <input type="password" name="password" placeholder="Mot de passe"/><br />

        <input type="submit">
    </form>
</div>


