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

include (__DIR__.'/../design/templates/menu-left.php');
?>

<h1>Dernières fiches</h1>

<section style="display: flex;">
    <div class="card hoverable">
        <div class="header">
            <h3>Entreprise Gentille 1 <a href="#"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a></h3>
            <hr />
        </div>
        <div class="body">
            <div>Dernière action : action.name par action.user le action.date</div>
        </div>
        <div class="footer">
            <ul>
                <li><i class="fa fa-clock-o"></i> fiche.date</li>
            </ul>
        </div>
    </div>
    <div class="card hoverable">
        <div class="header">
            <h3>Entreprise Gentille 1 <a href="#"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a></h3>
            <hr />
        </div>
        <div class="body">
            <div>Dernière action : action.name par action.user le action.date</div>
        </div>
        <div class="footer">
            <ul>
                <li><i class="fa fa-clock-o"></i> fiche.date</li>
            </ul>
        </div>
    </div>
    <div class="card hoverable">
        <div class="header">
            <h3>Entreprise Gentille 1 <a href="#"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a></h3>
            <hr />
        </div>
        <div class="body">
            <div>Dernière action : action.name par action.user le action.date</div>
        </div>
        <div class="footer">
            <ul>
                <li><i class="fa fa-clock-o"></i> fiche.date</li>
            </ul>
        </div>
    </div>
    <div class="card hoverable">
        <div class="header">
            <h3>Entreprise Gentille 1 <a href="#"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a></h3>
            <hr />
        </div>
        <div class="body">
            <div>Dernière action : action.name par action.user le action.date</div>
        </div>
        <div class="footer">
            <ul>
                <li><i class="fa fa-clock-o"></i> fiche.date</li>
            </ul>
        </div>
    </div>
    <div class="card hoverable">
        <div class="header">
            <h3>Entreprise Gentille 1 <a href="#"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a></h3>
            <hr />
        </div>
        <div class="body">
            <div>Dernière action : action.name par action.user le action.date</div>
        </div>
        <div class="footer">
            <ul>
                <li><i class="fa fa-clock-o"></i> fiche.date</li>
            </ul>
        </div>
    </div>
    <div class="card hoverable">
        <div class="header">
            <h3>Entreprise Gentille 1 <a href="#"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a></h3>
            <hr />
        </div>
        <div class="body">
            <div>Dernière action : action.name par action.user le action.date</div>
        </div>
        <div class="footer">
            <ul>
                <li><i class="fa fa-clock-o"></i> fiche.date</li>
            </ul>
        </div>
    </div>
    <div class="card hoverable">
        <div class="header">
            <h3>Entreprise Gentille 1 <a href="#"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a></h3>
            <hr />
        </div>
        <div class="body">
            <div>Dernière action : action.name par action.user le action.date</div>
        </div>
        <div class="footer">
            <ul>
                <li><i class="fa fa-clock-o"></i> fiche.date</li>
            </ul>
        </div>
    </div>
    <div class="card hoverable">
        <div class="header">
            <h3>Entreprise Gentille 1 <a href="#"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a></h3>
            <hr />
        </div>
        <div class="body">
            <div>Dernière action : action.name par action.user le action.date</div>
        </div>
        <div class="footer">
            <ul>
                <li><i class="fa fa-clock-o"></i> fiche.date</li>
            </ul>
        </div>
    </div>
    <div class="card hoverable">
        <div class="header">
            <h3>Entreprise Gentille 1 <a href="#"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a></h3>
            <hr />
        </div>
        <div class="body">
            <div>Dernière action : action.name par action.user le action.date</div>
        </div>
        <div class="footer">
            <ul>
                <li><i class="fa fa-clock-o"></i> fiche.date</li>
            </ul>
        </div>
    </div>
</section>
