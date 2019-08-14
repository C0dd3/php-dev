<?php

# Polimorfismo: métodos como mesmo nome, em classes diferentes, tem funcionalidade diferente.

abstract class Animal { # Classe Pai

    public function falar() {

        return "Som!";

    }

    public function mover() {

        return "Andar!";

    }

}

class Cachorro extends Animal { # Filha

    public function falar()
    {
        return "Late!";
    }

}

class Gato extends Animal { # Filha

    public function falar()
    {
        return "Miau";
    }

}

class Passaro extends Animal { # Filha

    public function falar()
    {
        return "Piu!";
    }

    public function mover()
    {
        return "Voa" . parent::mover(); # Acesso static na classe mãe.
    }

}

$animal = new Cachorro();

echo $animal->falar() . "<br>";
echo $animal->mover() . "<br>";

echo "---------------------------";

$animal2 = new Gato();

echo $animal2->falar() . "<br>";
echo $animal2->mover() . "<br>";

echo "---------------------------";

$animal3 = new Passaro();

echo $animal3->falar() . "<br>";
echo $animal3->mover() . "<br>";



?>