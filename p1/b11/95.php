<?php 
$numbers = [0,235,345,345,4365,234,523,6,8,675,9,75,425,13,4,27,569,8760789,0,5,214,12,34,235,345];
$count = 0;
for($i = 0; $i<count($numbers); $i++) {
	if($numbers[$i] >= 95) {
		$count++;
	}
}
var_dump($count);