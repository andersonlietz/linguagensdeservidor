<?php 
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', '');
$resultado = $db->query('SELECT * FROM usuarios');
$linha = $resultado->fetch();

echo $linha['nome'];
//    ------------
echo '<hr>';

$consulta = $db->query('SELECT * FROM usuarios');
$usuarios = $consulta->fetchAll();

echo '<h1>Lista de usuários</h1>';
echo '<ul>';
foreach($usuarios as $u) {
    echo '<li>';
    echo $u['nome'] . ' - ' . $u['email'];
    echo '</li>';
}
echo '</ul>';
