<?php

# Conectando com o Banco de Dados MYSQL
$conn = new mysqli("localhost","root","","db_php_7"); #Param: ip,usr,pass,name_db;

# Verificando error no Banco de Dados
if($conn->connect_error) {

    return "Error: " . $conn->connect_error;

}

# Inserindo dados no Banco de Daods:
$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUE(?, ?)"); # ?? server para indica pelo bind_param, os tipo de elemento que vai ser inseridos.
$stmt->bind_param("ss",$login,$pass); #Param: tipo_valor,valor1,valor2;

# É necessário colocar variáveis, poís na alocação de memório é necessário que não seja por referência.

$login = "user";
$pass = "12345";

$stmt->execute(); # Executa o comando.

$login = "root";
$pass = "@%#¨$";

$stmt->execute();

?>