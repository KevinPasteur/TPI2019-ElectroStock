
<?php
/**
 * Created by PhpStorm.
 * User: Kevin.PASTEUR
 * Date: 16.05.2019
 */


$titre = "Accueil";
Ob_start(); ?>
<div class="container-fluid">
<!-- Begin Page Content -->

<h1 class="h3 mb-2 text-gray-800">Tout le matériel</h1>
<hr>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {  ?>
    <div>
        <a class="btn btn-primary btn-icon-split" href="index.php?action=materiel">
            <span class="text">Retour</span>
        </a>
    </div>
    <br>
    <?php } ?>

<div>
    <a class="btn btn-primary btn-icon-split" href="index.php?action=emprunt">
        <span class="text">Emprunter</span>
    </a>
    <form method="POST" action="index.php?action=materiel" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input class="form-control bg-light border-0 small" aria-describedby="basic-addon2" aria-label="Search" name="q" type="search" placeholder="Rechercher...">
            <div class="input-group-append">
                <input class="btn btn-primary" type="submit" />
            </div>
        </div>
    </form>

    <?php if ($_SESSION['role'] == "Administrateur") {  ?>
        <a class="btn btn-primary btn-icon-split float-right" href="index.php?action=ajoutmateriel">
            <span class="text">Ajouter un matériel</span>
        </a>
    <?php } ?>

</div>
<br>


