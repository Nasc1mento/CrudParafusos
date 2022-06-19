<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header('location: index.php?err=0');
        exit();
    }

    header('location: parafuso/');
?>