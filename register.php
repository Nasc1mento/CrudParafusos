<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<h1>Cadastrar-se</h1>
    <?php if (isset($_GET['err']) && $_GET['err'] == '0'): ?>
        <h2>As senhas não conferem</h2>
    <?php endif ?>
    <form action="add-vendor.php" method="POST">
        <input type="text" name="name" placeholder="Name" value="<?=$_SESSION['name']?>">
        <input type="text" name="email" placeholder="Email" value="<?=$_SESSION['email'] ?>">
        <input type="number" name="cpf" placeholder="cpf" value="<?=$_SESSION['cpf'] ?>">
        <input type="password" name="passwd" placeholder="Password">
        <input type="password" name="confirm_password" placeholder="Confirm password">
        <input type="submit" value="Concluir">
    </form>
</body>
</html>