<?php
	foreach ($_GET as $value) {
		if ($value === 'Ping'){
			echo "OK";
		}
		else if ($value === 'Name'){
			echo "Bobby Bob";
		}
		else if ($value === 'Position'){
			echo "Mega Super Programmer";
		}
		else if ($value === 'Resume'){
			echo "https://bobbybobs.com/resume";
		}
		else if ($value === 'Source'){
			echo "https://bobbybobs.com/source";
		}
		else if ($value === 'Status'){
			echo "Yes";
		}
		else if ($value === 'Years'){
			echo "750+";
		}
		else if ($value === 'Referrer'){
			echo "Billy Bill";
		}
		else if ($value === 'Degree'){
			echo "PhD in Super Mega Programming";
		}
		else if ($value === 'Email Address'){
			echo "Bobby@bobbybobs.com";
		}
		else if ($value === 'Phone'){
			echo "+1 (111) 111-1111";
		}
		else if ($value === 'Puzzle'){
			
			$puzzleString = next($_GET);
			$puzzleString = explode(PHP_EOL, $puzzleString);
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
				for ($j= count($puzzleString) - 1; $j > $i; $j--) { 
					if ($puzzleString[$i][$j] === ">" ) {
						$temp = $nums[$i];
						$nums[$i] = $nums[$j];
						$nums[$j] = $temp; 
					}
					else if ($puzzleString[$i][$j] === "<" && $nums[$i] > $nums[$j]) {
						$temp = $nums[$i];
						$nums[$i] = $nums[$j];
						$nums[$j] = $temp; 
					}
				}
			}

			for ($i=0; $i < count($puzzleString); $i++) { 
				for ($j= count($puzzleString) - 1; $j > $i; $j--) { 
					if ($puzzleString[$i][$j] === "<" && $nums[$i] > $nums[$j]) {
						$temp = $nums[$i];
						$nums[$i] = $nums[$j];
						$nums[$j] = $temp; 
					}
				}
			}

			for ($i=0; $i < count($puzzleString); $i++) { 
				for ($j= count($puzzleString) - 1; $j > $i; $j--) { 
					if ($puzzleString[$i][$j] === "-" ) {
						$puzzleString[$i][$j] = ($nums[$i] < $nums[$j]) ? "<" : ">";
						$puzzleString[$j][$i] = ($nums[$i] === ">" ) ? "<" : ">";
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

		}

		else {
			error_log($value);
		} 


	}
?>