<?php

/*	Ejemplo de Uso:
 *	
 *	dias_trans(Fecha Inicial, Fecha Final);
 *
 *	echo dias_trans("2018-04-03","2019-07-02");
 *	Devuelve: 455
 *
 *	echo dias_trans("2018-01-01","2019-01-01");
 *	Devuelve: 365
 *
 */
 
function dias_trans($fecha_i,$fecha_f){
	$dias = ( strtotime($fecha_i) - strtotime($fecha_f) ) / 86400;
	$dias = abs($dias);
	$dias = floor($dias);
	
	return $dias;
}
?>
