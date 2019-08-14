<?php

# Trouxemos a classe Cadastro da pasta raiz.

# Teoricamente, isso pode se torna um tanto redundante caso exista outra classe com mesmo nome, em pasta diferente.

require_once("config.php");

use client\Cadastro;

$cad = new Cadastro();

$cad->setNome("Vicente Paulo Costa de Andrade");
$cad->setEmail("vicentepaulo001@outlook.com");
$cad->setSenha("12345");
$cad->registrarVenda();

echo $cad;

?>