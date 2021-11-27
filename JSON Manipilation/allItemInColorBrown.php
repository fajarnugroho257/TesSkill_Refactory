<?php
function findItems($find)
{
	echo "Find All item where tags is". $find;
	$filedata = file_get_contents('data.json');
	$filedata = json_decode($filedata, true);
	$count = count($filedata);
	for ($i=0; $i <$count ; $i++) { 
		echo "<pre>";
		$tags = count($filedata[$i]['tags']);
		for ($t=0; $t <$tags; $t++) { 
			if ($filedata[$i]['tags'][$t]==$find) {
				print_r($filedata[$i]);
			}
		}
		
	}
}
findItems('brown');
?>