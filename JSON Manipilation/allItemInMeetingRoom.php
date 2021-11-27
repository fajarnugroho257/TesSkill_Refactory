<?php
function findItems($find)
{
	echo "Find All item where placement is ". $find;
	$filedata = file_get_contents('data.json');
	$filedata = json_decode($filedata, true);
	$count = count($filedata);
	for ($i=0; $i <$count ; $i++) { 
		echo "<pre>";
		if ($filedata[$i]['placement']['name'] == $find) {
			print_r($filedata[$i]);
		}
	}
}
findItems('Meeting Room');
?>