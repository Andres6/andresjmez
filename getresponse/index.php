<?php
header("HTTP/1.1 200 OK");
header("Content-Type:plain/text");
foreach ($_REQUEST as $value) {
	echo $value;
}

?>