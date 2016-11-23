<?php

$input = $_POST['input'];
$command = "python /var/www/html/neuronal_network/python/play.py $input";
$temp = passthru($command);

?>
