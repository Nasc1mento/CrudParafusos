<?php

    session_start();

    define('DATA_SOURCE','users.csv');


    $nome = $_POST['user'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $cpf = $_POST['cpf'];

    $fp = fopen(DATA_SOURCE, 'a');

    $row = implode(',',[$nome,$email,$passwd,$cpf]);
    fwrite($fp, $row.PHP_EOL);



    header('location: index.php');
    