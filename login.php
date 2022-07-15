<?php

    include 'config.php';

    $username = $_POST['user'];
    $passwd = $_POST["passwd"];
    $email = $_POST['email'];

    $ret = $pdo->prepare('SELECT * FROM WCR_USERS');
    $ret->execute();
    $users = $ret->fetchAll();

    foreach ($users as $user){
        
        //confere se o email e a senha conferem
        if($email == $user['USR_EMAIL'] && $passwd == $user['USR_PASSWD']){
            $_SESSION['username'] = $user['USR_EMAIL'];
            $_SESSION['name'] = $user['USR_NAME'];
            $_SESSION['user_id'] = $user['USR_ID'];
        }
    }


    header('location: home.php');