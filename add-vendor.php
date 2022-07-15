<?php

    include 'config.php';
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['passwd'];
    $confirm_password = $_POST['confirm_password'];
    $cpf = $_POST['cpf'];

    

    if ($password == $confirm_password) {
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['cpf']);

        $ret = $pdo->prepare("INSERT INTO WCR_USERS (USR_NAME,USR_EMAIL,USR_PASSWD,USR_CPF) VALUES (?, ?, ?, ?);");

        $ret->bindParam(1, $name);
        $ret->bindParam(2, $email);
        $ret->bindParam(3, $password);
        $ret->bindParam(4, $cpf);

        $ret->execute();

       

        header('location: index.php');
    }else {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['cpf'] = $cpf;
        header('location: register.php?err=0');
    }


    
    