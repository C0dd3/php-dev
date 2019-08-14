<?php
# Ess comando foi decrepted, ou seja, não é mais utilizado.

# Geralmente classe são um arquivo .php próprio.

# Autoload: Carrega automáticamente todas as classe de um projeto.

function __autoload($nomeClasse) {

    var_dump($nomeClasse);

    require_once("nomeClasse.php");

}

$carro = new DelRay();

#$carro->acelerar(80);

?>