<?php

# Atributos e Métodos em classes(POO):

# Métodos Get e Set: pegam o valor(private) e as modifica.

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo() {

        return $this->modelo;

    }

    public function setModelo($value) {

        $this->modelo = $value;  # A variável se torna o value, pois modifica 

    }

    public function getMotor() { # Obrigado usar return.

        return $this->motor;    

    }

    public function setMotor($value) { // Nós set não usam return.

        $this->motor = $value;

    }

    public function getAno():int {

        return $this->ano;

    }

    public function setAno($value) {

        $this->ano = $value;

    }

    public function exibeCarro() {

        return array(
            "modelo" =>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }

}

$gol = new Carro();

$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibeCarro());







?>