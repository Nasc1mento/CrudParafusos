<?php

include 'config.php';


    
    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $diametro = $_POST['diametro'];
    $comprimento = $_POST['comprimento'];
    $id_parafuso = $_POST['id_parafuso'];
    
    

    $ret = $pdo->prepare("UPDATE WCR_BOLTS SET BLT_BRAND = :marca, BLT_TYPE = :tipo, BLT_DIAMETER = :diametro, BLT_LENGTH = :comprimento WHERE BLT_ID = :id_parafuso");
    $ret->bindValue(":marca",$marca);
    $ret->bindValue(":tipo",$tipo);
    $ret->bindValue(":diametro",$diametro);
    $ret->bindValue(":comprimento",$comprimento);
    $ret->bindValue(":id_parafuso",$id_parafuso);
    $ret->execute();




    header('location: index.php');