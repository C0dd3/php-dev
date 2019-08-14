<?php

# Herança: Serve para deixa o código mais 

# É preferível ter classes dividas, para maior abstração e deixar distribuido o código para maior reajustes.

class Documentos {


    private $numero;

    public function getNumero() {

        return $this->numero;

    }

    public function setNUmero($value) {

        $this->numero = $value;

    }

}

class CPF extends Documentos {

    public function validar():bool {

        $numeroCPF = $this->getNumero();

        # Validação de CPF...

        return true;

    }
}

$doc = new CPF();

$doc->setNUmero("123456778");

echo $doc->validar();

echo "<br>";

echo $doc->getNumero();

?>
