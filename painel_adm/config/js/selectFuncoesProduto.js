let selectBoxCategoria = document.getElementById('BoxSelecionarCategoria');

selectBoxCategoria.onchange = () => {
	let selectBoxMarca = document.getElementById('BoxSelecionarMarca');
	let valorSelectBoxCategoria = selectBoxCategoria.value;
	
	fetch("selectProdutoMarca.php?BoxSelecionarCategoria=" + valorSelectBoxCategoria)
	.then(response => {
		return response.text();
	})
	.then(nomeProdutoMarca => {
		selectBoxMarca.innerHTML = nomeProdutoMarca;
	});
}