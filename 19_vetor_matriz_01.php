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
	<h3>AULA 19 - Curso PHP Iniciantes – 19 – Vetores e Matrizes (Parte 2)</h3>
	<fieldset>
	<pre>
	<?php

	/*
	dado o array:


	$var_array = array(2,5,4,1,3);


	*array_pop($var_array) : remover ultimo elemento de um array/container
	*array_push($var_array, "valor") : incluir um valor no ultimo elemento de um array

	*array_unshift($var_array, "valor") : incluir elemento no inicio de um array/container
	*array_shift($var_array) : remover elemento no inicio de um array/container

	*var_dump($var_array) : realiza o mesmo que a funcao print_r, com a diferenca que ele detalha mais informacoes sobre a matriz

	*count($var_array) : conta a quantidade de elementos de uma matriz

	*sort($var_array); : coloca matriz em ordem crescente

	*rsort($var_array); : coloca matriz em ordem decrescente

	*asort($var_array); : coloca o vetor em ordem crescente, mas mantem o indice original de cada elemento.
				ex.:   array(0=>5, 1=>8, 2=>1, 3=>4)
				apos:  array(2=>1, 3=>4, 0=>5, 1=>8)

	*arsort($var_array); : coloca o vetor em ordem decrescente, mas mantem o indice original de cada elemento.
				ex.:   array(0=>5, 1=>8, 2=>1, 3=>4)
				apos:  array(2=>1, 3=>4, 0=>5, 1=>8)

	ksort($var_array); : colocar o vetor em ordem baseado na key e nao nos valores armazenados.
							serve para ordenar uma matriz que pode ter sido declarada fora de ordem ou que
							foi classificada com as funcoes "asort" ou "arsort"
	*/
	$var_array = array(2,5,4,1,3);

	echo "<h2>Função:  array_push</h2>";
	echo "<p>Incluir elemento no final do array</p>";
	print_r($var_array);
	array_push($var_array,6); // incluir elemento no final do array
	echo "<br />";
	print_r($var_array);

	echo "<hr />";

	echo "<h2>Função:  array_pop</h2>";
	echo "<p>Remover elemento no final do array</p>";
	print_r($var_array);
	array_pop($var_array); // incluir elemento no final do array
	echo "<br />";
	print_r($var_array);

	echo "<hr />";

	echo "<h2>Função:  array_unshift</h2>";
	echo "<p>Incluir elemento no inicio de um vetor</p>";
	print_r($var_array);
	array_unshift($var_array,87); // incluir elemento no final do array
	echo "<br />";
	print_r($var_array);

	echo "<hr />";

	echo "<h2>Função:  array_shift</h2>";
	echo "<p>Remover elemento no inicio de um vetor</p>";
	print_r($var_array);
	array_shift($var_array); // incluir elemento no final do array
	echo "<br />";
	print_r($var_array);

	echo "<hr />";

	echo "<h2>Função:  var_dump()</h2>";
	echo "<p>Imprimir o conteúdo de uma matriz de forma detalhada</p>";
	var_dump($var_array);

	echo "<hr />";

	echo "<h2>Função:  count()</h2>";
	echo "<p>Contar a quantidade de elementos de um vetor.</p>";
	echo "Quantidade de elementos do array: ".count($var_array);

	echo "<hr />";

	echo "<h2>Função:  sort()</h2>";
	echo "<p>Classificar o vetor em ordem crescente</p>";
	sort($var_array);
	print_r($var_array);

	echo "<hr />";

	echo "<h2>Função:  rsort()</h2>";
	echo "<p>Classificar o vetor em ordem decrescente</p>";
	rsort($var_array);
	print_r($var_array);

	echo "<hr />";

	echo "<h2>Função:  asort()</h2>";
	echo "<p>coloca o vetor em ordem crescente, mas mantem o indice original de cada elemento.
				ex.:   array(0=>5, 1=>8, 2=>1, 3=>4)
				apos:  array(2=>1, 3=>4, 0=>5, 1=>8)</p>";
	$var_array = array(0=>5, 1=>8, 2=>1, 3=>4);
	print_r($var_array);
	echo "<br />";
	asort($var_array);
	print_r($var_array);

	echo "<hr />";

	echo "<h2>Função:  arsort()</h2>";
	echo "<p>coloca o vetor em ordem decrescente, mas mantem o indice original de cada elemento.
				ex.:   array(0=>5, 1=>8, 2=>1, 3=>4)
				apos:  array(2=>1, 3=>4, 0=>5, 1=>8)</p>";
	$var_array = array(0=>5, 1=>8, 2=>1, 3=>4);
	print_r($var_array);
	echo "<br />";
	arsort($var_array);
	print_r($var_array);	


	echo "<hr />";

	echo "<h2>Função:  ksort()</h2>";
	echo "<p>coloca o vetor em ordem decrescente, mas mantem o indice original de cada elemento.
				ex.:   array(2=>1, 3=>4, 0=>5, 1=>8 )
				apos:  array(0=>5, 1=>8, 2=>1, 3=>4 )</p>";
	$var_array = array(2=>1, 3=>4, 0=>5, 1=>8);
	print_r($var_array);
	echo "<br />";
	ksort($var_array);
	print_r($var_array);

	echo "<hr />";

	echo "<h2>Função:  ksort()</h2>";
	echo "<p>coloca o vetor em ordem decrescente, mas mantem o indice original de cada elemento.
				ex.:   array(2=>1, 3=>4, 0=>5, 1=>8)
				apos:  array(3=>4, 2=>1, 1=>8, 0=>5 ) </p>";
	$var_array = array(2=>1, 3=>4, 0=>5, 1=>8);
	print_r($var_array);
	echo "<br />";
	krsort($var_array);
	print_r($var_array);	

	?>
	</pre>	
	</fieldset>				
	</form>
	</div>
	</body>
</html>


