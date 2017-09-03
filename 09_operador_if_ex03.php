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

		$edtNS1 = isset($_POST["edtNS1"])?$_POST["edtNS1"]:0;
		$edtNS2 = isset($_POST["edtNS2"])?$_POST["edtNS2"]:0;	
		$edtNPF = isset($_POST["edtNPF"])?$_POST["edtNPF"]:0;

		// calcular a media do aluno,
		// se >= 6, entao aprovado, senao recuperacao
		$mediaALUNO = ((($edtNS1+$edtNS2)/2)+$edtNPF)/2;

		?>
	</header>	
	<!-- # codigo aqui -->
	<form action="09_operador_if_ex03.php" method="post" id="frmVerificarAPROVACAO">
	<fieldset><legend>Verificar se Pessoa Pode Dirigir</legend>
	<label for="edtNS1">Nota 1º Semestre:</label><input type="text" name="edtNS1" id="edtNS1" value="<?=$edtNS1?>" style="width: 100px;" /><br/>
	<label for="edtNS2">Nota 2º Semestre:</label><input type="text" name="edtNS2" id="edtNS2" value="<?=$edtNS2?>" style="width: 100px;" /><br/>
	<label for="edtNPF">Nota Prova Final:</label><input type="text" name="edtNPF" id="edtNPF" value="<?=$edtNPF?>" style="width: 100px;" /><br/>
	<input type="submit" name="btnValidar" value="Verificar Aprovacao" />
	</fieldset>
	<?php

		if ( isset($_POST["btnValidar"]) && $_POST["btnValidar"]=="Verificar Aprovacao" ) {

			if ( $mediaALUNO>=0 && $mediaALUNO<6 ) {
				echo "ALUNO REPROVADO, MÉDIA IGUAL À $mediaALUNO";
			}
			else {
				echo "ALUNO APROVADO, MÉDIA IGUAL À $mediaALUNO";
			}

		}

	?>
	</form>
	</div>
	</body>
</html>


