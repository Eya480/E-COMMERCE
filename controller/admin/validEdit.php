<?php
require_once "../../models/crud.php";
$crud = new CRUD();
if (isset($_POST['ok'])) {
    $p = new produit(
        htmlspecialchars($_POST['id']),
        htmlspecialchars($_POST['libelle']),
        htmlspecialchars($_POST['prix']),
        htmlspecialchars($_POST['qte']),
        htmlspecialchars($_POST['d']),
        htmlspecialchars($_POST['img']),
        htmlspecialchars($_POST['promo'])
    );

    $r = $crud->update($p);
    if ($r) {
        header("Location:findAll.php");
        exit;
    } else {
        exit;
    }
}
