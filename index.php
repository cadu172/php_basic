<DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Primeira Página em PHP 5.5</title>
		<meta charset="UTF-8" />
		<meta name="author" content="CARLOS EDUARDO DOS SANTOS ROBERTO" />
		<meta name="description" content="Arquivo para teste do servidor PHP"/>
		<meta name="keywords" content="Curso em video - PHP Bᳩco Gustavo Guanabara"/>
		<link rel="stylesheet" href="_css/estilo.css">
		<style type="text/css">
			nav#menu_aulas ul li
			{
				font-family: Calibri, Tahoma, sans-serif;
				font-size: 12pt;
				color: #273747;				
			}

			nav#menu_aulas ul li a
			{
				font-weight: bold;
			}
		</style>
	</head>
	<body>
	<div>
	<header>
		<h1></h1>
		<?php
		include 'menu_topo.php';
		?>
	</header>
	<section>
		<article>
		<header><h2></h2></header>		
		<footer></footer>
		</article>
	</section>
	<nav id="menu_aulas">
		<ul>
			<li><a href="04_variaveis.php">Aula 04 - Usando Variáveis com PHP</a></li>
			<li><a href="05_operadores_aritimeticos.php?val_a=-50.2224&val_b=2">Aula 05 - Operadores Aritiméticos</a></li>
			<li><a href="05_funcoes_aritimeticas.php?val_a=-50.2224&val_b=2">Aula 05 - Funções Aritiméticas</a></li>
			<li><a href="06_operadores_atribuicao_01.php?preco=200&percentual=10">Aula 06 - Operadores de Atribuição (Cálculo de Percentual)</a></li>
			<li><a href="06_operadores_atribuicao_02.php?ano=2017">Aula 06 - Operadores de Atribuição (Pré-Incremento/Pós-Incremento)</a></li>
			<li><a href="06_operadores_atribuicao_03.php?ano=2017">Aula 06 - Operadores de Atribuição (Variáveis referênciadas)</a></li>
			<li><a href="06_operadores_atribuicao_04.php?ano=2017">Aula 06 - Operadores de Atribuição (Variáveis de variáveis)</a></li>
			<li><a href="07_operadores_relacionais_ex01.php">Aula 07 - Operadores Relacionais (Exercício 1)</a></li>
			<li><a href="07_operadores_relacionais_ex02.php">Aula 07 - Operadores Relacionais (Exercício 2)</a></li>
			<li><a href="08_html_e_php_form_ex01.php">Aula 08 - Integração HTML5 + PHP (ex 01)</a></li>
			<li><a href="08_html_e_php_form_ex02.php">Aula 08 - Integração HTML5 + PHP (ex 02)</a></li>
			<li><a href="09_operador_if_ex01.php">Aula 09 - Estrutura Condicional "IF" (ex 01)</a></li>
			<li><a href="09_operador_if_ex03.php">Aula 09 - Estrutura Condicional "IF" (ex 03)</a></li>
			<li><a href="10_estrutura_switch_ex01.php">Aula 10 – Estrutura Condicional Switch (ex 01)</a></li>
			<li><a href="10_estrutura_switch_ex02.php">Aula 10 – Estrutura Condicional Switch (ex 02)</a></li>
			<li><a href="10_estrutura_switch_ex03.php">Aula 10 – Estrutura Condicional Switch (ex 03)</a></li>
			<li><a href="11_estrutura_while_ex01.php">Aula 11 – Estrutura de Repetição While (Exercicio 1)</a></li>
			<li><a href="11_estrutura_while_ex02.php">Aula 11 – Estrutura de Repetição While (Exercicio 2)</a></li>
			<li><a href="11_estrutura_while_ex03.php">Aula 11 – Estrutura de Repetição While (Exercicio 3)</a></li>
			<li><a href="12_estrutura_do_while_ex01.php">Aula 12 – Estrutura de Repetição "Do While" (Exercício 1)</a></li>
			<li><a href="12_estrutura_do_while_ex02.php">Aula 12 – Estrutura de Repetição "Do While" (Exercício 2)</a></li>
			<li><a href="12_estrutura_do_while_ex03.php">Aula 12 – Estrutura de Repetição "Do While" (Exercício 3)</a></li>
			<li><a href="13_estrutura_for_ex01.php">Aula 13 – Estrutura de Repetição For (Exercicio 1)</a></li>
			<li><a href="13_estrutura_for_ex02.php">Aula 13 – Estrutura de Repetição For (Exercicio 2)</a></li>
			<li><a href="13_estrutura_for_ex03.php">Aula 13 – Estrutura de Repetição For (Exercicio 3)</a></li>
			<li><a href="14_estrutura_functions_ex01.php">Aula 14 – Rotinas em PHP (Parte 1) (Exercicio 1)</a></li>
			<li><a href="14_estrutura_functions_ex02.php">Aula 14 – Rotinas em PHP (Parte 1) (Exercicio 2)</a></li>
			<li><a href="14_estrutura_functions_ex03.php">Aula 14 – Rotinas em PHP (Parte 1) (Exercicio 3)</a></li>
			<li><a href="15_estrutura_functions_ex01.php">Aula 15 – Rotinas em PHP (Parte 2) (Exercicio 1)</a></li>
			<li><a href="15_exemplo_include.php">Aula 15 – Rotinas em PHP (Parte 2) (Usando INCLUDE)</a></li>
			<li><a href="15_exemplo_require.php">Aula 15 – Rotinas em PHP (Parte 2) (Usando REQUIRE)</a></li>
			<li><a href="15_exemplo_include_once.php">Aula 15 – Rotinas em PHP (Parte 2) (Usando INCLUDE ONCE)</a></li>
			<li><a href="15_exemplo_require_once.php">Aula 15 – Rotinas em PHP (Parte 2) (Usando REQUIRE ONCE)</a></li>

			<li><a href="16_funcoes_string_01.php">Aula 16 – Funções String em PHP (Parte 1)</a></li>
			<li><a href="17_funcoes_string_02.php">Aula 17 – Funções String em PHP (Parte 2)</a></li>

			<li><a href="18_vetor_matriz_01.php">Aula 18 – Vetores e Matrizes (Parte 1)</a></li>
			<li><a href="19_vetor_matriz_01.php">Aula 19 – Vetores e Matrizes (Parte 2)</a></li>
		</ul>
	</nav>
	</div>
	</body>
</html>



