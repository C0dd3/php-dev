<?php

# Confirmando e negando ações com COMMIT / ROLLBACK / BEGIN TRANSATION:

$conn = new PDO('mysql:host=localhost;dbname=db_php_7', 'root', '');

$conn->beginTransaction(); # Começa uma transição de dados no banco.

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?"); # coloca-se esse valore, pois impede atividade hackers na coleta de dados.

$id = 2;

$stmt->execute(array($id)); # Executa uma várivel que depende da possição do array.

#$conn->rollBack(); # Cancela a execução do comando anterior.
$conn->commit();

echo "Excluindo com sucesso, OK!";

?>