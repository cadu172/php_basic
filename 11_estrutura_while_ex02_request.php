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
	<fieldset>
		<p>Criar Dinâmicamente 5 Caixas de Input Text</p><br />
		<fieldset>
		<?php

		$contador = 1;
		$qtdCaixas = (int)$_GET["qtdCaixas"];
		$caixaAtual = "";

		while ( $contador <= $qtdCaixas ) {			
			$caixaAtual = $_POST["edtTexto".$contador];			
			echo "<p>O Valor Informado na caixa de texto nº ".$contador." é: ".$caixaAtual."</p>";
			$contador += 1;
		}

		?>

		<input type="submit" name="BtnEnviar" value="Enviar" />

		</fieldset>	
	</fieldset>	
	</div>
	</body>
</html>


