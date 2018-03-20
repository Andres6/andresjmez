<?php
	$string = 'Please solve this puzzle:\n ABCD\nA->--\nB-->-\nC--=-\nD--<-\n';

	//echo $string;

	$puzzleString = explode('\n', $string);
	array_splice($puzzleString, -1);
	array_splice($puzzleString, 0, 2);

	$puzzleString[0] = substr($puzzleString[0], 1);
	$puzzleString[1] = substr($puzzleString[1], 1);
	$puzzleString[2] = substr($puzzleString[2], 1);
	$puzzleString[3] = substr($puzzleString[3], 1);

	for ($i=0; $i < count($puzzleString); $i++) { 
		$puzzleString[$i][$i] = "=";
		for ($j=0; $j < $i; $j++) { 
			if ($puzzleString[$i][$j] !== "-" ) {
				$puzzleString[$j][$i] = ($puzzleString[$i][$j] === ">" ) ? "<" : ">";
			}
			else if ($puzzleString[$j][$i] !== "-" ) {
				$puzzleString[$i][$j] = ($puzzleString[$j][$i] === ">" ) ? "<" : ">";
			}
		}
	}

	$nums = array(0, 1, 2, 3);
	for ($i=0; $i < count($puzzleString); $i++) { 
		for ($j=0; $j < count($puzzleString); $j++) { 
			if ($puzzleString[$i][$j] === ">" ) {
				$temp = $nums[$j];
				$nums[$j] = $nums[$i];
				$nums[$i] = $temp; 
			}
			else if ($puzzleString[$i][$j] === "<" && $nums[$i] > $nums[$j]) {
				$temp = $nums[$j];
				$nums[$j] = $nums[$i];
				$nums[$i] = $temp; 
			}
		}
	}

	for ($i=0; $i < count($puzzleString); $i++) { 
		for ($j=0; $j < count($puzzleString); $j++) { 
			if ($puzzleString[$i][$j] === "<" && $nums[$i] > $nums[$j]) {
				$temp = $nums[$i];
				$nums[$i] = $nums[$j];
				$nums[$j] = $temp;
			}
		}
	}
	print_r($nums);

	for ($i=0; $i < count($puzzleString); $i++) { 
		for ($j= count($puzzleString) - 1 ; $j > $i ; $j--) { 
			if ($puzzleString[$i][$j] === "-" ) {
				$puzzleString[$i][$j] = ($nums[$i] < $nums[$j]) ? "<" : ">";
				$puzzleString[$j][$i] = ($nums[$i] < $nums[$j]) ? ">" : "<";
			}
		}
	}

	$letters = "ABCD";
	echo " ABCD" . PHP_EOL;
	for ($i=0; $i < count($puzzleString); $i++) {
		echo $letters[$i];
		for ($j=0; $j < count($puzzleString) ; $j++) { 
			echo $puzzleString[$i][$j];
		} 
		echo PHP_EOL;
	}

	//print_r($string);

	//echo $string[0]

	//array_splice($string, 0, 2);

	//unset($string[0], $string[1]);
	//unset($string[1]);

	//$string = array_diff_key($string, )




	//print_r($string);



?>