<?php

    include 'config.php';

    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $diametro = $_POST['diametro'];
    $comprimento = $_POST['comprimento'];
    $user_id = $_SESSION['user_id'];

    $ret = $pdo->query("
    INSERT INTO WCR_BOLTS (BLT_BRAND, BLT_TYPE, BLT_DIAMETER, BLT_LENGTH, BLT_USR_ID)
    VALUES ('$marca', '$tipo', '$diametro','$comprimento','$user_id')
    ");



    header('location: index.php');