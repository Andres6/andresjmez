<?php
header("HTTP/1.1 200 OK");


if ('PingPlease return OK so that I know your service works.'){
	echo "OK";
	foreach ($_REQUEST as $value) {
		echo $value;
	}
}

?>