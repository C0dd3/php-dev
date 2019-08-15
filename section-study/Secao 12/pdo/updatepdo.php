<?php

# Update com PDO:

$conn = new PDO('mysql:host=localhost;dbname=db_php_7', 'root', '');

$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin = :LOGIN, dessenha  = :PASSWORD WHERE idusuario = :ID"); # coloca-se esse valore, pois impede atividade hackers na coleta de dados.

$login = "Denilson";
$senha = "miapica";
$id = "3";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterando com sucesso, OK!";

?>