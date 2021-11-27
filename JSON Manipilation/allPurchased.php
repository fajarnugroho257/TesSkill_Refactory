<?php
function findItems($find)
{
	echo "Find All item where purchased at ". $find;
	$filedata = file_get_contents('data.json');
	$filedata = json_decode($filedata, true);
	$count = count($filedata);
	$finddate = strtotime("16-01-2020");
	for ($i=0; $i <$count ; $i++) { 
		echo "<pre>";
		$epoch = $filedata[$i]['purchased_at'];
		$date = date("d-m-Y",$epoch);
		if ($find == $date) {
			$hasil = $filedata[$i];
			print_r($hasil);
		}

	}
}
findItems('16-01-2020');

?>
