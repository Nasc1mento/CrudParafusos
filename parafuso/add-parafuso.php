<?php

    include 'config.php';

    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $diametro = $_POST['diametro'];
    $comprimento = $_POST['comprimento'];
    $user_id = $_SESSION['user_id'];

    $ret = $pdo->prepare("INSERT INTO WCR_BOLTS (BLT_BRAND, BLT_TYPE, BLT_DIAMETER, BLT_LENGTH, BLT_USR_ID) VALUES (?, ?, ?, ?, ?)");
    $ret->bindParam(1,$marca);
    $ret->bindParam(2,$tipo);
    $ret->bindParam(3,$diametro);
    $ret->bindParam(4,$comprimento);
    $ret->bindParam(5,$user_id);
    $ret->execute();



    header('location: index.php');