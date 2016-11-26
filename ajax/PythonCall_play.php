<?php

$input = $_POST['input'];
$command = escapeshellcmd("python /var/www/html/neuronal_network/python/play.py $input");
$temp = passthru($command);

?>
