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

			echo "<h3>VALORES: ".$val_a." e ".$val_b."</h3>";
			echo "<strong>Potencia:</strong><br/>A potencia de ".$val_a."<sup>".$val_b."</sup> = ".pow($val_a,$val_b);
			echo "<br/><br/><strong>Valor Absoluto</strong><br/>O Valor Absoluto de ".$val_a." é  " . abs($val_a);
			echo "<br/><br/><strong>Raiz:</strong><br />A Raiz Quadrada de ".$val_a." é ".sqrt($val_a);
			echo "<br/><br/><strong>Arredondar:</strong><br />O valor ".$val_a." arredondado é ".round($val_a);
			echo "<br/><br/><strong>Parte Inteira:</strong><br />A Parte inteira de ".$val_a." é ".intval($val_a);
			echo "<br/><br/><strong>Formatado em Moeda/Casas:</strong><br />O Valor ".$val_a." formatado com duas casas decimais é ".number_format($val_a,2,",",".");
			
		?>
	</div>
	</body>
</html>


