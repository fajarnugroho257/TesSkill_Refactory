<?php

function Palindrome($pesan)
{	
	$kata = strtolower($pesan);
	$PecahStr = explode(" ", $kata);
	for ($i=0; $i <count($PecahStr) ; $i++) { 
		$balik[$i] = strrev($PecahStr[$i]);	
	}

	for ($i=count($PecahStr)-1; $i >=0; $i--) { 
		$hasil[$i] = strtolower($balik[$i]);
	}
	$a = implode($PecahStr);
	$b = implode($hasil);

	if ($a == $b ) {
		$hasil = true. " true";
	}else{
		$hasil = false. " false";
	}
	echo $hasil. "<br>";
}
Palindrome('Radar');
Palindrome('Malam');
Palindrome('Kasur ini rusak');
Palindrome('Ibu Ratna antar ubi');
Palindrome('Malas');
Palindrome('Makan nasi goreng');
Palindrome('Balonku ada lima');

?>