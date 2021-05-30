<?php
// ao salvar, escolher codificação ISO 8859-1
// verificar diferença com include_once
	require_once "conexao_oo.php"; // inclui o script indicado, se ele não estiver previamente aberto

	// armazena a instrução MySQL
	$sql = "INSERT INTO meusconvidados (nome, sobrenome, email) VALUES ('Ângela', 'Carvalho', 'angela@aol.com')";

	// executando a instrução de inserção de novo registro na tabela
	if ($conn->query($sql) === TRUE) {
	  $last_id = $conn->insert_id; // retorna o id (código) do último registro inserido ou alterado
	  echo "Novo registro criado com sucesso. O identificador (código) do útlimo registro inserido é :" . $last_id;
	} else {
	  echo "Erro: " . $sql . "<br>" . $conn->error;
	}

	// Fecha a conexão
	$conn->close();
?>