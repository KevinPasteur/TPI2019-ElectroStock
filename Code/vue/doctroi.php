<?php
/**
 * Created by PhpStorm.
 * User: Kevin.PASTEUR
 * Date: 16.05.2019
 */


$titre = "Demandes d'octroi";
Ob_start();

?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Demandes d'emprunt
        <?php if (isset($_GET['EA'])) echo " - En attente"; ?>
        <?php if (isset($_GET['EC'])) echo " - En cours"; ?>
        <?php if (isset($_GET['AV'])) echo " - Archivées"; ?>
    </h1>
    <hr>
    <div>
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input class="form-control bg-light border-0 small" aria-describedby="basic-addon2" aria-label="Search" type="text" placeholder="Rechercher...">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Compte</th>
                        <th>Catégorie</th>
                        <th>Modèle</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach (@$result as $demande) : ?>
                        <tr>
                            <td><?= $demande['email']; ?> </td>
                            <td><?= $demande['categorie']; ?> </td>
                            <td><?= $demande['modele']; ?> </td>
                            <td><?= $demande['date_e']; ?> </td>
                            <td><?= $demande['date_r']; ?> </td>

                            <?php if ($demande['fkStatutsE'] == 1) { ?>
                                <td>
                                    <a href="index.php?action=demprunt&EA&Accept=<?= $demande['idEmprunt']; ?>" onclick="return confirm('Accepter cette demande ?')"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                                    <a href="index.php?action=demprunt&EA&Decline=<?= $demande['idEmprunt']; ?>&Materiel=<?= $demande['idMateriels']; ?>" onclick="return confirm('Refuser cette demande ?')"> <button class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button></a>
                                </td>
                            <?php } ?>
                            <?php if ($demande['fkStatutsE'] == 3 || $demande['fkStatutsE'] == 4) { ?> <td><?= $demande['Statut']; ?></td> <?php } ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php $contenu = ob_get_clean();?>
<?php require "vue/gabarit.php";?>
