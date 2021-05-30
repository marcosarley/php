<?php
require_once "conexao_oo.php";

// preparar e vincular
$stmt = $conn->prepare("INSERT INTO meusconvidados (nome, sobrenome, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $sobrenome, $email);

// ajustar os parâmetros e executar
$nome = "José";
$sobrenome = "Outro";
$email = "john@example.com";
$stmt->execute(); // stmt => statement (declaração)

$nome = "Melissa";
$sobrenom = "Campos";
$email = "mary@example.com";
$stmt->execute(); // stmt => statement (declaração)

$nome = "Rodrigo";
$sobrenome = "Oliveira";
$email = "julie@example.com";
$stmt->execute(); // stmt => statement (declaração)

echo "Os novos registros foram criados com sucesso!";

$stmt->close(); // fecha a conexão preparada
$conn->close(); // fecha a conexão padrão
?>