<?php
require "connect.php";
$handle = fopen("auta_databaze.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false)
    {
        $udaj = implode(".", explode(",",$line));
        $udaj = explode("-",$udaj);

        $values = implode("','",$udaj);
        echo "$values";

        $databaze->query("INSERT INTO auta (spz,znacka,barva,vykon,spotreba,rok_vyroby) 
                                    VALUES ('$values')");
        echo " -> Error: " . $databaze->error;   
        echo "<br>";    

    }

    fclose($handle);
} else {
    echo("error");
}