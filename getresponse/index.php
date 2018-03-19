<?php

	$reqInfo = print_r($_REQUEST, true);
	file_put_contents('request.log', $reqInfo, FILE_APPEND);

?>