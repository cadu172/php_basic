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
	<h3>Calcular TABUADA</h3>
	<fieldset>
	<p>
	<label for="numTAB">Tabuada:</label>	
	<input type="number" name="numTAB" id="numTAB" value="1" min="1" max="20" />
	<input type="submit" name="BtnTabuada" value="TABUADA" />
	</p>
	</fieldset>				
	<?php

	if ( isset($_POST["BtnTabuada"]) ) {

		$numTAB = $_POST["numTAB"];		
		$multiplicador = 1;

		do {
			echo "<p>".$numTAB." X ".$multiplicador."=".($numTAB*$multiplicador)."</p>";
			$multiplicador++;
		} while ($multiplicador <= 10);

	}

	?>
	</form>
	</div>
	</body>
</html>


