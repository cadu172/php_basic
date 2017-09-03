<DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Variáveis em PHP 5.5</title>
		<meta charset="UTF-8" />
		<meta name="author" content="CARLOS EDUARDO DOS SANTOS ROBERTO" />
		<meta name="description" content="Variáveis em PHP"/>
		<meta name="keywords" content="Curso em video - PHP Básico Gustavo Guanabara"/>
		<link rel="stylesheet" href="_css/estilo.css">
	</head>
	<body>
	<div>
	<header>
		<h1></h1>
		<?php
		include 'menu_topo.php';
		?>
	</header>
		<?php
			(string)$nome = "CARLOS EDUARDO DOS SANTOS ROBERTO";
			(int)$idade = 35;
			echo "Nome: " . $nome . "<br/>Idade: " . $idade;
		?>
	</div>
	</body>
</html>


