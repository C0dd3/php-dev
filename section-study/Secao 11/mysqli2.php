<?php

# Conectando com o Banco de Dados MYSQL
$conn = new mysqli("localhost","root","","db_php_7"); #Param: ip,usr,pass,name_db;

# Verificando error no Banco de Dados
if($conn->connect_error) {

    return "Error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin"); # Inserção de código Mysqli automáticamente.

$data = array(); # Criando data para array em JSON.

while ($row = $result->fetch_assoc()) { # Veririfcar se há dados na variável e adiciona a outra até onde tiver dados.

    array_push($data, $row); # Chama o arrya e adiciona valores do banco.

}

echo json_encode($data); # Encripta o código em JSON.

# MYSQLI_ASSOC & fetch_assoc() são equivalente.

?>