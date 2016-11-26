<?php
$command = escapeshellcmd("python /var/www/html/neuronal_network/python/clear.py");
$temp = passthru($command);
?>
