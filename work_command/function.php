<?php
function sum_number() {
	$result = 0;
	for ($i = 1; $i <= 10; $i ++){
		$result = $result + $i;
	}
	echo $result . PHP_EOL;
	}   
	sum_number();
?>