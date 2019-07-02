<?php

/*	Ejemplo de Uso:
 *	
 *	echo genkey(8,true,true,true,true);
 *	Devuelve: x#_h8Nm6
 *
 *	echo genkey(12,true,false,false,false);
 *	Devuelve: dgtncyzzgsso
 *
 *	echo genkey(32,true,false,true,false);
 *	Devuelve: x1shu2jobc2p8qbzdiardekgi8kidw3i
 *
 */

function genkey($longitud, $min = TRUE, $may = TRUE, $num = TRUE, $esp = FALSE){
	
	//Inicializacion de Variables
	$end_code = "";
	$lista = "";
	
	//Se asignan los valores correspondientes en variables separadas
	$letras ="abcdefghijklmnopqrstuvwxyz";
	$letrasMayus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$numeros = "1234567890";
	$especiales ="|@#~$%()=^*+[]{}-_Ññ";
	
	if ($min) { //Si $min (Letras Minusculas) esta activado, se agrega a la lista
		$lista .= $letras;
	}

	if($may) {	//Si $may (Letras Mayusculas) esta activado, se agrega a la lista
		$lista .= $letrasMayus; 
	}
	
	if ($num) {	//Si $num (Numeros) esta activado, se agrega a la lista
		$lista .= $numeros; 
	}
	
	if($esp) {	//Si $esp (Simbolos especiales) esta activado, se agrega a la lista
		$lista .= $especiales;
	}
	
	//Desordena la lista
	str_shuffle($lista);

	//Comienza a generar la cadena según la longitud asignada
	for( $i=1; $i<=$longitud; $i++) {
		//Obtiene un valor aleatorio de la lista y lo agrega a el $end_code
		$end_code .= $lista[rand(0,strlen($lista))];
		
		//Vuelve a desordenar la lista
		str_shuffle($lista);
	}
	
	//Devuelve el codigo generado
	return $end_code;
}
?>
