<?php

require_once "conexao.php"; // Local do arquivo de conexão

// criação da tabela aluno do banco
$sql = "CREATE TABLE aluno (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(40) NOT NULL,
  telefone INT(11) NOT NULL)";

    if ($conn->query($sql) === TRUE) {
      echo "Table Aluno create successfully";
    } else {
      echo " Error creating table: " . $conn->error;
    }
    
   // $conn->close(); 

?>