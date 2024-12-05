<?php
require_once "produit.php";
require_once "connexion.php";
class crud
{
    private $pdo;//gerer la base de donneé
    function __construct() {
        $con=new connexion();
        $this->pdo=$con->getConnexion();
    }
    function add(produit $p) {
        $id=$p->getId();
        $lib=$p->getLibelle();
        $prix=$p->getPrix();
        $qte=$p->getQte();
        $d=$p->getDes();
        $promo=$p->getPromo();
        $img=$p->getImage();
        $sql="insert into produit values ('$id','$lib','$prix','$qte','$d','$img','$promo');";
        return $this->pdo->exec($sql);

    }
    function delete($id) {
        $sql="delete from produit where id=$id";
        $r=$this->pdo->exec($sql);
        return $r;
    }
    function update(produit $p) {
        $id=$p->getId();
        $lib=$p->getLibelle();
        $prix=$p->getPrix();
        $qte=$p->getQte();
        $d=$p->getDes();
        $promo=$p->getPromo();
        $img=$p->getImage();
        $sql="update produit set libellé='$lib', prix=$prix,qte=$qte,des='$d',image='$img',promo=$promo where id=$id";
        return $this->pdo->exec($sql);
    }
    function find($id) {
        $sql="select * from produit where id=$id";
        $r=$this->pdo->query($sql);
        return $r->fetch(PDO::FETCH_NUM);
    }
    //retourner un tab de produit
    function findAll(){
        $sql="select * from produit";
        $r=$this->pdo->query($sql);
        return $r->fetchAll(PDO::FETCH_NUM);
    }
}
