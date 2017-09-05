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
	<form action="10_estrutura_switch_ex03.php" method="post" id="frmVerificarREGIAO">
	<fieldset>
	<p>Exercício para verificar em qual região pertence o estado</p><br />
	<fieldset><legend>Selecione a UF</legend>	
	<select name="CBoxUF">
	<option value="">----</option>
	<optgroup label="Região NORDESTE">
		<option value="CE">Ceará</option>
		<option value="RN">Rio Grande do Norte</option>
	</optgroup>
	<optgroup label="Região SUDESTE">
		<option value="SP">São Paulo</option>
		<option value="RJ">Rio de Janeiro</option>
	</optgroup>
	</select>
	</fieldset>	
	<input type="submit" name="btnVerificar" value="Verificar REGIAO" />
	</fieldset>
	<?php

	if ( isset($_POST["btnVerificar"]) ) {

		$CBoxUF = $_POST["CBoxUF"];
		$resultado = "";

		switch ($CBoxUF) {
			case "CE":
			case "RN":
				# code...
				$resultado = "Região Nordeste";
				break;
			case "SP":
			case "RJ":
				# code...
				$resultado = "Região SUDESTE";
				break;
			
		}

		if ( $resultado != "" ) {
			echo " O Estado Selecionado pertence à $resultado ";	
		}		

	}

	?>
	</form>
	</div>
	</body>
</html>


