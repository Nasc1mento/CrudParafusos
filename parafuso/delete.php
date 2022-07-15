<?php

    include 'config.php';
    
    $id_parafuso = $_GET['id_parafuso'];

    $ret = $pdo->prepare("DELETE FROM WCR_BOLTS WHERE BLT_ID = :id_parafuso");
    $ret->bindParam(":id_parafuso", $id_parafuso);
    $ret->execute();
    

    header('location: index.php');
