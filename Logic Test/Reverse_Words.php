<?php

function reverseWords($pesan)
{
	$string = $pesan;
	$PecahStr = explode(" ", $string);

	for ( $i = 0; $i < count( $PecahStr ); $i++ ) {
		if ($PecahStr[$i] == ucfirst($PecahStr[$i])) {
			$balik = strrev($PecahStr[$i]);
			$lower =strtolower($balik);
			echo ucfirst($lower." ");
		} elseif ($PecahStr[$i] != ucfirst($PecahStr[$i])) {
			echo strrev(" ".$PecahStr[$i]." ");
		}
	}
}

reverseWords('Saya Muchamad fajar Nugroho universitas Muhammadiyah magelang');
echo "<br>";
reverseWords('I am A Great human');

?>