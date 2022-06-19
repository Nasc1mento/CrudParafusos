<?php

    session_start();

    $username = $_POST['user'];
    $passwd = $_POST["passwd"];
    $email = $_POST['email'];


    $users = [];
    $fp = fopen('users.csv','r');
    while ($row = fgets($fp)) {
        $users[] = explode(',',$row);
    }

    foreach ($users as $user){
        
        if($email == $user[1] && $passwd == trim($user[2])){
            $_SESSION['username'] = $user[0];
            $_SESSION['name'] = $user[2];
        }
    }


    header('location: home.php');