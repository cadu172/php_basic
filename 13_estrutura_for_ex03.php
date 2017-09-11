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
	<form action="13_estrutura_for_ex03.php" method="post" id="frmFatorial">
	<h3>Exercicio 1 ( FOR ) NUMERO PRIMO</h3>
	<fieldset>
	<p>
		<label for="cmbNumero">Número</label>
		<select name="cmbNumero" id="cmbNumero">
		<?php
		for($i=1;$i<=100;$i++) {
			echo "<option value='".$i."'>".$i."</option>";
		}
		?>
		</select>		
	</p>
	<button type="submit" name="BtnCalcular">É Primo?</button>
	</fieldset>				
	</form>
	<?php

	if ( isset($_POST["BtnCalcular"]) ) {

		$numero = $_POST["cmbNumero"];
		$isPrimo = true;

		/*
			um numero é primo quando é possivel apenas fazer um divisao exata entre ele mesmo ou 1
			ex.:  
			numero "5"
			Podemos dividir 5 apenas por 5 ou por 1
		*/

		for ($i=1;$i<=$numero;$i++) {

			if ( ( $numero % $i ) == 0 ) {

				// caso nao seja (1 ou o proprio numero, interromper laço)
				if ( ! (( $i == 1 ) || ( $i == $numero )) ) {
					$isPrimo = false;
					break;
				}

			}

		}


		if ( $isPrimo ) {
			echo "<h3>$numero é Primo</h3>";
		}
		else {
			echo "<h3>$numero NÃO é Primo</h3>";
		}
	}

	?>	
	</div>
	</body>
</html>


