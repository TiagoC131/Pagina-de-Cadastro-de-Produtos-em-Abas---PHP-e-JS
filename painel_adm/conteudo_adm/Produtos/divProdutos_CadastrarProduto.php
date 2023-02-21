<?php
//Conexão com Banco de Dados
//require_once '../../config/classe_produtos.php';
//require_once '../../selectProdutoMarca.php';
?>


<html lang="pt-BR">
	
<head>
<!-- <script type="text/javascript" src="config/js/jquery-3.6.3.js"> </script>
<script type="text/javascript" src="config/js/selectFuncoesProduto.js"> </script> -->
</head>	
	
		
<body>

<!----------- CONTEUDO da Tabela ----------->	

		<h3>Cadastrar Produto</h3>
		
	
		<!------- Menu em Abas------->
	<div id="menuSuperiorAbasAdmCadastrarProduto">
		<?php include '../../conteudo_adm/Produtos/divProdutos_CadastrarProduto_SelectNovoProduto.php'; ?>	
	</div>
	
		
<div id="nav_divSelecaoCadastroProdutos">
	<p>Aqui a Div ira ser carregada conforme os selects</p>
	<p>De acordo com o produto sera carregado o tipo de peça que o incrementa.</p>
</div>
		

</body>
<script>
	
</script>
</html>