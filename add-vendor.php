<?php

    include 'config.php';
    

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['passwd'];
    $confirm_password = $_POST['confirm_password'];
    $cpf = $_POST['cpf'];

    

    if ($password == $confirm_password) {
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['cpf']);

        $ret = $pdo->query("
            INSERT INTO WCR_USER (USR_NAME,USR_EMAIL,USR_PASSWD,USR_CPF)
            VALUES ('$name','$email','$password','$cpf');
        ");

        header('location: index.php');
    }else {
        $_SESSION['name'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['cpf'] = $cpf;
        header('location: register.php?err=0');
    }


    
    