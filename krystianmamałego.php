<?php
$tabelka = array(1,64,72,2,5,6,98,96867,98567,654,74,3452,645,234,654,24,32,123);
for ($i=0; $i < count($tabelka)-1; $i++){
	for ($j=0; $j< count($tabelka)-1; $j++){
		if ($tabelka[$j]>$tabelka[$j+1]){
			$komurka = $tabelka[$j];
			$tabelka[$j]=$tabelka[$j+1];
			$tabelka[$j+1]=$komurka;
		}
	}
}
for ($i=0;$i < count($tabelka)-1; $i++){
print_r($tabelka[$i]."<br>");
}
?>
