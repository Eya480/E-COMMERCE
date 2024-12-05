<?php
//try{

//}catch(Exception $e){
//    echo "Probléme de connexion : ".$e->getMessage();
//}
class connexion
{
    private $pdo;
    function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=e-commerce";
        $user = "root";
        $pw = "";
        $this->pdo = new PDO($dsn, $user, $pw);
    }
    function getConnexion()
    {
        return $this->pdo;
    }
}
