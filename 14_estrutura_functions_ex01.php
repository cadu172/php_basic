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

		$numeroA = isset($_POST["edtNumeroA"])?$_POST["edtNumeroA"]:0;
		$numeroB = isset($_POST["edtNumeroB"])?$_POST["edtNumeroB"]:0;

		?>
	</header>	
	<!-- # codigo aqui -->
	<form action="14_estrutura_functions_ex01.php" method="post" id="frmPadrao">
	<h3>AULA 14 - Exercício 1 { FUNCTIONS } :: PROCEDURE </h3>
	<fieldset>
	<p>
		<label for="edtNumeroA">Número(A)</label>
		<input type="number" name="edtNumeroA" id="edtNumeroA" value="<?=$numeroA?>" min="0" max="100" step="4" /> 
	</p>	
	<p>
		<label for="edtNumeroB">Número(B)</label>
		<input type="number" name="edtNumeroB" id="edtNumeroB" value="<?=$numeroB?>" min="0" max="100" step="4" /> 
	</p>
	<button type="submit" name="BtnCalcular">SOMAR NÚMEROS</button>
	</fieldset>				
	</form>
	<?php

	function somarNumero($p_numA,$p_numB) {
		$resultado = $p_numA+$p_numB;
		echo "<strong>O Resultado é : ".$resultado." </strong>";
	}

	if ( isset($_POST["BtnCalcular"]) ) {

		// executa a soma
		somarNumero($numeroA,$numeroB);

	}

	?>	
	</div>
	</body>
</html>


