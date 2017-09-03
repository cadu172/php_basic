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
	
	// recebe o preco informando no get
	(int)$anoAtual = $_GET["ano"];
	
	echo "<h3>Usando Operador de Atribuição (--) e (++)</h3><br /><br />";

	echo "O Ano atual é ".$anoAtual."<br />";
	echo "Usando Operador Pré-Incremento(--) valor é : ".(--$anoAtual)."<br /><br />";
	echo "ValorAtual : ".$anoAtual."<br />";
	echo "*Usando Operador Pós-Incremento(--) valor é : ".($anoAtual--)."<br /><br />";
	echo "ValorAtual : ".$anoAtual."<br />";
	echo "Usando Operador Pré-Incremento(++) valor é : ".(++$anoAtual)."<br /><br />";
	echo "ValorAtual : ".$anoAtual."<br />";
	echo "Usando Operador Pós-Incremento(++) valor é : ".($anoAtual++)."<br />";
	echo "ValorAtual : ".$anoAtual."<br />";

	echo "<br />(*)Obs IMPORTANTE.: Se vc usar o operador <strong>PÓS-INCREMENTO</strong> na mesma expressão, o PHP retorna o valor antes de executar a operação (-- ou ++).<br />Note no cálculo (*) o valor atual é 2016 e mesmo com a expressão (--) continua com o mesmo valor";

	?>
	</div>
	</body>
</html>


