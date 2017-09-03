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
		<?php include 'menu_topo.php'; ?>
	</header>
	<?php
	$num1 = $_POST["num1"];	
	$num1 = is_numeric($num1)?$num1:0;	
	$raiz = sqrt($num1);
	?>
	<form action="08_html_e_php_form_ex01.php" method="post">
	<p><label for="num1">Informe o valor para o cálculo da raíz:</label>
	<input type="text" name="num1" id="num1" value="<?=$num1?>" maxlength="10" /></p>
	<p><button type="submit" name="BtnCalcular">Cácular Raíz</button></p>
	<?echo "A Raiz Quadrada do Número  $num1 é $raiz";?>
	</form>
	</div>
	</body>
</html>


