<?php
if (isset($_POST['ok'])) {
    require_once "../../models/crud.php";
    $c = new crud();
    $p = new produit(
        htmlspecialchars($_POST['id']),
        htmlspecialchars($_POST['libelle']),
        htmlspecialchars($_POST['prix']),
        htmlspecialchars($_POST['qte']),
        htmlspecialchars($_POST['d']),
        htmlspecialchars($_POST['img']),
        htmlspecialchars($_POST['promo'])
    );
    $l = htmlspecialchars($_POST['libelle']);
    $r = $c->add($p);
    if ($r) {
        header("location:findAll.php");
        exit;
    }
} else {
    include "../../view/admin/add.php";
}
