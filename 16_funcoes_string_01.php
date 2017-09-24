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
	<?php

	/*	
	1. printf

		Herdado da linguagem "C", serve para imprimir o resultado na tela

	*/

	echo "<p>Função <strong>printf<strong></p>";
	$valor = 125.3478;
	$produ = "Sabão";
	printf("O preço do %s é %.2f",$produ, $valor);


	/*
	2. print_r
		imprime o conteudo de um array

		Serve para imprimir o conteúdo de um vetor, muito util para DEBUG
	*/
	echo "<hr />";
	echo "<p>Função <strong>print_r<strong></p>";
	$arrNome = array("Carlos","Duda","Janaina");	
	print_r($arrNome);

	/*

	3. wordwrap

		inclui uma quebra de linha com base em um caractere especifico

		prototipo

		wordwrap($str, tamanho_quebra, caracter_quebra, quebra_fixa)

	*/	
	echo "<hr />";
	echo "<p>Função <strong>print_r<strong></p>";
	$strNome = "CARLOS EDUARDO DOS SANTOS ROBERTO";
	$strNome = wordwrap($strNome,5,"<br />",false);
	echo $strNome;

	/*
	4. strlen
		contar a quantidade de caracteres de uma string
	*/
	echo "<hr />";
	echo "<p>Função <strong>strlen<strong></p>";
	$strNome = "CARLOS EDUARDO DOS SANTOS ROBERTO";
	echo strlen($strNome);


	/*

	5. trim
	
		remove o espaco em branco a direita e a esquerda de uma string

	6. ltrim

		remove os espacos em branco a esquerda de uma string

	7. rtrim

		remove os espacos em branco a direita de uma string

	*/

	/*
	8. str_word_count

		conta a quantidade de palavras dentro de uma string
	*/
	echo "<hr />";
	echo "<p>Função <strong>str_word_count<strong></p>";
	$strNome = "CARLOS EDUARDO DOS SANTOS ROBERTO";
	echo "quantidade de palavras:  ".str_word_count($strNome);

	/*
	9. explode
		converte uma string em array com base em um caracter especificado*/
	echo "<hr />";
	echo "<p>Função <strong>explode<strong></p>";
	$strNome = "CARLOS;EDUARDO;DOS;SANTOS;ROBERTO";
	echo "A variável strNome foi convertida em: ";
	print_r(explode(";",$strNome));

	/*
	10. str_split

		ocorre o mesmo que a funcao explode

		a diferenca que vc especifica a cada quantos caracteres deve ser quebrada a string

		no exemplo abaixo estou quebrando a string em matriz a cada 5 caracteres

	*/
	echo "<hr />";
	echo "<p>Função <strong>str_split<strong></p>";
	$strNome = "CARLOS;EDUARDO;DOS;SANTOS;ROBERTO";
	echo "A variável strNome foi convertida em: ";
	print_r(str_split($strNome,5));



	/*

	11. implode

		converte uma matriz em string, ou seja, concatena todas as posições em uma unica string

	*/
	$nomeARRAY = array("CARLOS ","EDUARDO ","DOS ","SANTOS ","ROBERTO");
	$arrayConcatenado = implode($nomeARRAY);

	echo "<hr />";
	echo "<p>Função <strong>implode<strong></p>";
	echo "Matriz original:";
	print_r($nomeARRAY);
	echo "Convertido em STRING: $arrayConcatenado  ";	

	/*
	12. chr

		converte um numero (tabela ascii) de caracter na letra corresponde

	*/
	echo "<hr />";
	echo "<p>Função <strong>chr<strong></p>";	
	echo "O numero 65 da tabela ASCII representa a letra ".chr(65);


	/*

	13. ord

		converte uma letra no seu caracter (tabela ascii)

	*/
	echo "<hr />";
	echo "<p>Função <strong>chr<strong></p>";	
	echo 'O código do caracter "A" na tabela ASCII representa o número: '.ord("A");


	?>	
	</fieldset>				
	</form>
	</div>
	</body>
</html>


