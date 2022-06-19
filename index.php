<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Entrar</h1>
    <?php if (($_GET['err'] ?? $_GET['erro'] ?? -1) == '0'): ?>
        <p>Usuário não autenticado</p>
    <?php endif ?>
    <form action="login.php" method="POST">
        <input type="text" name="email" placeholder="Email"> 
        <input type="password" name="passwd" placeholder="senha">
        <input type="submit" value="Entrar">
    </form>
    <h1>Cadastrar-se</h1>
    <form action="add-vendor.php" method="POST">
        <input type="text" name="user" placeholder="username">
        <input type="text" name="email" placeholder="email">
        <input type="number" name="cpf" placeholder="cpf">
        <input type="password" name="passwd" placeholder="senha">
        <input type="submit" value="Concluir">
    </form>
</body>
</html>