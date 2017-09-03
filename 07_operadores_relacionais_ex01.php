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
		<h1>Operadores Relacionais - Exercício 01 (Utilizando Operador Ternário)</h1>
		<?php include 'menu_topo.php'; ?>
	</header>
	<BR /><p>Objetivo: Permitir que o usuário selecione entre Soma e Multiplicação</p>	
	<?
	$num1 = $_GET["num1"];
	$num2 = $_GET["num2"];
	$operacao = $_GET["operacao"];
	?>
	<div>
		<form action="07_operadores_relacionais_ex01.php" method="get">
		<p>
		<label for="num1">Número 1:</label>
		<input type="text" name="num1" id="num1" value="<?=$num1?>">
		</p>
		<p>
		<label for="num2">Número 2:</label>
		<input type="text" name="num2" id="num2" value="<?=$num2?>">
		</p>
		<p>
		<select name="operacao">
			<option value="SOMA">SOMA</option>
			<option value="MULTIPLICACAO">MULTIPLICACAO</option>
		</select>
		</p>
		<p><input type="submit" name="btnCalcular"></p>
		</form>
		<?
		// se for passado some, retorna a primeira condição, senao multiplica
		$resultado = ($operacao=="SOMA") ? $num1+$num2 : $num1*$num2;
		echo 'O Resultado da Operação '.$operacao.'<br /> entre '.$num1.' e '.$num2.' é : <strong>'.$resultado.'</strong>';
		?>		
	</div>	
	</div>
	</body>
</html>


