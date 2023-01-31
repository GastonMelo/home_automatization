<?php
	$ip = $_POST['ip'];
        $encontrado=false;
        $file = fopen("/var/www/html/control/ip.txt", "r");
        while(!feof($file))
        {
                if(fgets == false) break;
                if(fgets($file)==$ip)
                {
                        $encontrado = true;
                        break;
                }
        }
        if(!$encontrado)
        {
                $file = fopen("/var/www/html/control/ip.txt", "a");
                fwrite($file, $ip . PHP_EOL);
        }
        fclose($file);

?>

