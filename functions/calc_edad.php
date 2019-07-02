<?php

/*	Ejemplo de Uso:
 *	
 *	calc_edad(Fecha de Nacimiento);
 *
 *	echo calc_edad("1998-11-19");
 *	Devuelve: 20
 *
 *	echo calc_edad("2001-07-15");
 *	Devuelve: 17
 *
 *	echo calc_edad("1960-05-22");
 *	Devuelve: 58
 *
 */
 
//Hay que definir la zona horaria
date_default_timezone_set("America/Santiago");

function calc_edad($fecha){
	list($year,$month,$day) = explode("-",$fecha);
	
	$year_dif  = date("Y") - $year;
	$month_dif = date("m") - $month;
	$day_dif   = date("d") - $day;
	
	if ($day_dif < 0 || $month_dif < 0){
		$year_dif--;
	}
	
	return $year_dif;
}
?>
