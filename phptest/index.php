<?php
	$string = 'Please solve this puzzle:\n ABCD\nA=---\nB<---\nC--->\nD>---\n';

	echo $string;


	$string = explode('\n', $string);

	array_splice($string, 0, 2);

	//unset($string[0], $string[1]);
	//unset($string[1]);

	//$string = array_diff_key($string, )




	print_r($string);



?>