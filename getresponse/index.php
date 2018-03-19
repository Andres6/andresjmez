<?php
	
	$reqInfo = print_r($_REQUEST, TRUE);
	
	$fp = fopen('request.log', 'a');
	
	fwrite($fp, $reqInfo);

	fclose($fp);

?>