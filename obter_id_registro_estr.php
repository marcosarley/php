<?php
// ao salvar, escolher codificaзгo ISO 8859-1
// verificar diferenзa com include_once
	require_once "conexao_estr.php"; // inclui o script indicado, se ele nгo estiver previamente aberto

	// armazena a instruзгo MySQL
	$sql = "INSERT INTO meusconvidados (nome, sobrenome, email) VALUES ('Maria', 'Ninguйm', 'marianinguem@exemplo.com')";

	// executando a instruзгo de inserзгo de novo registro na tabela
	if (mysqli_query($conn, $sql)) {
		$last_id = mysqli_insert_id($conn); // retorna o id (cуdigo) do ъltimo registro inserido ou alterado
	  echo "Novo registro inserido com sucesso. O ъltimo identificador (cуdigo) inserido й: " . $last_id;
	} else {
	  echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
	}

	// Fecha a conexгo
	mysqli_close($conn);
?>