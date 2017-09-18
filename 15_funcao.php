<?php

	/*
	funcao com passagem de parametro por referencia (ponteiro)

	*/
	function ref_Ajustar(&$_SalarioA, &$_SalarioB, $perc_AJUSTE) {

		/*
			observacoes

			os parametros &$_SalarioA, &$_SalarioB
			sao parametros por referencia

			o parametro $perc_AJUSTE é por valor.
		*/
		$_SalarioA = $_SalarioA*(1+$perc_AJUSTE/100);
		$_SalarioB = $_SalarioB*(1+$perc_AJUSTE/100);

	}


?>