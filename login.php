<?php

    session_start();

    $username = $_POST['user'];
    $passwd = $_POST["passwd"];
    $email = $_POST['email'];


    // $users = [];
    // $fp = fopen('users.csv','r');
    // while ($row = fgets($fp)) {
    //     $users[] = explode(',',$row);
    // }

    $ret = $pdo->query('SELECT * FROM WCR_USR');
    $usets = $ret->fetchAll();

    foreach ($users as $user){
        
        if($email == $user[1] && $passwd == trim($user[2])){
            $_SESSION['username'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['user']
        }
    }


    header('location: home.php');