<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - PlayEduc</title>
</head>
<body>
<center>
        <form method="POST" action="cadastrar">
            <h4>Cadastrar</h4>
            <label>Nome:</label><input type="text" name="nome" class="input"><br>
            <label>Email:</label><input type="email" name="email" class="input"><br>
            <label>Senha:</label><input type="password" name="senha" class="input"><br>
            <button type="submit" name="botao">Cadastrar</button><br>
            <?php if(isset($msg_retorno)){ $msg = explode("@", $msg_retorno); echo "<p style='color: ".$msg[1]."'>".$msg[0]."</p>";} ?>
        </form>
    </center>
</body>
</html>