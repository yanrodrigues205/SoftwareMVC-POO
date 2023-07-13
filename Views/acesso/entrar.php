<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - PlayEduc</title>
</head>
<body>
    <center>
        <form method="POST" action="logar">
            <?php if(isset($msg_retorno) && $msg_retorno !== ""){echo $msg_retorno;}?>
            <h4>Entrar</h4>
            <label>Email:</label><input type="email" name="email" class="input"><br>
            <label>Senha:</label><input type="password" name="senha" class="input"><br>
            <button type="submit">Enviar</button>

        </form>
    </center>
</body>
</html>