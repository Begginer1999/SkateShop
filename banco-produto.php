<?php

function listaProdutos($conexao){
	$produtos =  array();
	$resultado = mysqli_query($conexao, "SELECT * FROM PRODUTOS");
	while ($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao){
	$query = "INSERT INTO PRODUTOS (nome, preco, descricao) VALUES('{$nome}', {$preco}, '{$descricao}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;
}

function removeProduto($conexao, $id){
	$query = "DELETE FROM PRODUTOS WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}