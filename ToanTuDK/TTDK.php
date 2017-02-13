<?php
	$number=-10;
	$resultFirst= ($number>=0) ? "Số dương": "Số âm";
	$resultLast= ($number%2==0) ? "chẵn": "lẽ";
	echo $result= $resultFirst." ".$resultLast;

?>