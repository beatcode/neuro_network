<?php


$command = escapeshellcmd("/usr/bin/python /var/www/html/neuronal_network/python/SaveWeights.py [1,1,1,1,1,1,1,1,1]");
$output = exec($command);

?>
