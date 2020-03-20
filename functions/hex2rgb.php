//Uso
//  hex_rgb("#4caf50"); //return "76, 175, 80"

function hex_rgb($hex){
	list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
	return "$r, $g, $b";
}
