
<?php
    include 'config.php';

    $data = [];
    $fp = fopen(DATA_SOURCE,'r');
    while ($row = fgets($fp)) {
        $data[] = explode(',',$row);
    }

    // var_dump($data);
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
<body>
    <h1>Parafusos de <?=$_SESSION['username'] ?></h1>
    <table>
    <?php foreach ($data as $i => $row): ?>
        <?php if (trim($row[4]) == $_SESSION['username']): ?>
            <tr>
                <td><?= $i ?></td>
                <td><?=$row[0]?></td>
                <td><?=$row[1]?></td>
                <td><?=$row[2]?></td>
                <td><?=$row[3]?></td>
                <td>
                    <a href="delete.php?linha=<?= $i ?>">remover</a>
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
                    <option value="comprimento">comprimento</option>
                </select>
                <input type="number" name="diametro" placeholder="diametro">
                <input type="number" name="comprimento"placeholder="comprimento">
                <input type="submit" value="adicionar">
            </fieldset>
        </form>
        <a href="/logout.php">Sair</a>
</body>
</html>