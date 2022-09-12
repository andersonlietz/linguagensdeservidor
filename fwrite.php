<h1>Qual seu nome?</h1>
<form method="post">
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>
<?php
/*
if(array_key_exists('nome', $_POST)){
    $fh = fopen('nome.txt', 'r+');
    fwrite($fh, $_POST['nome']);
    fclose($fh);
}*/

//escrita e leitura simplificadas

if(array_key_exists('nome', $_POST)){
    file_put_contents('img/nome.txt', $_POST['nome']);
}

$nome = file_get_contents('img/nome.txt');
if($nome){
    echo "<h2>O último nome foi $nome</h2>";
}


