<?php
require_once "../../models/crud.php";
$crud = new CRUD();
$id = $_GET['id'];
$Produit = $crud->find($id); //va retenir le produit correspont à ce id
include "../../view/admin/update.php";
