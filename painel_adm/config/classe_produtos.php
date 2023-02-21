<?php
//Conexão com Banco de Dados
require_once '../../conexao/conexaoBD.php';


//Função para Listar Todas as Categorias
$queryProdutoCategoria = $conexaoBD->query("SELECT id_produto_categoria, nome_produto_categoria FROM tb_produto_categoria ORDER BY nome_produto_categoria ASC");
$queryProdutoCategoria->execute();
			$RegistrosProdutoCategoria = $queryProdutoCategoria->fetchALL(PDO::FETCH_ASSOC);
?>