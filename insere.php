<?php 
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', '');
$linhas_afetadas = $db->exec("INSERT INTO `usuarios` (`email`, `nome`, `senha`) VALUES ('andre@dasilva.com', 'André', '456789')");

if($linhas_afetadas > 0){
    echo $linhas_afetadas . ' linhas foram afetadas';
} else {
    echo 'Nenhuma linha foi afetada!';
}
