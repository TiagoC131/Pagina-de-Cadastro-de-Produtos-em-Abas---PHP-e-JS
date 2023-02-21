<?php
//Conexão com Banco de Dados
require_once 'conexao/conexaoBD.php';

	//Função para Listar Todas as Marcas
if(isset($_GET['BoxSelecionarCategoria']))
	{
	$selectMarca = $_GET['BoxSelecionarCategoria'];
	//echo $selectMarca;
	
	$queryProdutoMarca = $conexaoBD->prepare("SELECT tb_produto_relacao_categoria_marca.id_produto_relacao_categoria_marca, 
													 tb_produto_relacao_categoria_marca.relacao_produto_categoria_id, 
													 tb_produto_relacao_categoria_marca.relacao_produto_marca_id,
													 tb_produto_marca.id_produto_marca,
													 tb_produto_marca.nome_produto_marca
								FROM tb_produto_relacao_categoria_marca
								INNER JOIN tb_produto_marca 
								ON tb_produto_relacao_categoria_marca.relacao_produto_marca_id = tb_produto_marca.id_produto_marca
								WHERE tb_produto_relacao_categoria_marca.relacao_produto_categoria_id=:relacao_produto_categoria
								ORDER BY tb_produto_marca.nome_produto_marca ASC");

	$dataSelectMarca = ['relacao_produto_categoria' => $selectMarca];
	$queryProdutoMarca->execute($dataSelectMarca);

				$RegistrosProdutoMarca = $queryProdutoMarca->fetchALL(PDO::FETCH_ASSOC);

				echo '<option value:"0" selected disabled>Marca do Produto</option>';
				foreach($RegistrosProdutoMarca as $SelecionarProdutoMarca){
				?>
						<option value="<?php echo $SelecionarProdutoMarca['id_produto_marca']?>"><?php echo $SelecionarProdutoMarca['nome_produto_marca']?></option>
				<?php
				}
			}
?>