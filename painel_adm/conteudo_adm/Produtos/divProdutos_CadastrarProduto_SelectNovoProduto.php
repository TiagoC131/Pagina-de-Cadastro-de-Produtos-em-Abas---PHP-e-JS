<?php
//Conexão com Banco de Dados
require_once '../../config/classe_produtos.php';
require_once '../../selectProdutoMarca.php';
?>
<script type="text/javascript" src="config/js/jquery-3.6.3.js"> </script>
<script type="text/javascript" src="config/js/selectFuncoesProduto.js"> </script>
	

		<!------- Div Abas Novo e Editar------->
<div id="menuSuperiorAdmCadastrarProduto">
		<nav class="links_menuSuperiorAdmCadastrarProduto">
				<ul>
					<li id="btn_abaCadastroNovoProduto" class="links_menuSuperiorAdmCadastrarProduto_btn_NovoProduto_Ativo">
							  Novo
					</li>
					<li id="btn_abaCadastroEditarProduto" class="links_menuSuperiorAdmCadastrarProduto_btn_EditarProduto_Bloqueado"> 
							  Editar
				    </li>
				</ul>
		</nav>
</div>
		
		<!------- Div Menu Selecao de Cadastro------->
<div  id="div_selectCadastroDeProdutos">
		<!------- Selecionar Descrição/ Marcar/ Modelo------->
	
	<nav class="nav_menuSelecaoCadastroProdutos">
		<form action="" method="GET" id="form_pesquisa">
			
			<!------- Selecionar Categoria de Produtos------->
				<select name="BoxSelecionarCategoria" id="BoxSelecionarCategoria" class="produtoCadastrar_BoxSelecionarCategoria" required>
					<option value:"0" selected disabled>Descrição do Produto</option>
					<?php
					foreach($RegistrosProdutoCategoria as $SelecionarProdutoCategoria)
					{
						echo '<option value="'.$SelecionarProdutoCategoria['id_produto_categoria'].'">'.$SelecionarProdutoCategoria['nome_produto_categoria'].'</option>';
					}
					?>
				</select>
		
		
		<!------- Selecionar Marca de Produtos------->
				<select name="BoxSelecionarMarca" id="BoxSelecionarMarca" class="produtoCadastrar_BoxSelecionarMarca" required>
					<option value:"0" selected disabled>Marca do Produto</option>
				</select>
		
		<!------- Código do Produto-------><!------- Selecionar Categoria de Produtos------->
		<input id="BoxFormularioCodigoProduto" class="produtoCadastrar_BoxFormularioCodigoProduto" placeholder="Código do Produto" type="text" name="cadastrarProduto" />
			
		<!------- Selecionar o Modelo do Produto------->
		<select name="BoxSelecionarModelo" id="BoxSelecionarModelo" class="produtoCadastrar_BoxSelecionarModelo" required>
		  <option value:"0" selected disabled>Modelo do Produto</option>
					<option value:"1"  >Crin</option>
					<option value:"2"  >Crin 2</option>
					<option value:"3"  >Crin 3</option>
					<option value:"4"  >Crin 4</option>
					<option value:"5"  >Piezo</option>
					?>
		  </select>
			
		<!------- Selecionar o Tipo de Atuador------->
		<select name="BoxSelecionarTipoAtuador" id="BoxSelecionarTipoAtuador" class="produtoCadastrar_BoxSelecionarTipoAtuador" required>
		  <option value:"0" selected disabled>Tipo de Atuador</option>
					<option value:"1"  >Indutivo</option>
					<option value:"2"  >Indutivo DS</option>
					<option value:"3"  >Piezo</option>
					?>
		  </select>
		
			<p>
		
		<nav>
			
		<!------- Aplicação do Produtos------->
      <input class="produtoCadastrar_BoxFormularioAplicacaoProduto" placeholder="Aplicação do Produto" type="text" name="aplicacaoDoProduto" />
			
		</nav>
			
	  </form>
	</nav>
</div>

 		

<!-- Função para chamar Div sem refresh	-->	
<script>
		$("#btn_abaCadastroNovoProduto").on('click',function(){
		$("#menuSuperiorAbasAdmCadastrarProduto").load('conteudo_adm/Produtos/divProdutos_CadastrarProduto_SelectNovoProduto.php');											
		});
	
		$("#btn_abaCadastroEditarProduto").on('click',function(){
		$("#menuSuperiorAbasAdmCadastrarProduto").load('conteudo_adm/Produtos/divProdutos_CadastrarProduto_SelectEditarProduto.php');
		});
</script>
