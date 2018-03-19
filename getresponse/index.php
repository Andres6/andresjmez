hi
<?php
header("Content-Type: text/plain");
foreach ($_REQUEST as $value) {
	echo $value;
}

?>