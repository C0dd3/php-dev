<?php

interface Veiculo {  # Interface

public function acelerar($velocidade); 
public function frenar($velocidade);
public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo { # Para adicionar outras interfaces, necessita coloca vírgula.

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

?>