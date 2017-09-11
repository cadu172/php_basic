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
	<form action="13_estrutura_for_ex02.php" method="post" id="frmFatorial">
	<h3>Exercicio 1 ( FOR ) TABUADA</h3>
	<fieldset>
	<p>
		<label for="cmbTabuada">Tabuada</label>
		<select name="cmbTabuada" id="cmbTabuada">
		<?php
		for($i=1;$i<=20;$i++) {
			echo "<option value='".$i."'>".$i."</option>";
		}
		?>
		</select>		
	</p>
	<button type="submit" name="BtnCalcular">Calcular Tabuada</button>
	</fieldset>				
	</form>
	<?php

	if ( isset($_POST["BtnCalcular"]) ) {

		$tabuada = $_POST["cmbTabuada"];

		for ($i=1;$i<=10;$i++) {
			echo "$tabuada X $i => ".($tabuada*$i)."<br />";
		}			
	}

	?>	
	</div>
	</body>
</html>


