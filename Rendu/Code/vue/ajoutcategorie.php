<?php
/**
 * Created by PhpStorm.
 * User: Kevin.PASTEUR
 * Date: 22.05.2019
 */

$titre = "Ajouter une catégorie";
Ob_start();
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ajouter une catégorie
            <?php if (isset($_GET['Materiel'])) echo " - Matériels"; ?>
            <?php if (isset($_GET['Consommable'])) echo " - Consommables"; ?></h1></h1>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-body">
                    <form role="form" method="POST" id="compte" action="index.php?action=ajoutcategorie&id=<?= @$id ?>&<?= @$cat; ?>" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user col-lg-3" name="nom" value="" placeholder="Nom" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button class="btn btn-primary" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    </div>
<?php $contenu = ob_get_clean();?>
<?php require "vue/gabarit.php";?>


<?php
