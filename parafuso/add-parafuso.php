<?php

    include 'config.php';

    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $diametro = $_POST['diametro'];
    $comprimento = $_POST['comprimento'];


    $fp = fopen(DATA_SOURCE, 'a');
    $row = implode(',',[$marca,$tipo,$diametro,$comprimento,$_SESSION['username']]);
    fwrite($fp, $row . PHP_EOL);

    header('location: index.php');