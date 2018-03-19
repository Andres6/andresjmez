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
			$puzzleString = explode('\n', $puzzleString);

			array_splice($puzzleString, 0, 2);

			foreach ($puzzleString as $value2) {
				echo $value2;
			}

			//print_r($puzzleString);

			echo "\n";

			echo " ABCD\n";
			echo "A\n";
			echo "B\n";
			echo "C\n";
			echo "D\n";



		}

		else {
			error_log($value);
		} 


	}
?>