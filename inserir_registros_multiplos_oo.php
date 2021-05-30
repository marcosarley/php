<?php
require_once "conexao_oo.php";

$sql = "INSERT INTO meusconvidados (nome, sobrenome, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO meusconvidados (nome, sobrenome, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO meusconvidados (nome, sobrenome, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
  echo "Novos registros inseridos com sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>