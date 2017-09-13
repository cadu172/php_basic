<DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Curso em Video - PHP 5.5</title>
		<meta charset="UTF-8" />
		<meta name="author" content="CARLOS EDUARDO DOS SANTOS ROBERTO" />
		<meta name="description" content="Documento HTML5 Padrão"/>
		<meta name="keywords" content="Curso em video - PHP Básico Gustavo Guanabara"/>
		<link rel="stylesheet" href="_css/estilo.css">
	</head>
	<body>
	<div>
	<header>
		<h1></h1>
		<?php include 'menu_topo.php';?>
	</header>	
	<!-- # codigo aqui -->
	<form action="14_estrutura_functions_ex02.php" method="post" id="frmPadrao">
	<h3>AULA 14 - Exercício 1 { FUNCTIONS } :: FUNCAO COM MULTIPLOS PARÂMETROS</h3>
	<fieldset>

	<?php

	// relizar a soma de n parametros
	function somarNumero() {
		
		$args = func_get_args(); // obtem os argumentos passados.
		$size = func_num_args(); // obtem a quantidade de argumentos.
		$soma = 0;

		for($index=0; $index<$size; $index++) {
			$soma += $args[$index];
		}
		
		// retorma a soma
		return($soma);
	}

	// executa a soma
	echo "O Resultado da funcao somarNumero(1,2,3,4,5,6) <br /><br />";
	echo "O Resultado " . somarNumero(1,2,3,4,5,6);

	?>	


	</fieldset>				
	</form>
	</div>
	</body>
</html>


