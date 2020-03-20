//USO
// rgb_hex(76, 175, 80); //return "#4caf50"

function rgb_hex($rgb){
	$rgbarr = explode(",",$rgb,3);
	echo sprintf("#%02x%02x%02x", $rgbarr[0], $rgbarr[1], $rgbarr[2]);
}
