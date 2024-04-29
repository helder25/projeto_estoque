
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?= base_url('login/authenticate') ?>" method="post">
        <input type="text" name="username" placeholder="Usuário">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
