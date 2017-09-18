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
	<h3>AULA 15 - Exercício 1 { FUNCTIONS } :: diretiva require_once</h3>
	<fieldset>

	<?php

	/* 

	a diferenca entre "require" e "require_once", é que na diretiva "require_once" se a mesma 
	for declarada duas vezes uma das duas será ignorada

	o mesmo vale para o "include" e "include_once"

	*/
	require '15_funcao.php';
	require_once '15_funcao.php';

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


