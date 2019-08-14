<?php

# Encapsulamento: Significa controlar e proteger os conteúdo.

# Modificador de Acesso: permtir o acesso aos dados, de uma maneira configurada.

# public, private, abstract, protected, static e etcs.

# Public: Todos veem os dados; 

class Pessoa {

    public $nome = "Vincent"; # Permiti acesso e visão total da variável.
    protected $idade = "48"; # Não é permitido acesso, visto que ela está protegida, só podem serem visto pela classe ou herança.
    private $senha = "12345";

    public function verDados() {

        echo $this->nome. "<br>";
        echo $this->idade. "<br>";
        echo $this->senha. "<br>";

    }

}

class Programador extends Pessoa { # Herança Pessoa -> Programador.

    # Por extender da classe Pessoa, os atributos e métodos publics e protected, são visto pela herança(classe filha).

    public function verDados() {

        echo get_class($this) . "<br>"; # Com essa método é possível ver de qual classe a função está sendo ativado.

        echo $this->nome. "<br>";
        echo $this->idade. "<br>";
        echo $this->senha. "<br>"; # Aqui dentro ele é indefinido.

    }

}

$objeto = new Programador();

echo $objeto->nome. "<br>";
// echo $objeto->idade. "<br>";
// echo $objeto->senha. "<br>";

$objeto->verDados(); # Método publicos permitem acesso a todos atributos que o mesmo enxerga dentro da classe.

?>

