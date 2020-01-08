//html
<html>
	<body>
		<form action="asdasdasd1.php" method="POST">
			<input type="text" name="pesel"><br>
			<input type="submit" value="Wyslij">
		</form>
	</body>
</html>
//php

<?php
	$pesel =$_POST["pesel"];
		$rocznik=substr($pesel,-9,1);
		if($rocznik==2||$rocznik==3){
			echo "Osoba urodzona po 2000 roku </br>";
				$rok=substr($pesel,-11,2);
				$miesiac=substr($pesel,-9,2);
				$dzien=substr($pesel,-7 ,2);
				$plec=substr($pesel,9,1);
				if($plec%2==0){
					echo "Kobieta </br>";
					if($miesiac-20 < 10){
						echo $rok,"</br>";
						echo "0",($miesiac-20),"</br>";
						echo $dzien,"</br>";
						echo "Osoba urodziła się w $dzien.$miesiac.20$rok";
					} else {
						echo $rok,"</br>";
						echo $miesiac,"</br>";
						echo $dzien,"</br>";
						echo "Osoba urodziła się w $dzien.$miesiac.20$rok";
					}
					} else{
						echo "Mężczyzna </br>";
					
					if($miesiac-20 < 10){
						echo $rok,"</br>";
						echo "0",($miesiac-20),"</br>";
						echo $dzien,"</br>";
						echo "Osoba urodziła się w $dzien.0",($miesiac-20),".20$rok";
					} else {
						echo $rok,"</br>";
						echo $miesiac,"</br>";
						echo $dzien,"</br>";
						echo "Osoba urodziła się w $dzien.$miesiac.20$rok";
					}
						
					}
		} else {
			$rok=substr($pesel,-11,2);
			$miesiac=substr($pesel,-9,2);
			$dzien=substr($pesel,-7 ,2);
			$plec=substr($pesel,9,1);
			if($plec%2==0){
						echo "Kobieta </br>";
						echo $rok,"</br>";
						echo $miesiac,"</br>";
						echo $dzien,"</br>";
						echo "Osoba urodziła się w $dzien.$miesiac.19$rok";
				} else{
					echo "Mężczyzna </br>";
					echo $rok,"</br>";
					echo $miesiac,"</br>";
					echo $dzien,"</br>";
					echo "Osoba urodziła się w $dzien.$miesiac.19$rok";
					}
		}
?>
	
