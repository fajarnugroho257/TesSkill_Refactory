<?php
function LeapYear($awal, $akhir)
{
	$no = 1;
	$inputawal = $awal;
	$inputsampai = $akhir;
	$no = 1;
	if ($inputawal % 4 == 0) {
		$awal = $inputawal+4;
	}else{
		$awal = $inputawal;
	}
	for ($i=$awal; $i <=$inputsampai ; $i++) { 
		if ( $bagi = $i % 4 == 0 ) {
			echo $no++.'.';
			echo ' '.$i."<br>";
		}
	}
}

LeapYear(1900, 2020)

?>