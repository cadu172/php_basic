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
		<?php include 'menu_topo.php'; ?>
	</header>	
	<?php 
	
	// recebe o preco informando no get
	(int)$anoAtual = $_GET["ano"];

	/*
		CRIAMOS DUAS VARIÁVEIS COM REFERENCIA A VARIÁVEL PRINCIPAL

		$anoAtual

		ex.:

		$anoAtual <--- $ref_A <--- $ref_B

		[$ref_A] ... referencia [$anoAtual] e [$ref_B] referencia [$ref_A]

		Neste momento as 3 variáveis estão ligadas, e a modificação em quelaquer uma reflete nas 3

	*/
	$ref_A = &$anoAtual;
	$ref_B = &$ref_A;
	
	echo "<h3>TRABALHANDO COM VARIÁVEIS REFERENCIADAS</h3><br /><br />";
	echo '<strong>Valores Originais:</strong>&nbsp;$anoAtual = '.$anoAtual.'<br />';	
	echo '<strong>Valores Originais:</strong>&nbsp;$ref_A = '.$ref_A.'<br />';	
	echo '<strong>Valores Originais:</strong>&nbsp;$ref_B = '.$ref_B.'<br />';	
	
	// ao somar, todas as variáveis serão afetadas.
	$ref_B += 200; // somando 200;
	
	echo '<br />Somar 200 na variável [$ref_B]<br /><br />';
	echo '<strong>Novos Valores:</strong>&nbsp;$anoAtual = '.$anoAtual.'<br />';	
	echo '<strong>Novos Valores:</strong>&nbsp;$ref_A = '.$ref_A.'<br />';	
	echo '<strong>Novos Valores:</strong>&nbsp;$ref_B = '.$ref_B.'<br />';		

	?>
	</div>
	</body>
</html>


