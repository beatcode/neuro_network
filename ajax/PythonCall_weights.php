<?php


$command = escapeshellcmd("/usr/bin/python /var/www/html/neuronal_network/python/SaveWeights.py");
$output = exec($command);

?>
