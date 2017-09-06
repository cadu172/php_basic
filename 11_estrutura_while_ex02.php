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

		$qtdCaixas = 10;

		?>
	</header>	
	<!-- # codigo aqui -->
	<form action="11_estrutura_while_ex02_request.php?qtdCaixas=<?=$qtdCaixas?>" method="post" id="frmVerificarREGIAO">
	<fieldset>
		<p>Criar Dinâmicamente 5 Caixas de Input Text</p><br />
		<fieldset>
		<?php

		$contador = 1;

		while ( $contador <= $qtdCaixas ) {
			echo "<p><label for='edtCampo".$contador."'>Campo ".$contador.":</label><input type='number' name='edtTexto".$contador."' value='' placeholder='Caixa de texto nº ".$contador." ' style='width: 120px;' /></p>";
			$contador += 1;
		}

		?>

		<input type="submit" name="BtnEnviar" value="Enviar" />

		</fieldset>	
	</fieldset>
	</form>
	</div>
	</body>
</html>


