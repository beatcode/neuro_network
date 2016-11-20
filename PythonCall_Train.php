  GNU nano 2.2.6                        Datei: python_call.php                                              Verändert  

<?php 

        $input = $_POST['input'];
	$output = $_POST['output'];
        $command = "python /var/www/html/neuronal_network/tic_train..py $input $output";
        $temp = passthru($command);

?>










