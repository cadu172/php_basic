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
	<form action="10_estrutura_switch_ex02.php" method="post" id="frmVerificarDIASEMANA">
	<fieldset>
	<p>Exercício para verificar se o dia selecionado tem aula</p><br />
	<fieldset><legend>Selecione o Dia da Semana</legend>	
	<input type="radio" name="diaSemana" value="2" id="RDGSegunda" /><label for="RDGSegunda">Segunda-Feira</label><br />
	<input type="radio" name="diaSemana" value="3" id="RDGTerca" /><label for="RDGTerca">Terça-Feira</label><br />
	<input type="radio" name="diaSemana" value="4" id="RDGQuarta" /><label for="RDGQuarta">Quarta-Feira</label><br />
	<input type="radio" name="diaSemana" value="5" id="RDGQuinta" /><label for="RDGQuinta">Quinta-Feira</label><br />
	<input type="radio" name="diaSemana" value="6" id="RDGSexta" /><label for="RDGSexta">Sexta-Feira (heheh)</label><br />
	<input type="radio" name="diaSemana" value="7" id="RDGSabado" /><label for="RDGSabado">Sábado</label><br />
	<input type="radio" name="diaSemana" value="1" id="RDGDomingo" /><label for="RDGDomingo">Domingo</label>
	</fieldset>	
	<input type="submit" name="btnCalcular" value="Verificar Se Tem Aula" class="botao" />
	</fieldset>
	<?php

	if ( isset($_POST["btnCalcular"]) ) {

		$diaSemana = $_POST["diaSemana"];
		$resultado = "";

		switch ($diaSemana) {
			case 1: // domingo
			case 7: // sabado
				# code...
				$resultado = "Sábado ou Domingo não tem aula";
				break;
			
			case 2: //segunda....
			case 3:
			case 4:
			case 5:
			case 6:  // sexta
				# code...
				$resultado = "Tem Aula";
				break;
		}

		if ( $resultado != "" ) {
			echo " O Dia Selecionado $resultado ";	
		}		

	}

	?>
	</form>
	</div>
	</body>
</html>


