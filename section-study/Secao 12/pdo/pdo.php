<?php

# PDO coneção de banco de dados entre outrass funcionalidades

$conn = new PDO("mysql:dbname=db_php_7;host=localhost","root",""); # Conexão com o banco de dados.

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin"); # Uso da função SQL no banco com php. Aqui você inseri comando como, INSERT, SELECT, TRUNCATE entre outros.
 
$stmt->execute(); # Execução do código acima.

$result = $stmt->fetchAll(PDO::FETCH_ASSOC); # Função Static, para visualização de conteúdo no BD.

foreach ($result as $row) { # Script mais elaborado de visualização.
    # Buscando Informações dentro do Banco.
    foreach ($row as $key => $value) {

        echo "<strong>".$key.": <strong>".$value."<br/>";

    }

    echo "===============================================<br>";
    
}

var_dump($result); # Apenas um visualizador

# OBSERVAÇÃO: Aconselhavél baixar um visualiazador JSON no chrome. EX: JSONview.

?>