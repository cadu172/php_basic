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
		strtolower(str)

		converte uma cadeia de caracteres em minusculo.
		*/
	echo "<hr />";
	echo "<p>Função <strong>strtolower(str)<strong></p>";		
	$nome = "Carlos Eduardo dos Santos Roberto";

	echo "String Original: $nome <br /> ";

	// convertendo
	$nome = strtolower($nome);

	echo "String Convertida: $nome <br /> ";


	/* 
		strtoupper(str)

		converte uma cadeia de caracteres em maiusculo.
		*/

	echo "<hr />";
	echo "<p>Função <strong>strtoupper(string)<strong></p>";		
	$nome = "Carlos Eduardo dos Santos Roberto";

	echo "String Original: $nome <br /> ";

	// convertendo
	$nome = strtoupper($nome);

	echo "String Convertida: $nome <br /> ";



	/* 
		ucfirst(str)

		converte apenas a primeira letra de uma string em maiusculo
		*/

	echo "<hr />";
	echo "<p>Função <strong>ucfirst(str)<strong></p>";		
	$nome = "maria Eduarda Domingues";
	echo "String Original: $nome <br /> ";

	// convertendo
	$nome = ucfirst($nome);

	echo "String Convertida: $nome <br /> ";


/* 
		ucwords(str)

		converte apenas a primeira letra de cada palavra de uma string
		*/

	echo "<hr />";
	echo "<p>Função <strong>ucwords(str)<strong></p>";		
	$nome = "maria eduarda domingues";
	echo "String Original: $nome <br /> ";

	// convertendo
	$nome = ucwords($nome);

	echo "String Convertida: $nome <br /> ";


/* 
		strrev(str)

		inverte uma string
		*/

	echo "<hr />";
	echo "<p>Função <strong>strrev(str)<strong></p>";		
	$nome = "maria eduarda domingues";
	echo "String Original: $nome <br /> ";

	// convertendo
	$nome = strrev($nome);

	echo "String Convertida: $nome <br /> ";



/* 
		strpos(str)

		localizar uma substring em uma string

		obs: case sensitive
		*/

	echo "<hr />";
	echo "<p>Função <strong>strpos<strong></p>";		
	$nome = "maria eduarda domingues";
	echo "String Original: $nome <br /> ";
	echo "a string eduarda foi encontrada na posicao: ".strpos($nome, "eduarda")." <br /> ";	



/* 
		stripos(str)

		localizar uma substring em uma string

		obs: esta funcao ignora o case sensitive
		*/

	echo "<hr />";
	echo "<p>Função <strong>stripos<strong></p>";		
	$nome = "maria EDUARDA domingues";
	echo "String Original: $nome <br /> ";
	echo "a string eduarda foi encontrada na posicao: ".stripos($nome, "eduarda")." <br /> ";	



	/* 
		substr_count(str)

		contar a quantidade de substring em um string

		obs: case sensitive
		*/

	echo "<hr />";
	echo "<p>Função <strong>substr_count<strong></p>";		
	$nome = "Carlos Eduardo Carlos Eduardo";
	echo "String Original: $nome <br /> ";
	echo "Quantidade de repetições de 'Eduardo' : ".substr_count($nome, "Eduardo")." <br /> ";	

	/* 
		substr(str)

		obter uma substring em uma string

		obs: case sensitive
		*/

	echo "<hr />";
	echo "<p>Função <strong>substr<strong></p>";		
	$nome = "Carlos Eduardo Carlos Eduardo";
	echo "String Original: $nome <br /> ";
	echo "posicao de 5 com tamanho 10 : ".substr($nome, 5, 10)." <br /> ";	

	/* 
		str_pad(str)

		completa uma string com um caracter especificado.

		STR_PAD_LEFT -> completa a esquerda
		STR_PAD_RIGHT -> completa a direita

		obs: case sensitive
		*/

	echo "<hr />";
	echo "<p>Função <strong>str_pad<strong></p>";		
	$nome = "CARLOS";
	echo "String Original: $nome <br /> ";
	echo "str_pad (right) : ".str_pad($nome , 20, ".", STR_PAD_LEFT)."EDUARDO <br /> ";		

	/* 
		str_repeat(str)

		completa uma string com um caracter especificado.

		STR_PAD_LEFT -> completa a esquerda
		STR_PAD_RIGHT -> completa a direita

		obs: case sensitive
		*/

	echo "<hr />";
	echo "<p>Função <strong>str_repeat<strong></p>";		
	$nome = "Carlao<br />";
	echo "str_repeat : ".str_repeat($nome , 10);



	/* 
		str_replace(str)

		substituir uma substring em uma string

		obs: case sensitive
		*/

	echo "<hr />";
	echo "<p>Função <strong>str_replace<strong></p>";		
	$nome = "%nome %segundoNome %sobrenome";
	echo "String Original: $nome <br /> ";


	$nome = str_replace("%nome", "Carlos", $nome);
	$nome = str_replace("%segundoNome", "Eduardo", $nome);
	$nome = str_replace("%sobrenome", "dos Santos Roberto", $nome);


	echo "String Alterada: $nome <br /> ";
		

	?>	
	</fieldset>				
	</form>
	</div>
	</body>
</html>


