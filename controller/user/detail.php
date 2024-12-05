<?php
if (isset($_GET['id'])){
$id = $_GET['id'];
require_once "../../models/crud.php";
$c = new crud();
$produit = $c->find($id); //ligne de produit
require_once "../../view/user/detail.php";
}