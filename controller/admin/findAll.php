<?php
//Etape 1 : communiquer avec le model
require_once "../../models/crud.php";
$crud = new CRUD();
$LesProduits = $crud->findAll();
//Etape 2 : transmettre $lesProduit à la vue : view/admin/findAll.php
include "../../view/admin/findAll.php";
