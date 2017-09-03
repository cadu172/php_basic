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
	(float)$precoINI = $_GET["preco"];
	(float)$percentual = $_GET["percentual"];

	/* em computaçao, 100% é igual a 1.00, logo deve dividir-se o valor recebido por 100
		entao se for informado 100, este mesmo valor será igual à 1.00
	 */
	$percentual /= 100;

	echo "O Preço Atual do Produto é ".number_format($precoINI,2,",",".")."<br /><br />";

	echo "<h4>Percentual de Aumento</h4>";	
	echo "O Produto com um acréscimo de ".number_format($percentual*100,2)."% é : ".number_format(($precoINI*(1+$percentual)),2,",",".")."<br />";

	echo "<h4>Percentual de Desconto</h4>";	
	echo "O Produto com um Desconto de ".number_format($percentual*100,2)."% é : ".number_format(($precoINI*(1-$percentual)),2,",",".");


	?>
	</div>
	</body>
</html>


