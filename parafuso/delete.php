<?php



    include 'config.php';
    
    $linha = $_GET['linha'];

    $ret = $pdo->query("DELETE FROM WCR_BOLTS WHERE BLT_ID = $linha");
    

    header('location: index.php');
