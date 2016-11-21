
<?php

$input = $_POST['input'];
$output = $_POST['output'];
$command = "python /var/www/html/neuronal_network/python/tic_train.py $input $output";
$temp = passthru($command);

?>










