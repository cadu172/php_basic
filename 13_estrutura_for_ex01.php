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
		<?php include 'menu_topo.php';
		?>
	</header>	
	<!-- # codigo aqui -->
	<form action="12_estrutura_do_while_ex03.php" method="post" id="frmFatorial">
	<h3>Exercicio 1 ( FOR )</h3>
	<fieldset>
	<?php

	for($i=0;$i<=10;$i++) {
		echo "$i ";
	}

	echo "<hr />";

	for($j=20;$j>=0;$j--) {
		echo "$j ";
	}

	echo "<hr />";

	for($w=0;$w<=100;$w+=20) {
		echo "$w ";
	}


	?>

	</fieldset>				
	</form>
	</div>
	</body>
</html>


