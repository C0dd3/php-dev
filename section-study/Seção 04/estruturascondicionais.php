<?php 

	# Estrutura de controle(condicionais):
	# IF, Elsif, Else.
	# Operadores Ternários;

	$nome = "Vicente";

	if(isset($nome) && $nome == "Vicente") {

		echo "Olá $nome, seja bem vindo ao Programando em PHP";
	} else {
		echo "Você não é Vicente, sai daqui $nome!";
	}


	$idade = 12;

	$idade_crianca = 12;
	$idade_adulto = 20;
	$idade_idoso = 60;

	if($idade < $idade_crianca) {
		echo "Você é uma criança!";
	} elseif ($idade > $idade_adulto) {
		echo "Você é um adulto!";
	} elseif ($idade > $idade_idoso) {
		echo "Você é um idoso!";
	} else {
		echo "WTF";
	}

	# Operador Ternário
	echo ($idade < $idade_adulto) ? "Menor de idade":"Maior de idade";

?>