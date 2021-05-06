<?php

require_once "conexao.php"; // Local do arquivo de conexão

// criação da tabela instrutor do banco
$sql = "CREATE TABLE instrutor (
    id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(40) NOT NULL,
    telefone INT(11) NOT NULL)
    ";

if ($conn->query($sql) === TRUE) {
    echo "Table Instrutor created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();

?>