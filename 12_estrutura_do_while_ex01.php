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
	<form action="#" method="post" id="frmVerificarREGIAO">
		<fieldset>
		<p>Contagem Incremental de 1 até 10</p><br />
		<?php

		$contador = 1;

		do {
			echo "$contador<br />";
			$contador++;
		} while ($contador<= 10);

		?>

		</fieldset>	


		<fieldset>
		<p>Contagem Incremental de 1 até 30 de 2 em 2</p><br />
		<?php

		$contador = 1;

		do {
			echo "$contador<br />";
			$contador+=2;
		} while ($contador<= 30);

		?>

		</fieldset>

		<fieldset>
		<p>Contagem ao contrário de 20 até 1, de 2 em 2</p><br />
		<?php

		$contador = 20;

		do {
			echo "$contador<br />";
			$contador--;
		} while ($contador>=1);

		?>

		</fieldset>				

	</form>
	</div>
	</body>
</html>


