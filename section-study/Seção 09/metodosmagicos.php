<?php

# Métodos Mágicos: São coisa que você não ver, mas tudo acontece se programado.

# Um exemplo de método mágico, seria o construtor.

# Todos os __(2undeline) são métodos construct.

# __toString: serializa os documentos em string.

# Principais: __construct e __destruct -> Banco de Dados.

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) # Cria um construtor completo.
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    } # Obs: Ainda é ncessário o uso de GET e SET para manipulação de atributos. 

    public function __destruct()
    { # Apaga o construtor por completo, limpa da memory, usado para desconectar de um banco de dados, log e etcs.

        //var_dump("Destruir");

    } 

    public function __toString()
    {

        return $this->logradouro.", ".$this->numero." - ".$this->cidade;

    }
        
}

$meu_endereco = new Endereco("Rua Santa Luzia","3010","Teresina");

echo $meu_endereco; # O que é usando quando é usado strings.


?>
