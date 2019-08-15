<?php

# Inserindo dados no Banco de dados Usando PDO.

$conn = new PDO('mysql:host=localhost;dbname=db_php_7', 'root', '');

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)"); # coloca-se esse valore, pois impede atividade hackers na coleta de dados.

$login = "Vicente";
$senha = "12345678";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$senha);

$stmt->execute();

echo "Inserido OK!";

?>