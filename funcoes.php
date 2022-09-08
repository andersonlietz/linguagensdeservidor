<?php 

function dizer_ola_mundo(){ // declaração da função
	echo "Olá Anderson! <br>";
}

dizer_ola_mundo(); // chamada da função
dizer_ola_mundo(); // chamada da função 
dizer_ola_mundo(); // chamada da função

echo'<hr>';

function dizer_ola($nome){
	echo "<hr><br>Olá, $nome!<br><hr>";
}
dizer_ola("aluno");
dizer_ola("professor");
dizer_ola("João");

echo'<hr>';
function soma_dez($num){
	return 10 + $num;
}

echo "Daqui 10 anos, você terá " . soma_dez(22);

//----------
echo'<hr>';

$idade = 20;

function modifica(&$a){
    echo 'Internamente (antes): ' . $a . '<br>';
    $a = 100;
    echo 'Internamente (depois): ' . $a . '<br>';
}

echo $idade . '<br>';
modifica($idade);
echo $idade;

# -------------
echo "<hr>";
function calcular_idade($ano_nascimento){
	return date('Y') - $ano_nascimento;
}
echo 'Você tem ' . calcular_idade(2000) . ' anos!';


######
echo"<hr>";
function fatorial($n){
    if($n == 0) {
    return 1;	} else {
        return $n * fatorial($n - 1);
        }
    }
    
    echo 'O fatorial de 5 é ' . fatorial(5);

