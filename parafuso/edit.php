<?php

    include 'config.php';
    
    $idparafuso = $_GET['idparafuso'];
    $ret = $pdo->query('SELECT * FROM WCR_BOLTS WHERE BLT_ID='.$idparafuso);
    $data = $ret->fetchAll();

    foreach ($data as $row){
        $marca = $row['BLT_BRAND'];
        $diametro = $row['BLT_DIAMETER'];
        $comprimento = $row['BLT_LENGTH'];

    }
    var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>


<form action="update.php" method="POST">
            <fieldset>
                <legend>Adicionar Parafuso</legend>
                <input type="text" name="marca" placeholder="marca" value=<?=$marca?>>
                <select name="tipo">
                    <option value="sextavado">sextavado</option>
                    <option value="phillips">phillips</option>
                    <option value="allen">allen</option>
                </select>
                <input type="number" name="diametro" placeholder="diametro" value=<?=$diametro?>>
                <input type="number" name="comprimento"placeholder="comprimento" value=<?=$comprimento?>>
                <input type="submit" value="adicionar">
            </fieldset>
        </form>
        <a href="/logout.php">Sair</a>
</body>
</html>