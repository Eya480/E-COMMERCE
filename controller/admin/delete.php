<?php
//suppr apres on revient avec header au page de all
$id = $_GET['id'];
require_once "../../models/crud.php";
$c = new CRUD();
$r = $c->delete($id);
if ($r) {
    header("location: findAll.php");
    exit;
} else {
    echo "probléme de suppression";
}
