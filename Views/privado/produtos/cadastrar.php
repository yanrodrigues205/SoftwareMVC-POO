<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos - Sistema</title>
</head>
<body>
    <center>
    <h4>Cadastrar Produtos</h4>
    <form method="POST" enctype="multipart/form-data" action="produto_cadastrar">
        <span>Titulo</span><input type="text" name="titulo"><br>
        <span>Descricao</span><input type="text" name="descricao"><br>
        <span>Quantidade</span><input type="number" name="quantidade"><br>
        <span>Valor</span><input type="text" name="valor"><br>
        <span>Tipo de Produto</span><select name="tipo">
            <option value="Limpeza"> Limpeza  </option>
            <option value="Alimento"> Alimento  </option>
            <option value="Pesca"> Pesca  </option>
        </select><br>
        <button type="submit" class="btn btn-">Cadastar</button>
    </form>
    <br>
    <?php if(isset($mensagem_retorno)){ echo $mensagem_retorno; } ?>
    </center>
</body>
</html>