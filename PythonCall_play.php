<?php 



	$input = $_POST['input'];
	$command = "python /var/www/html/neuronal_network/tic.py $input";
        $temp = passthru($command);



?>
