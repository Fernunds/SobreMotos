<?php
function price($number)
{
	if(empty($number)){
		return 'Consulte o preço!';
	} else {
		$number = str_replace('.','-', number_format($number, 2));
		$number = str_replace(',','.', $number);
		$number = str_replace('-',',', $number);
	
		return 'R$ '.$number;
	}
	
	return 'Consulte o preço!';
}

function plate($plate)
{
	return substr($plate, strlen($plate)-1, 1);
}