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
	/*
		CRIAMOS DUAS VARIÁVEIS COM REFERENCIA A VARIÁVEL PRINCIPAL

		$anoAtual

		ex.:

		$anoAtual <--- $ref_A <--- $ref_B

		[$ref_A] ... referencia [$anoAtual] e [$ref_B] referencia [$ref_A]

		Neste momento as 3 variáveis estão ligadas, e a modificação em quelaquer uma reflete nas 3

	*/
	(string)$nome = "CARLOS";
	(string)$$nome = "EDUARDO";
	
	echo "<h3>TRABALHANDO COM VARIÁVEIS DE VARIÁVEIS</h3><br /><br />";
	/*

		minha obs.:
		dá pra fazer várias gambers com isso mas não sei onde usar isso na pratica do dia-a-dia

		o servidor assume o conteudo da variável original como sendo uma variável declarada

		no exemplo cima seria o mesmo de fazer o seguinte

		(string)$nome = "CARLOS";
		(string)$CARLOS = "EDUARDO";

	*/

	echo '<p>Variável Original: $nome = '.$nome.'</p>';
	echo '<p>Variável da variável Original: $CARLOS = '.$CARLOS.'</p>';

	?>
	</div>
	</body>
</html>


