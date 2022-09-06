
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
<h1>
    Meu Formulário
</h1>
<form>
    <label for="campo_de_nome">Digite seu nome</label>
    <input name="nome_usuario" id="campo_de_nome" type="text"/>
    <button type="submit">Enviar</button>
</form>
<?php
if(isset($_GET['nome_usuario'])){
    echo '<h2>Olá, ' . $_GET['nome_usuario'] . '!<h2>';
}
?>
</body>
</html>


