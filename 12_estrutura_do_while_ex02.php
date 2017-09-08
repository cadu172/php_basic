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
	<form action="12_estrutura_do_while_ex02.php" method="post" id="frmFatorial">
	<h3>Calcular Fatorial</h3>
	<fieldset>
	<p>
	<label for="numFAT">Número:</label>	
	<input type="number" name="numFAT" id="numFAT" value="1" min="1" max="20" />
	<input type="submit" name="BtnFatorial" value="FATORIAL" />
	</p>
	</fieldset>				
	<?php

	if ( isset($_POST["BtnFatorial"]) ) {

		$numBASE  = isset($_POST["numFAT"])?$_POST["numFAT"]:0;
		$startNUM = $numBASE;
		$multipli = 1;

		do {

			//echo "<p>$startNUM X $multipli = " . ($startNUM*$multipli) . "</p>";			
			$multipli = $multipli*$startNUM;
			$startNUM--;

		} while ( $startNUM >= 1 );

		echo "FATORIAL DE $numBASE É  $multipli ";

	}

	?>
	</form>
	</div>
	</body>
</html>


