<?php
ob_start();
?>
<form id="editForm" method="post" action="../../controller/admin/validEdit.php">
    <div class="mb-3">
        <label class="form-label">Identifiant : </label>
        <input type="text" readonly name="id" class="form-control" value="<?= htmlspecialchars($Produit[0]) ?>" />
    </div>
    <div class="mb-3">
        <label class="form-label">Libellé : </label>
        <input type="text" name="libelle" class="form-control" value="<?= htmlspecialchars($Produit[1]) ?>" />
    </div>
    <div class="mb-3">
        <label class="form-label">Prix : </label>
        <input type="text" name="prix" class="form-control" value="<?= htmlspecialchars($Produit[2]) ?>" />
    </div>
    <div class="mb-3">
        <label class="form-label">Quantité : </label>
        <input type="number" name="qte" class="form-control" value="<?= htmlspecialchars($Produit[3]) ?>" />
    </div>
    <div class="mb-3">
        <label class="form-label">Description : </label>
        <textarea name="d" cols="30" rows="4" class="form-control"><?= htmlspecialchars($Produit[4]) ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Promo : </label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="promo" id="optionsRadios1" value="1" <?= ($Produit[6] == 1) ? 'checked' : '' ?>>
            <label class="form-check-label" for="optionsRadios1">
                Oui
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="promo" id="optionsRadios2" value="0" <?= ($Produit[6] == 0) ? 'checked' : '' ?>>
            <label class="form-check-label" for="optionsRadios2">
                Non
            </label>
        </div>
    </div>
    <button type="submit" id="btnValidAdd" class="btn btn-primary" name="ok">Valider</button>
</form>
<?php
$contenu = ob_get_clean();
$titre = "Edition de prd";
include "layout.php";
?>