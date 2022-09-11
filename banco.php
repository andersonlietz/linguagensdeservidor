<?php 

$mysql = mysqli_connect('localhost', 'root', '', 'meu_banco');
$resultado = mysqli_query($mysql, "SELECT * from usuarios");
$linha = mysqli_fetch_assoc($resultado);
echo $linha['nome'];
?>