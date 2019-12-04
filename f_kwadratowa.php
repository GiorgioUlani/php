<?php
$a=1;
$b=4;
$c=4;
$delta= pow($b,2) + $a*$c*(-4) ;
echo "Delta wynosi ","$delta","<br>";
if ($delta>0){
		$pierwiastek= round(sqrt($delta),2);
			echo "Pierwiastek z delty wynosi ",$pierwiastek,"<br>";
			$x1= (-$b + $pierwiastek)/2*$a;
			echo "Pierwsze miesjce zerowe=","$x1","<br>";
			$x2= (-$b - $pierwiastek)/2*$a;
			echo "Drugie miesjce zerowe=","$x2","<br>";
}	
	else if($delta==0){
		$pierwiastek= round(sqrt($delta),2);
		echo "Pierwiastek z delty wynosi ",$pierwiastek,"<br>";
		$x0=(-$b/$a*2);
		echo "Miesjce zerowe=","$x0";
	} 
	else {
		echo"Brak mniejsc zerowych";
	}

?>
