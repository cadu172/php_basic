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
	<form action="#" method="post" id="frmPadrao">
	<h3>AULA 15 - Exercício 1 { FUNCTIONS } :: FUNCAO COM PARÂMETRO DE REFERÊNCIA</h3>
	<fieldset>

	<?php

	/*
	funcao com passagem de parametro por referencia (ponteiro)

	*/
	function ref_Ajustar(&$_SalarioA, &$_SalarioB, $perc_AJUSTE) {

		/*
			observacoes

			os parametros &$_SalarioA, &$_SalarioB
			sao parametros por referencia

			o parametro $perc_AJUSTE é por valor.
		*/
		$_SalarioA = $_SalarioA*(1+$perc_AJUSTE/100);
		$_SalarioB = $_SalarioB*(1+$perc_AJUSTE/100);

	}


	$salarioA = 2500.00;
	$salarioB = 3500.00;
	$percAJUSTE = 7.35;

	echo "<p>Salario A => $salarioA</p>";
	echo "<p>Salario B => $salarioB</p>";
	echo "<p>percAJUSTE => $percAJUSTE</p>";
	echo "<hr />";

	ref_Ajustar($salarioA,$salarioB,$percAJUSTE);

	echo "<strong>Após o Reajuste</strong>";
	echo "<hr />";
	echo "<p>Salario A => $salarioA</p>";
	echo "<p>Salario B => $salarioB</p>";


	?>	


	</fieldset>				
	</form>
	</div>
	</body>
</html>


