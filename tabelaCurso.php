<?php

require_once "conexao.php"; // Local do arquivo de conexão

// criação da tabela curso do banco
$sql = "CREATE TABLE curso (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    preco FLOAT(0.2) NOT NULL,
    duracao INT(3))";

if ($conn->query($sql) === TRUE) {
    echo "Table Curso created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();

?>