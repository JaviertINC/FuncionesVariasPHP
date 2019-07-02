<?php

/*	Ejemplo de Uso:
 *	
 *	byte_read(Valor en numeros Enteros, Unidad en la que se mostrará el retorno, Cantidad de decimales a mostrar);
 *
 *	echo byte_read(3000000000);
 *	Devuelve: 2.79 GB
 *
 *	echo byte_read(3000000000,"KB");
 *	Devuelve: 2929687.50 KB
 *
 *	echo byte_read(3000000000,"MB");
 *	Devuelve: 2861.02 MB
 *
 */
 
function byte_read($bytes, $unidad = "", $decimales = 2) {
	$unidads = array(
		'B' => 0,
		'KB' => 1,
		'MB' => 2,
		'GB' => 3,
		'TB' => 4,
		'PB' => 5,
		'EB' => 6,
		'ZB' => 7,
		'YB' => 8
	);

	$value = 0;
	
	if ($bytes > 0) {
		if (!array_key_exists($unidad, $unidads)) {
			$pow = floor(log($bytes)/log(1024));
			$unidad = array_search($pow, $unidads);
		}
		
		$value = ($bytes/pow(1024,floor($unidads[$unidad])));
	}
	if (!is_numeric($decimales) || $decimales < 0) {
		$decimales = 2;
	}

	return sprintf('%.' . $decimales . 'f '.$unidad, $value);
}
?>
