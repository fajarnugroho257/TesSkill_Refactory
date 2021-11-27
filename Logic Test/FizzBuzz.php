<?php 

$n = 30;
for ($i=1; $i <=$n ; $i++) { 
	$ary[$i] = $i;
	if ($ary[$i] % 3 == 0 && $ary[$i] % 5 == 0) {
		$ary[$i] = 'FizzBuzz';
	}elseif ($ary[$i] % 3 == 0) {
		$ary[$i] = 'Fizz';
	}elseif ($ary[$i] % 5 == 0) {
		$ary[$i] = 'Buzz';
	}
}
echo "<pre>";
print_r($ary);

?>