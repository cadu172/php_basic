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

		$numINI = isset($_POST["numINI"])?$_POST["numINI"]:0;
		$numFIN = isset($_POST["numFIN"])?$_POST["numFIN"]:0;
		$qtdInc = isset($_POST["qtdInc"])?$_POST["qtdInc"]:0;

		?>
	</header>	
	<!-- # codigo aqui -->
	<form action="11_estrutura_while_ex03.php" method="post" id="frmVerificarREGIAO">
	<fieldset>
		<p>Contador Personalizavel</p><br />
		<fieldset>
		<p>
			<label for="numINI">Número Inicial:</label>
			<input type="number" name="numINI" id="numINI" value="<?=$numINI?>" style="width: 60px;" />
		</p>
		<p>
			<label for="numFIN">Número Final:</label>
			<input type="number" name="numFIN" id="numFIN" value="<?=$numFIN?>" style="width: 60px;" />
		</p>

		<p>
			<label for="qtdInc">Incrementar:</label>
			<input type="number" name="qtdInc" id="qtdInc" value="<?=$qtdInc?>" style="width: 60px;" />
		</p>

		<input type="submit" name="BtnGerarNumero" value="Visualizar" />				
		</fieldset>	

		<?php

		if ( isset($_POST["BtnGerarNumero"]) ) {

			$startINT = (int)$numINI;

			if ( $numINI > $numFIN ) {
				echo "O Numero inicial nao pode ser maior que o numero final";
			}
			else if ($qtdInc <= 0) {
				echo "O Numero incrementador deve ser maior ou igual à 1, não pode ser negativo ou zero";	
			}
			else {

				while ($startINT<=$numFIN) {
					echo "<p>Numero: ".$startINT."</p>";
					$startINT += $qtdInc;					
				}

			}

		}

		?>

	</fieldset>
	</form>
	</div>
	</body>
</html>


