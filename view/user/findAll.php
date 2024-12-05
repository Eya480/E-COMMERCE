<?php
ob_start();
?>
<div class="row">
    <?php
    foreach ($LesProduits as $Produit) {
    ?>
        <div class="col-3">
            <div class="card">
                <img src="<?= $Produit[5] ?>" class="img-fluid" alt="La photo de produit">
                <div class="card-body">
                    <h1 class="card-title"><?= $Produit[1] ?></h1>
                    <p class="card-text"><?= $Produit[4] ?></p>
                    <a href="detail.php?id=<?= $Produit[0] ?>" class="btn btn-success btn-sm">Détail</a>
                    <a href="../../controller/user/panier.php" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart"></i>Ajouter</a>

                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php
$contenu = ob_get_clean();
$titre = "Liste Des Produit";
include "layout.php";
?>