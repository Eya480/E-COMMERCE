<?php
    require_once "../connexion.php";
    #envoi de la requette
    $connexion = new connexion();
    $pdo = $connexion->getConnexion();
    $sql="delete from produit";
    $pdo->exec($sql);
    $sql="";
    for ($i=1; $i <50 ; $i++) { 
        $lib="Produit n ".$i;
        $pu=random_int(2,3000);
        $qte=random_int(3,1000);
        $des="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates adipisci nihil vitae omnis, eum explicabo. Officiis neque vero recusandae ex saepe, corrupti quo ab perferendis eius explicabo quasi ea quae?";
        $img="https://picsum.photos/400/400?random=$i";
        $pro=random_int(0,1);
    $sql .= "insert into produit values ('$i','$lib','$pu','$qte','$des','$img','$pro');";
    }
    $pdo->exec($sql);



    ?>
