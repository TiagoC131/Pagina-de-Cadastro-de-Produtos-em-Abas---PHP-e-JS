  <nav class="links_menuSuperiorAdmProduto">
	  
		<ul>
			  <li id="btn_TabelaProdutosMenu" class="links_menuSuperiorAdmProduto_btn_Menu">Menu
					<ul>
						<li id="btn_CadastrarProduto" class="links_menuSuperiorAdmProduto_btn_CadastrarProduto">Cadastrar Produto</li>
						<li id="btn_MeusProdutosCadastrados" class="links_menuSuperiorAdmProduto_btn_MeusProdutosAVenda">Meus Produtos Cadastrados</li>
						<li id="btn_MeusProdutosAVenda" class="links_menuSuperiorAdmProduto_btn_MeusProdutosAVenda">Meus Produtos a Venda</li>
					</ul>
				</li>
			  <li id="btn_TabelaProdutosBombaAltaPressao" class="links_menuSuperiorAdmProduto_btn_TabelaProdutosBombaAltaPressao"> 
				  Bomba de Alta Pressão
				</li>
			  <li id="btn_TabelaProdutosBicoInjetorCommonRail"     
				  class="links_menuSuperiorAdmProduto_btn_TabelaProdutosBicoInjetorCommonRail">
				Bico Injetor Common Rail</li>
			  <li id="btn_TabelaProdutosTuboRail" 
				  class="links_menuSuperiorAdmProduto_btn_TabelaProdutosTuboRail"> 
				Tubo Rail
				</li>
			  <li id="btn_TabelaProdutosBombaInjetora" 
				  class="links_menuSuperiorAdmProduto_btn_TabelaProdutosBombaInjetora"> 
				  Bomba Injetora
				</li>
			  <li id="btn_TabelaProdutosBicoInjetorMecanico" 
				  class="links_menuSuperiorAdmProduto_btn_TabelaProdutosBicoInjetorMecanico"> 
				  Bico Injetor Mecânico
				</li>
			  <li id="btn_TabelaProdutosUnidade" 
				  class="links_menuSuperiorAdmProduto_btn_TabelaProdutosUnidade"> 
				  Unidade
				</li>
			  <li id="btn_TabelaProdutosHEUI" 
				  class="links_menuSuperiorAdmProduto_btn_TabelaProdutosHEUI"> 
				  HEUI
				</li>
			  <li id="btn_TabelaProdutosMotor" 
				  class="links_menuSuperiorAdmProduto_btn_TabelaProdutosMotor"> 
				  Motor
				</li>
			  <li id="btn_TabelaProdutosModulo" 
				  class="links_menuSuperiorAdmProduto_btn_TabelaProdutosModulo"> 
				  Modulo
			  </li>
		</ul>
			
	</nav>
	 		

<!-- Função para chamar Div sem refresh	-->
<script type="text/javascript" src="config/js/jquery-3.6.3.js"> </script>
<script>
	
		$("#conteudoTabelaDeProdutos").load('conteudo_adm/Produtos/divProdutos_CadastrarProduto.php');
	
		$("#btn_CadastrarProduto").on('click',function() {
		$("#conteudoTabelaDeProdutos").load('conteudo_adm/Produtos/divProdutos_CadastrarProduto.php');
		});
		//$("#btn_MeusProdutosAVenda").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Sensores.php');
		//});
		//$("#btn_TabelaProdutosMotor").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Valvulas.php');
		//});
		//$("#btn_TabelaProdutosBombaInjetora").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Bombas.php');
		//});
		//$("#btn_TabelaProdutosBombaAltaPressao").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Bombas.php');
		//});
		//$("#btn_TabelaProdutosBicoInjetorMecanico").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Bombas.php');
		//});
		//$("#btn_TabelaProdutosBicoInjetorCommonRail").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Bombas.php');
		//});
		//$("#btn_TabelaProdutosTuboRail").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Bombas.php');
		//});
		//$("#btn_TabelaProdutosUnidade").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Bombas.php');
		//});
		//$("#btn_TabelaProdutosHEUI").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Bombas.php');
		//});
		//$("#btn_TabelaProdutosModulo").on('click',function() {
		//$("#conteudoTabelaDeProdutos").load('conteudo_adm/Plano_de_Teste/TM/divConteudo_tabelaTM_Bombas.php');
		//});
</script>
	