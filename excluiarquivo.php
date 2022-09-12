<?php 
if(unlink('img/pexels-kayra-sercan-13302244.jpg')){
	echo "Removido com sucesso!";
} else {
	echo "Erro ao remover!";
}