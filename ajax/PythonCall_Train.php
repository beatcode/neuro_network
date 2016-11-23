
<?php
$input = $_POST['input'];
$output = $_POST['output'];
$command = "python /var/www/html/neuronal_network/python/SetTraining.py $input $output";
$temp = Exec($command);

?>










