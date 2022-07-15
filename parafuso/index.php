
<?php

    include 'config.php';

    $ret = $pdo->prepare('SELECT * FROM WCR_BOLTS');
    $ret->execute();
    
    $data = $ret->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro de parafusos</title>
</head>
<body>
    <h1>Parafusos de <?=$_SESSION['username'] ?></h1>
    <table>
    <?php foreach ($data as $row): ?>
        <?php if ($row['BLT_USR_ID'] == $_SESSION['user_id']): ?>
            <tr>
                <td><?= $row['BLT_ID']?></td>
                <td><?=$row['BLT_BRAND']?></td>
                <td><?=$row['BLT_TYPE']?></td>
                <td><?=$row['BLT_DIAMETER']?></td>
                <td><?=$row['BLT_LENGTH']?></td>
                <td>
                    <a href="delete.php?id_parafuso=<?= $row['BLT_ID'] ?>">remover</a>
                </td>
                <td>
                    <a href="edit.php?id_parafuso=<?=$row['BLT_ID']?>">editar</a>
                </td>
                
            </tr>
        <?php endif?>
    <?php endforeach ?>
    </table>
    <form action="add-parafuso.php" method="POST">
            <fieldset>
                <legend>Adicionar Parafuso</legend>
                <input type="text" name="marca" placeholder="marca">
                <select name="tipo">
                    <option value="sextavado">sextavado</option>
                    <option value="phillips">phillips</option>
                    <option value="allen">allen</option>
                </select>
                <input type="number" name="diametro" placeholder="diametro">
                <input type="number" name="comprimento"placeholder="comprimento">
                <input type="submit" value="adicionar">
            </fieldset>
        </form>
        <a href="/logout.php">Sair</a>
</body>
</html>