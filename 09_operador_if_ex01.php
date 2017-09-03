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
		
		$anoAtual = date("Y");
		$anoNascimento = $_POST["edtAno"];		
		// tratar ano atual.
		$anoNascimento = isset($anoNascimento)?$anoNascimento:$anoAtual;
		$idade = $anoAtual-$anoNascimento;
		?>
	</header>	
	<!-- # codigo aqui -->
	<form action="09_operador_if_ex01.php" method="post" id="frmValidaIDADE">
	<fieldset><legend>Verificar se Pessoa Pode Dirigir</legend>
	<label for="edtAno">Ano de Nascimento:</label>
	<input type="number" name="edtAno" id="edtAno" value="<?=$anoNascimento?>" step="1" style="width: 100px;" />
	<input type="submit" name="btnValidar" value="Validar Idade" />
	</fieldset>

	<?php

	if ( ($idade >= 18) && ($idade <= 65) ) {
		echo "Com a Idade de $idade anos, PODE VOTAR, É OBRIGATORIO!<br />";

	}
	elseif ( $idade >= 16 ) {
		echo "Com a Idade de $idade anos, PODE VOTAR MAS NAO É OBRIGATORIO!<br />";
	}
	else {
		echo "Com a Idade de $idade anos, NAO PODE VOTAR!<br />";	
	}			


	if ( $idade >= 18 ) {
		echo "Com a Idade de $idade anos, PODE Dirigir!<br />";
	}
	else {
		echo "Com a Idade de $idade anos, NAO PODE Dirigir!<br />";
	}



	?>

	</form>
	</div>
	</body>
</html>


