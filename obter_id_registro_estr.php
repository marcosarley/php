<?php
// ao salvar, escolher codifica��o ISO 8859-1
// verificar diferen�a com include_once
	require_once "conexao_estr.php"; // inclui o script indicado, se ele n�o estiver previamente aberto

	// armazena a instru��o MySQL
	$sql = "INSERT INTO meusconvidados (nome, sobrenome, email) VALUES ('Maria', 'Ningu�m', 'marianinguem@exemplo.com')";

	// executando a instru��o de inser��o de novo registro na tabela
	if (mysqli_query($conn, $sql)) {
		$last_id = mysqli_insert_id($conn); // retorna o id (c�digo) do �ltimo registro inserido ou alterado
	  echo "Novo registro inserido com sucesso. O �ltimo identificador (c�digo) inserido �: " . $last_id;
	} else {
	  echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
	}

	// Fecha a conex�o
	mysqli_close($conn);
?>