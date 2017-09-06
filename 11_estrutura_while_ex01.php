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
	<form action="11_estrutura_while_ex01.php" method="post" id="frmVerificarREGIAO">
	<fieldset>
		<p>Contagem Incremental de 1 até 10</p><br />
		<fieldset>
		<?php

		$contador = 10;

		while ( $contador >= 1 ) {
			echo "Número: $contador <br /> ";
			$contador--;
		}

		?>

		</fieldset>	
	</fieldset>
	</form>
	</div>
	</body>
</html>


