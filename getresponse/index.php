hi
<?php
header("HTTP/1.1 200 OK");
foreach ($_REQUEST as $value) {
	echo $value;
}

?>