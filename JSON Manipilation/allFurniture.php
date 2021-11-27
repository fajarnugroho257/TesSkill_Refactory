<?php
function findItems($find)
{
	echo "Find All item where type is ". $find;
	$filedata = file_get_contents('data.json');
	$filedata = json_decode($filedata, true);
	$count = count($filedata);
	for ($i=0; $i <$count ; $i++) { 
		echo "<pre>";
		if ($filedata[$i]['type'] == $find) {
			print_r($filedata[$i]);
		}
	}
}
findItems('furniture');
?>