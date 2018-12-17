<?php
require "connect.php";
$handle = fopen("/home/fubuntu/Stažené/auta.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false)
    {
        $udaj = explode("-",$line);
        $values = implode(" ',' ",$udaj);
 		$databaze->query("INSERT INTO auta (spz,znacka,barva,vykon,spotreba,rok_vyroby) 
 									VALUES ('$values')");
		echo "Error: " . $databaze->error;       

    }

    fclose($handle);
} else {
    echo("error");
} 



