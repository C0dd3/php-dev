<?php

function incluirClasse($nome_classe) {

    if (file_exists("Seção 09" . DIRECTORY_SEPARATOR . $nome_classe . ".php") === true) {
        
        require_once("Seção 09" . DIRECTORY_SEPARATOR . $nome_classe . ".php");

    }

}

spl_autoload_register("incluirClasse");
spl_autoload_register(function($nome_classe) {
    if (file_exists("Abstratas" . DIRECTORY_SEPARATOR.  $nome_classe . ".php") === true) {
        require_once("Abstratas" . DIRECTORY_SEPARATOR . $nome_classe . ".php");
    }
});

$carro = new DelRey();

$carro->acelerar(60);




?>