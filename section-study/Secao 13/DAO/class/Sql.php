<?php

class Sql extends PDO { # Extende de PDO para pode realizar as funções do BD.

    private $conn;

    public function __construct() # Construtor de acesso ao banco.
    {

        $this->conn = new PDO("mysql:host=localhost;dbname=db_php_7", "root", "");
        
    }
    
    public function query($rawQuery, $params = array()) { # rawQuery = Dados brutos a serem tratados; params = valores e dados.

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    private function setParams($statment, $parameters = array()) { # Permiti set vários parâmetros.

        foreach ($parameters as $key => $value) { # Acessa o dados via array.

            $this->statment->setParam($key, $value); # bindParam para métodos ou variáveis.

        }

    }

    private function setParam($statment, $key, $value) { # Permiti set um único parâmetro.

        $statment->bindParam($key, $value);

    }

    public function select($rawQuery, $params = array()) {

        $stmt = $this->query($rawQuery, $params); # Utilizando de outro métodos ja criado para usar da mesma função.

        return $stmt->fetchAll(PDO::FETCH_ASSOC); # Dessa forma consigo acessar os dados de forma associativa.

    } 



}

?>
