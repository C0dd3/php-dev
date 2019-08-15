<?php

# Deletando recursos(dados) com DELETE:

$conn = new PDO('mysql:host=localhost;dbname=db_php_7', 'root', '');

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID"); # coloca-se esse valore, pois impede atividade hackers na coleta de dados.

$id = "1";

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Excluindo com sucesso, OK!";

?>