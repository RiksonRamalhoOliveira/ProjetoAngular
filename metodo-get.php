<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastro de clientes</h1>
    <form method='GET' action="proc_metodo-get.php">
        <label>Nome:</label>
        <input type="text" name="nome_cliente" placeholder="digite o nome" required><br><br>
        <label>E-mail</label>
        <input type="email" name="email_cliente" placeholder="digite seu e-mail" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>