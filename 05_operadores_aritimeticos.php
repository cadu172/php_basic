<DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Operadores Aritiméticos em PHP 5.5</title>
		<meta charset="UTF-8" />
		<meta name="author" content="CARLOS EDUARDO DOS SANTOS ROBERTO" />
		<meta name="description" content="Operadores Aritiméticos em PHP 5.5"/>
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

			$val_a = (float)$_GET["val_a"];
			$val_b = (float)$_GET["val_b"];

			echo "<h3>Operador Soma</h3>".$val_a." + ".$val_b." = " .($val_a+$val_b);
			echo "<br/><br/><h3>Operador Subtração</h3>".$val_a." - ".$val_b." = " .($val_a-$val_b);
			echo "<br/><br/><h3>Operador Multiplicação</h3>".$val_a." * ".$val_b." = " .($val_a*$val_b);
			echo "<br/><br/><h3>Operador Divisão</h3>".$val_a." / ".$val_b." = " .($val_a/$val_b);
			echo "<br/><br/><h3>Operador Módulo(resto)</h3>".$val_a." % ".$val_b." = " .($val_a % $val_b);
			echo "<br/><br/><h3>Operador Potência(é uma função)</h3>".$val_a." ^ ".$val_b." = " .pow($val_a,$val_b);
			
		?>
	</div>
	</body>
</html>


