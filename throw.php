<?php


function inverter($x){
    if ($x == 0){
        throw new Exception('Divisão por zero.');
    }
    return 1/$x;
}

/*
------------- MAU EXEMPLO
echo inverter(10) . "<br>";
echo inverter(0) .  "<br>";
echo "Olá mundo <br>";
*/
try{
    echo inverter(10) . "<br>";
    echo inverter(0) .  "<br>";
    echo "Olá mundo <br>";
}catch(Exception $e){
    echo "Um erro aconteceu :( <br>";
    echo "Detalhes do erro: <ul>";
    echo "<li>Código: " . $e->getCode() . "</li>";
    echo "<li>Mensagem: " . $e->getMessage() . "</li>";
    echo "</ul>";
}



