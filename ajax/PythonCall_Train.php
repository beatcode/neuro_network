<?php

$input = $_POST['input'];
$output = $_POST['output'];
$command = escapeshellcmd("/usr/bin/python /var/www/html/neuronal_network/python/SetTraining.py $input $output");
$output = exec($command);

?>









