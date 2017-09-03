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
		<h1>Operadores Relacionais - Exercício 02 (Igual ou Idêntico)</h1>
		<?php include 'menu_topo.php'; ?>
	</header>
	<BR /><p>Objetivo: Testar os operadores "==" ou "==="</p>	
	<?
	$num1 = "1";
	$num2 = 1;
	
	// se for passado some, retorna a primeira condição, senao multiplica
	$resultado = ($num1==$num2) ? "IGUAL (mesmo valor mas possivelmente com o type diferente)" : "DIFERENTE";	
	echo '<p>A comparação usando o operador "==" entre as variáveis $num1 e $num2 é : <strong>'.$resultado.'</strong></p>';
	
	$resultado = ($num1===$num2) ? "IGUAL (mesmo valor e com o mesmo type)" : "DIFERENTE";	
	echo '<p>A comparação usando o operador "===" entre as variáveis $num1 e $num2 é : <strong>'.$resultado.'</strong></p>';

	?>		
	</div>
	</body>
</html>


