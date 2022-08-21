<?php

    session_start();


    $dsn = 'mysql:host=127.0.0.1;dbname=WEB1_CRUD;port=3306';
    $pdo = new PDO($dsn, 'root', '');
    
