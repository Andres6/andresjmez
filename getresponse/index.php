<?php
	foreach ($_GET as $value) {
		if ($value === 'Ping'){
			echo "OK";
		}
		else {
			error_log($value);
		} 
	}
?>