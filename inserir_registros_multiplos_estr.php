<?php
require_once "conexao_estr.php";

$sql = "INSERT INTO meusconvidado (nome, sobrenome, email)
VALUES ('Alice', 'Silva', 'john@example.com');";
$sql .= "INSERT INTO meusconvidados (nome, sobrenome, email)
VALUES ('Roberto', 'Costa', 'mary@example.com');";
$sql .= "INSERT INTO meusconvidados (nome, sobrenome, email)
VALUES ('Mariana', 'Serra', 'julie@example.com')";

if (mysqli_multi_query($conn,$sql) === TRUE) {
  echo "Novos registros inseridos com sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>