<?php

include 'config.php';


    
    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $diametro = $_POST['diametro'];
    $comprimento = $_POST['comprimento'];
    $user_id = $_SESSION['user_id'];

    $ret = $pdo->query("
        ALTER TABLE WCR_BOLTS
    ");



    header('location: index.php');