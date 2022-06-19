<?php



    include 'config.php';
    $linha = $_GET['linha'];

    $data = [];

    $fp = fopen(DATA_SOURCE,'r');
    while ($row = fgets($fp)) {
        $data[] = $row;
    }

    $fp = fopen(DATA_SOURCE,'w');
    foreach($data as $idx => $row) {
        if ($idx == $linha) {
            continue;
        }
        fwrite($fp,$row);

        // if ($idx != $linha) {
        //     fwrite($fp, $row);
        // }
    }

        header('location: index.php');
