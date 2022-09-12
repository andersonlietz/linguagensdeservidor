<?php
if(!is_dir('img')){
    mkdir('img');
}
$arquivos = scandir('img');
echo '<ul>';
foreach($arquivos as $a){
    echo '<li>' . $a . '</li>';
}
echo '</ul>';

//----------
$fh = fopen('img/teste1.txt', 'r');
if($fh){
    fclose($fh);
}

$fh = fopen('img/teste2.txt', 'w+');
if($fh){
    fclose($fh);
}

$fh = fopen('img/teste3.txt', 'x+');
if($fh){
    fclose($fh);
}

$fh = fopen('img/teste3.txt', 'x');
if($fh){
    fclose($fh);
}