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
	<h3>AULA 16 - Funções Internas STRING</h3>
	<fieldset>
	<pre>
	<?php

	echo "<h2>Array Simples</h2>";

	// array basico
	$ArrNUMERO = array(10, 15, 20, 30);
	print_r($ArrNUMERO);

	echo "<hr /><h2>Array Of Array (com chave personalizada)</h2>";

	$ArrOfArray = array(
		array(1=>"Carlos" , 4=>"36"),
		array(1=>"Janaina", 4=>"37"),
		array(1=>"Duda"   , 4=>"6")
	);

	print_r($ArrOfArray);	

	echo "<hr /><h2>Array Of Array (com chave associativa)</h2>";

	$ArrOfArray = array(
		array("Nome"=>"Carlos", "Idade"=>"36"),
		array("Nome"=>"Janaina", "Idade"=>"37"),
		array("Nome"=>"Duda", "Idade"=>"6")
	);

	print_r($ArrOfArray);


	echo "<hr /><h2>Inclusao de novo elemento em um array</h2>";
	$ArrOfArray[] = array("Nome"=>"Marcelo", "Idade"=>"38");
	print_r($ArrOfArray);


	echo "<hr /><h2>Array Of Array (Imprimir conteudo com foreach)</h2>";	

	foreach ($ArrOfArray as $ArrPrincipal) {		
		foreach ($ArrPrincipal as $key => $value) {
			echo "<br />O Campo ".$key." vale  ".$value;
		}
		echo "<br />";
	}


	echo "<hr /><h2>Remover elemento em um array</h2>";
	unset($ArrOfArray[0]);
	print_r($ArrOfArray);

	?>
	</pre>	
	</fieldset>				
	</form>
	</div>
	</body>
</html>


