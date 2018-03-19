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
			echo "BobbyBobsResume.com";
		}
		else if ($value === 'Source'){
			echo "BobbyBobResume/download";
		}
		else if ($value === 'Status'){
			echo "Yes";
		}
		else if ($value === 'Years'){
			echo "300+";
		}
		else if ($value === 'Referrer'){
			echo "Billy";
		}
		else if ($value === 'Degree'){
			echo "Phd in Mega Programming";
		}
		else if ($value === 'Email Address'){
			echo "Bobby@Bob.com";
		}
		else if ($value === 'Phone'){
			echo "+1 (111) 111-1111";
		}
		else if ($value === 'Puzzle'){
			
			$puzzleString = next($_GET);
			$puzzleString = str_replace('Please solve this puzzle:', '', $puzzleString);
			$puzzleString = str_replace('ABCD', '', $puzzleString);
			$puzzleString = trim(preg_replace('/\s+/', '', $puzzleString));

			echo $puzzleString;

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