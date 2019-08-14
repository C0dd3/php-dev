<?php

# Interface: Ele disponibiliza métodos, paramentros entre outros recursos.

# É um código que é necessário(obrigatório) implementação de código(Classe)

# Documentos de API, são um exemplo de Interface.

# Geralmente feito por Sênior.

# Uma classe por implementar VÁRIAS INTERFACES.

interface Veiculo {  # Interface

    public function acelerar($velocidade); 
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo { # Para adicionar outras interfaces, necessita coloca vírgula.

    public function acelerar($velocidade)
    {
        
        echo "O veículo acelerou até ". $velocidade . "km/h";

    }

    public function frenar($velocidade)
    {
        
        echo "O veículo freiou até " . $velocidade . "km/h";

    }

    public function trocarMarcha($marcha)
    {
        
        echo "O veículo trocou de marcha" . $marcha;

    }

}

$carro = new Civic();

$carro->acelerar("120");

?>