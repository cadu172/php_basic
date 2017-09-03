<?php

$texto = isset($_POST["texto"])?$_POST["texto"]:"";	
$tamanho = isset($_POST["tamanho"])?$_POST["tamanho"]:10;
$cor = isset($_POST["cor"])?$_POST["cor"]:"#666666";

?>
<DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Curso em Video - PHP 5.5</title>
		<meta charset="UTF-8" />
		<meta name="author" content="CARLOS EDUARDO DOS SANTOS ROBERTO" />
		<meta name="description" content="Documento HTML5 Padrão"/>
		<meta name="keywords" content="Curso em video - PHP Básico Gustavo Guanabara"/>
		<link rel="stylesheet" href="_css/estilo.css">
		<style type="text/css">
		span#meuTexto
		{
			font-size: <?=$tamanho?>;
			color: <?=$cor?>;
			background-color: #FFFFFF;
			font-weight: bold;			
		}	
		</style>
	</head>
	<body>
	<div>
	<header>
		<h1></h1>
		<?php include 'menu_topo.php'; ?>
	</header>

	<form action="08_html_e_php_form_ex02.php" method="post">
	<p><label for="texto">Informe o Texto:</label>
	<input type="text" id="texto" name="texto" value="<?=$texto?>" placeholder="Informe o texto a ser formatado..."  maxlength="100" style="width: 300px;" /></p>
	
	<p><label>Selecione a Core:</label>
	<input type="color" name="cor"></p>

	<p><label>Tamanho do Texto:</label>
	<select name="tamanho">
		<optgroup>Tamanho do Texto</optgroup>
		<option value="10">10pt</option>
		<option value="20">20pt</option>
		<option value="30">30pt</option>
	</select>
	</p>
	<input type="submit" name="BtnSubmit" value="Enviar" />
	<hr />
	<span id="meuTexto">
	<?php
	echo $texto;
	?>
	</span>
	</form>
	</div>
	</body>
</html>


