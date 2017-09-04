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

		$edtNumero = $_POST["edtNumero"];
		$operacao = $_POST["operacao"];
		$resultado = 0;

		?>
	</header>	
	<!-- # codigo aqui -->
	<form action="10_estrutura_switch_ex01.php" method="post" id="frmVerificarAPROVACAO">
	<fieldset><legend>Qual Operação deve Ser Realizada</legend>
	<label for="edtNumero">Número:</label><input type="text" name="edtNumero" id="edtNumero" value="<?=$edtNumero?>" style="width: 100px;" /><br/>	
	<fieldset><legend>Operação</legend>
	<label for="CHKDobro">Dobro</label><input type="radio" name="operacao" value="dobro" id="CHKDobro" /><br />
	<label for="CHKCubo">Cubo</label><input type="radio" name="operacao" value="cubo" id="CHKCubo" /><br />
	<label for="CHKRaiz">Raíz</label><input type="radio" name="operacao" value="raiz" id="CHKRaiz" />
	</fieldset>	
	<input type="submit" name="btnCalcular" value="Realizar Operação" />
	</fieldset>
	<?php

	if ( isset($_POST["btnCalcular"]) ) {

		switch ($operacao) {
			case 'dobro':
				# code...
				$resultado = $edtNumero*2;
				break;
			
			case 'cubo':
				# code...
				$resultado = pow($edtNumero,3);
				break;

			case 'raiz':
				# code...
				$resultado = sqrt($edtNumero);
				break;

			default:
				# code...
				$resultado = 0;
				break;
		}

		echo "O RESULTADO DA OPERACAO '$operacao' É $resultado";

	}

	?>
	</form>
	</div>
	</body>
</html>


