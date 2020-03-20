/* Este Script ordena fechas de la mas nueva a la mas antigua */

function sortDates( $a, $b ) {
	return strtotime($a["datef"]) - strtotime($b["datef"]);
}
