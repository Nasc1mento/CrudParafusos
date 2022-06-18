<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header('location: index.php?err=0');
        exit();
    }

    header('location: lampada/');
?>


<h1>Seja bem vindo <?= $_SESSION['name']?> (<?=$_SESSION['username']?>)</h1>
<a href="logout.php">Sair</a>